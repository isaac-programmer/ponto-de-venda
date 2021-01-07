<?php
    $id = $_GET['id'];

    include('../banco.php');

    $sql = "select * from procedimento where id_procedimento = $id";

    $consulta = $conexao->query($sql);

    if($consulta->num_rows > 0){
        $linha = $consulta->fetch_array(MYSQLI_ASSOC);
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
                    <a href="solicitacoes.php" class="logo">Ponto de Venda</a>
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
                                <a href="solicitacoes.php">
                                    <i class=""></i>
                                    <span>Solicitações</span>
                                </a>
                            </li>
                            <li>
                                <a href="lista-de-procedimentos.php">
                                    <i class=""></i>
                                    <span>Lista de Procedimentos</span>
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
                            if(isset($_GET['alterou'])){
                                if($_GET['alterou'] == 'ok'){
                                    echo '<div class="alert alert-success" role="alert">
								            <strong>Atualização dos dados realizada com sucesso!</strong>
							              </div>';
                                }

                                if($_GET['alterou'] == 'erro'){
                                    echo '<div class="alert alert-danger" role="alert">
								            <strong>Erro ao atualizar os dados!</strong>
							              </div>';
                                }
                            }
                        ?>
                        <!-- page start-->
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="atualizar.php">
                                    <div data-collapsed="0" class="panel">
                                        <div class="panel-heading">
                                            <span class="panel-title">Alteração de Procedimento</span>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <input type="hidden" value="<?php echo $linha['id_procedimento']; ?>" name="id_proced" placeholder=".col-md-12" class="form-control" required="" readonly>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="">Nome do Procedimento:</label>
                                                    <input type="text" value="<?php echo $linha['nome']; ?>" name="procedimento" placeholder=".col-md-12" class="form-control" required="">
                                                </div>
                    
                                                <div class="col-md-6 form-group">
                                                    <label for="">Funcionalidades:</label>
                                                    <textarea name="funcionalidades" class="form-control" cols="57" rows="1" style="resize: none;" required=""><?php echo $linha['funcionalidades']; ?></textarea>
                                                </div>            
                    
                                                <div class="col-md-6 form-group">
                                                    <label for="">Vantagens:</label>
                                                    <textarea name="vantagens" class="form-control" cols="57" rows="1" style="resize: none;" required=""><?php echo $linha['vantagens']; ?></textarea>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="">Preço:</label>
                                                    <input type="number" value="<?php echo $linha['preco']; ?>" name="preco" placeholder=".col-md-3" class="form-control" required="">
                                                </div>
                                                <div class="col-md-12 form-group"><label for=""></label></div>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <a href="lista-de-procedimentos.php" rel="prev" target="_self"><input type="button" value="Voltar" class = "btn btn-info" style="display: block; margin: 19px auto 0 0;"></a>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <button type="submit" class = "btn btn-info" style="display: block; margin: 19px 0 0 auto;">Atualizar</button>
                                            </div>
                                        </div>
                                    </div>
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
