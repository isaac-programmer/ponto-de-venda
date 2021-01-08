<?php
   include('banco.php');

   //recebendo as variáveis por post
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
 
   //criando uma consulta mysql
   $sql  = "select nome, email, telefone from usuario where nome='$nome' and email='$email' and telefone='$telefone'";
 
   $consulta = $conexao->query($sql);
   
   if($consulta->num_rows > 0) {
      $usuario = $consulta->fetch_array(MYSQLI_ASSOC);
	   if($usuario['nome'] == "Julyan" && $usuario['telefone'] == "(88) 9 9873-4533"){
       //inicializar a sessão
	      session_start();
	      $_SESSION['login'] = 'ok';
         header('Location: julyan/solicitacoes.php');
      }else{
        //inicializar a sessão
	      session_start();
	      $_SESSION['login'] = 'ok';
	      $_SESSION['nome'] = $nome;
         $_SESSION['email'] = $email;
         $_SESSION['telefone'] = $telefone;
         header('Location: usuario/procedimentos.php');
      }  
   }else{
      header('Location: index.php?login=erro');
   }	   
?>