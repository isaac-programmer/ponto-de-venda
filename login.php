<?php
   session_start();

   if(isset($_SESSION['login'])){
      header('Location: index.php?temgente=ok');
   }else{
      include('banco.php');

      //recebendo as variáveis por post
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
   
      //criando uma consulta mysql
      $sql  = "select * from usuario where nome='$nome' and email='$email' and telefone='$telefone'";
   
      $consulta = $conexao->query($sql);
      
      if($consulta->num_rows > 0) {
         $usuario = $consulta->fetch_array(MYSQLI_ASSOC);
         if($usuario['nome'] == "Julyan" && $usuario['telefone'] == "(88) 9 9873-4533"){
         //inicializar a sessão
            $_SESSION['login'] = 'ok';
            header('Location: julyan/solicitacoes.php?login=ok');
         }else{
         //inicializar a sessão
            $_SESSION['login'] = 'ok';
            header('Location: usuario/procedimentos.php?login=ok&id_usu='.$usuario['id_usuario'].'');
         }  
      }else{
         header('Location: index.php?login=erro');
      }
   }   	   
?>