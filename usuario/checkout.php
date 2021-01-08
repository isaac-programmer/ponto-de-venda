<?php
	session_start();
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
                    <div class="table-agile-info">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="panel-title">Checkout</span>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped b-t b-light">
                                    <thead>
                                        <tr>
                                            <th>Procedimento</th>
                                            <th>Solicitante</th>
                                            <th>E-mail</th>
                                            <th>Telefone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include('../banco.php');

                                            $total_procedimentos = $_SESSION['qtd_procedimentos'];

                                            for($i=0; $i < $total_procedimentos; $i++) { 
                                                echo '<tr>
                                                        <td>'.$_SESSION['procedimentos'][$i].'</td>
                                                        <td>'.$_SESSION['nome'].'</td>
                                                        <td>'.$_SESSION['email'].'</td>
                                                        <td>'.$_SESSION['telefone'].'</td>
                                                        </tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <div class="col-md-6 form-group">
                                    <a href="procedimentos.php" rel="prev" target="_self"><input type="button" class = "btn btn-info" style="display: block; margin: 19px auto 0 0;" value="Voltar"></a>
                                </div>
                                <div class="col-md-6 form-group">
                                    <a href="solicitar.php" rel="prev" target="_self"><input type="button" class = "btn btn-info" style="display: block; margin: 19px 0 0 auto;" value="Confirmar Solicitação"></a>
                                </div>
                            </div>
                        </div>
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
