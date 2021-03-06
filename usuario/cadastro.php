<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
	<title>Ponto de Venda</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
	<link rel="stylesheet" href="../css/bootstrap.min.css" >
	<!-- //bootstrap-css -->
	<!-- Custom CSS -->
	<link href="../css/style.css" rel='stylesheet' type='text/css' />
	<link href="../css/style-responsive.css" rel="stylesheet"/>
	<!-- font CSS -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="../css/font.css" type="text/css"/>
	<link href="../css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	<script src="../js/jquery2.0.3.min.js"></script>
</head>
<body>
	<div class="reg-w3">
		<div class="w3layouts-main">
			<?php 
				if(isset($_GET['insert'])){
					if($_GET['insert'] == 'ok'){
						echo '<div class="alert alert-success" role="alert">
								<strong>Usuário cadastrado com sucesso!</strong>
							  </div>';
	            	} 
						
					if($_GET['insert'] == 'erro'){
						echo '<div class="alert alert-danger" role="alert">
								<strong>Erro ao cadastrar o usuário!</strong> Tente Novamente!
							  </div>';
	            	} 	
				}
			?>
			<h2>Cadastre-se</h2>
				<form method="POST" action="inserir.php">
					<input type="text" class="ggg" name="nome" placeholder="Digite o seu nome" required="">
					<input type="email" class="ggg" name="email" placeholder="Digite o seu email" required="">
					<input type="text" class="ggg" name="telefone" placeholder="Digite o seu número de telefone" required="">
					<div class="clearfix"></div>
					<input type="submit" value="Cadastrar" name="register">
					<p><a href="../index.php" rel="prev" target="_self">Voltar</a></p>
				</form>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('.alert').delay(3000);
			$('.alert').hide(2000);
		});
	</script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="../js/scripts.js"></script>                 
	<script src="../js/jquery.slimscroll.js"></script>
	<script src="../js/jquery.nicescroll.js"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
	<script src="../js/jquery.scrollTo.js"></script>
</body>
</html>
