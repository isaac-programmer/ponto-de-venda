<?php
    session_start();

    include('../banco.php');

    $procedimentos = $_SESSION['procedimentos'];
    $limite = $_SESSION['qtd_procedimentos'];
    $nome_usuario = $_SESSION['nome'];
    $telefone_usuario = $_SESSION['telefone'];
    $data_atual = date("d/m/Y");
    $hora_atual = date('h:i:s');

    //Obtendo o id do usuário solicitante
    $sql = "select id_usuario from usuario where nome = '$nome_usuario' and telefone = '$telefone_usuario'";

    $consulta = $conexao->query($sql);

    $linha = $consulta->fetch_array(MYSQLI_ASSOC);

    $id_usuario = $linha['id_usuario'];
    
    //Fazendo um Select para cada procedimento presente no array procedimentos
    for($i=0; $i<$limite; $i++) { 
        $sql2[$i] = "select id_procedimento from procedimento where nome = '$procedimentos[$i]'";
    }

    //Fazendo uma consulta para cada Select presente no array sql2
    for($i=0; $i<$limite; $i++) { 
        $consulta2[$i] = $conexao->query($sql2[$i]);
    }

    //Transformando cada elemento do array consulta2 num array e atribuindo a cada elemento do array linha2
    for($i=0; $i<$limite; $i++) { 
        $linha2[$i] = $consulta2[$i]->fetch_array(MYSQLI_ASSOC);
    }

    //Atribuindo o id de todos os procedimentos selecionados a cada elemento do array id_procedimentos
    for($i=0; $i<$limite; $i++) { 
        $id_procedimentos[$i] = $linha2[$i]['id_procedimento'];
    }
    
    //Fazendo um Insert na tabela usuario_solicita_procedimento
    for($i=0; $i<$limite; $i++) { 
        $sql3[$i] = "insert into usuario_solicita_procedimento(id_solicita_procedimento, usuario_solicitante, procedimento_solicitado, data_solicitacao, hora_solicitacao) 
                                 values(null,$id_usuario,$id_procedimentos[$i],$data_atual,$hora_atual)";
    }

    //Fazendo uma consulta para cada Insert presente no array sql3
    for($i=0; $i<$limite; $i++) { 
        $consulta3[$i] = $conexao->query($sql3[$i]);
    }
?>