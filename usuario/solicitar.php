<?php
    session_start();

    include('../banco.php');

    $procedimentos = $_SESSION['procedimentos'];
    $limite = $limite;
    $nome_usuario = $_SESSION['nome'];

    $sql = "select id_usuario from usuario where nome = '$nome_usuario'";

    $consulta = $conexao->query($sql);

    $linha = $consulta->fetch_array(MYSQLI_ASSOC);

    $id_usuario = $linha['id_usuario'];
    
    //Fazendo um Select para cada procedimento presente no array procedimentos
    for($i=0; $i<$limite; $i++) { 
        $sql2[$i] = "select id_procedimento from procedimento where nome = '$procedimentos[$i]'";
    }

    //Fazendo uma consulta para cada Select presente no array sql
    for($i=0; $i<$limite; $i++) { 
        $consulta2[$i] = $conexao->query($sql2[$i]);
    }

    //Transformando cada elemento do array consulta2 num array e atribuindo a cada elemento do array linha2
    for($i=0; $i<$limite; $i++) { 
        $linha2[$i] = $consulta2[$i]->fetch_array(MYSQLI_ASSOC);
    }


    for($i=0; $i<$limite; $i++) { 
        $sql3[$i] = "insert into usuario_solicita_procedimento(id_solicita_procedimento, usuario_solicitante, procedimento_solicitado) 
                                 values(null, ) ";
    }

    for($i=0; $i<$limite; $i++) { 
        $consulta2[$i] = $conexao->query($sql2[$i]);
    }


    print_r($linha[0]['id_procedimento']);


?>