<?php
    session_start();
	if(!isset($_SESSION['login'])){
		header('Location: ../index.php?login=semsessao');
    }
    
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
        header('Location: lista-de-procedimentos.php?alterou=ok');
    }else{
        header('Location: lista-de-procedimentos.php?alterou=erro');
    }
?>