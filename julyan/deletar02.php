<?php
    include('../banco.php');

    $id = $_GET['id'];

    $sql = "delete from usuario_solicita_procedimento where id_solicita_procedimento = $id";

    $delete = $conexao->query($sql);

    if($delete == true){
        session_start();    
        $_SESSION['delete'] = 'ok';
        header('Location: solicitacoes.php');
    }else{
        session_start();
        $_SESSION['delete'] = 'erro';
        header('Location: solicitacoes.php');
    }
?>