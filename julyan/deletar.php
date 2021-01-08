<?php
    session_start();
	if(!isset($_SESSION['login'])){
		header('Location: ../index.php?login=semsessao');
    }
    
    include('../banco.php');

    $id = $_GET['id'];

    $sql = "delete from procedimento where id_procedimento = $id";

    $delete = $conexao->query($sql);

    if($delete == true){
        header('Location: lista-de-procedimentos.php?delete=ok');
    }else{
        header('Location: lista-de-procedimentos.php?delete=erro');
    }
?>