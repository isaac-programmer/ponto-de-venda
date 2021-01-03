<?php
  include('banco.php');
  //recebendo as variáveis por post
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
 
  //variaveis de conexão com o banco de dados
  $hostname = "localhost";
  $user = "root";
  $password = "";
  $database = "biblioteca";
 
  $conexao = new mysqli($hostname,$user,$password,$database);
 
  if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());
  echo mysqli_connect_error();
 
   //criando uma consulta mysql
   $sql  = "select * from usuario where usuario='$usuario' and senha='$senha'";
   
   echo $sql;	
 
   $consulta = $conexao->query($sql);
   
   if($consulta->num_rows > 0) {
	   $linha = $consulta->fetch_array(MYSQLI_ASSOC);
	   //inicializar a sessão
	   session_start();
	   $_SESSION['login']='ok';
	   $_SESSION['usuario']=$usuario;
	   $_SESSION['img']=$linha['img'];
	   header('location: principal.php?login=ok');
   }else{
       header('location: index.php?login=erro');
   }	   
   
?>