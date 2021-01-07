<?php
    include('../banco.php');

    $id = $_POST['id_proced'];
    $nome = $_POST['procedimento'];
    $funcionalidades = $_POST['funcionalidades'];
    $vantagens = $_POST['vantagens'];
    $preco = $_POST['preco'];

    $sql = "update procedimento set nome = '$nome',
                                    funcionalidades = '$funcionalidades',
                                    vantagens = '$vantagens',
                                    preco = $preco where id_procedimento = $id";
    
    $atualizar = $conexao->query($sql);

    if ($atualizar == true) {
        header('Location: alterar-cadastro-de-procedimento.php?alterou=ok');
    }else{
        header('Location: alterar-cadastro-de-procedimento.php?alterou=erro');
    }
?>