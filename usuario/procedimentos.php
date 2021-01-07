<?php
	session_start();
	if(!isset($_SESSION['login'])){
		header('Location: ../index.php?login=semsessao');
	}
?>
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
        <link rel="stylesheet" href="../css/morris.css" type="text/css"/>
        <!-- //font-awesome icons -->
        <script src="../js/jquery2.0.3.min.js"></script>
        <script src="../js/raphael-min.js"></script>
        <script src="../js/morris.js"></script>
    </head>
    <body>
        <section id="container">
            <!--header start-->
            <header class="header fixed-top clearfix">
                <!--logo start-->
                <div class="brand">
                    <a href="procedimentos.php" class="logo">Ponto de Venda</a>
                    <div class="sidebar-toggle-box">
                        <div class="fa fa-bars"></div>
                    </div>
                </div>
                <!--logo end-->
                <div class="nav notify-row" id="top_menu">
                </div>
            </header>
            <!--header end-->
            <!--sidebar start-->
            <aside>
                <div id="sidebar" class="nav-collapse">
                    <!-- sidebar menu start-->
                    <div class="leftside-navigation">
                        <ul class="sidebar-menu" id="nav-accordion">
                            <li>
                                <a href="procedimentos.php">
                                    <i class=""></i>
                                    <span>Procedimentos</span>
                                </a>
                            </li>              
                            <li>
                                <a href="#myModal" data-toggle="modal">
                                    <i class=""></i>
                                    <span>Sair</span>
                                </a>       
                            </li>
                        </ul>
                    </div>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <div class="form-w3layouts">
                        <?php 
                            if(isset($_GET['login'])){
                                if($_GET['login'] == 'ok'){
                                    echo '<div class="alert alert-success" role="alert">
                                            <strong>Login efetuado com sucesso!</strong>
                                          </div>';
                                }
                            }
                            if(isset($_GET['enviar_procedimentos'])){
                                if($_GET['enviar_procedimento'] == 'erro'){
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Erro ao enviar o(s) procedimento(s) selcecionados!</strong>
                                          </div>';
                                }
                            }
			            ?>
                        <!-- page start-->
                        <div class="row">
                            <div class="col-sm-12">
                                <form method="POST" action="checar.php">
                                    <section class="panel">
                                        <div class="panel-heading">
                                            <span class="panel-title">Procedimentos</span>
                                        </div>
                                        <?php 
                                            include('../banco.php');
                                            
                                            $sql = "select * from procedimento";

                                            $consulta = $conexao->query($sql);

                                            if($consulta->num_rows > 0){
                                                $cont = 1;
                                                while($linha = $consulta->fetch_array(MYSQLI_ASSOC)){
                                                    echo '<header class="panel-heading">
                                                            <input type="checkbox" name="proce0'.$cont.'" id="proce0'.$cont.'" value="'.$linha['nome'].'">
                                                            &nbsp;
                                                            <label for="proce0'.$cont.'">'.$linha['nome'].'</label>
                                                          </header>
                                                          <div class="panel-body">
                                                            <ul class="list-group w3-agile">
                                                                <li class="list-group-item"><strong>Funcionalidades:</strong></li>
                                                                <ul class="list-group-item">
                                                                    <li class="list-group-item" style="text-align: justify;">'.$linha['funcionalidades'].'</li>
                                                                </ul>
                                                                <li class="list-group-item"><strong>Vantagens:</strong></li>
                                                                <ul class="list-group-item">
                                                                    <li class="list-group-item" style="text-align: justify;">'.$linha['vantagens'].'</li>
                                                                </ul>
                                                                <li class="list-group-item"><strong>Preço:</strong> R$ '.$linha['preco'].'</li>
                                                            </ul>
                                                          </div>';
                                                          $cont += 1;
                                                }
                                            }else{
                                                echo '<div class="alert alert-danger" role="alert">
                                                        <strong>Nenhum procedimento foi encontrado!</strong>
                                                      </div>';
                                            }
                                        ?>
                                        
                                        <div class="col-md-12 form-group">
                                            <button type="submit" class="btn btn-info" style="display: block; margin: 19px auto 0 auto;">Solicitar Procedimentos</button>
                                        </div>
                                    </section>
                                </form>
                            </div>
                        </div>
                        <!-- page end-->
                    </div>
                </section>
                <!-- footer -->
                    <div class="footer">
                        <div class="wthree-copyright">
                        <p>© <span id="ano"></span> Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
                        </div>
                    </div>
                <!-- / footer -->
            </section>
            <!--main content end-->
        </section>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Ponto de Venda</h4>
                    </div>
                    <div class="modal-body">
                        Deseja sair do sistema?
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-danger" href="../sair.php">Sair</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/script02.js"></script>
        <script src="../js/jquery.slimscroll.js"></script>
        <script src="../js/jquery.nicescroll.js"></script>
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
        <script src="../js/jquery.scrollTo.js"></script>
    </body>
</html>
