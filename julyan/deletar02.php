<?php
    include('../banco.php');

    $id = $_GET['id'];

    $sql = "delete from usuario_solicita_procedimento where id_solicita_procedimento = $id";

    $delete = $conexao->query($sql);

    if($delete == true){
        header('Location: solicitacoes.php?delete=ok');
    }else{
        header('Location: solicitacoes.php?delete=erro');
    }
?>