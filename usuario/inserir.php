<?php
    include('../banco.php');

    $nome = $_POST['nome']; 
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "insert into usuario (id_usuario,nome,email,telefone)
                        values (null,'$nome','$email','$telefone')";
    $insert = $conexao->query($sql);

    if($insert==true){
        header('Location: cadastro.php?insert=ok');
    }else{
        header('Location: cadastro.php?insert=erro');
    }
?>