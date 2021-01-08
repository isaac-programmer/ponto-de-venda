<?php    
    include('../banco.php');

    $nome = $_POST['procedimento'];
    $funcionalidades = $_POST['funcionalidades'];
    $vantagens = $_POST['vantagens'];
    $preco = $_POST['preco'];

    $sql = "insert into procedimento (id_procedimento,nome,funcionalidades,vantagens,preco)
                        values (null,'$nome','$funcionalidades','$vantagens','$preco')";
    
    $insert = $conexao->query($sql);

    if($insert == true){
        header('Location: cadastro-de-procedimento.php?insert=ok');
    }else{
        header('Location: cadastro-de-procedimento.php?insert=erro');
    }
?>