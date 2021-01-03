<?php
   include('banco.php');

   //recebendo as variáveis por post
   $usuario = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
 
   //criando uma consulta mysql
   $sql  = "select id_usuario, nome, email, telefone from usuario where nome='$usuario' and telefone='$telefone'";
 
   $consulta = $conexao->query($sql);
   
   if($consulta->num_rows > 0) {
      $objeto_usuario = $consulta->fetch_array(MYSQLI_ASSOC);
	   if($objeto_usuario['nome'] == "Julyan" && $objeto_usuario['telefone'] == "(88) 9 9873-4533"){
       //inicializar a sessão
	      session_start();
	      $_SESSION['login']='ok';
         header('Location: julyan.php/solicitacoes.php?login=ok');
      }else{
        //inicializar a sessão
	      session_start();
	      $_SESSION['login'] = 'ok';
	      $_SESSION['nome'] = $usuario;
         $_SESSION['email'] = $email;
         $_SESSION['telefone'] = $telefone;
         header('Location: usuario/procedimentos.php?login=ok');
      }  
   }else{
      header('Location: index.php?login=erro');
   }	   
   
?>