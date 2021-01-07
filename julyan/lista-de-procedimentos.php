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
                    <div class="table-agile-info">
                        <?php
                            if(isset($_GET['delete'])){
                                if($_GET['delete'] == 'ok'){
                                    echo '<div class="alert alert-success" role="alert">
                                            <strong>Dados excluídos com sucesso!</strong>
                                          </div>';
                                }

                                if ($_GET['delete'] == 'erro') {
                                    echo '<div class="alert alert-danger" role="alert">
								            <strong>Erro ao excluir os dados!</strong>
							              </div>';
                                }
                            } 
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
                        <form method="POST" action="lista-de-procedimentos.php">
                            <div class="panel panel-default">
                                <div class="input-group m-bot15">
                                    <input type="text" class="form-control" name="texto">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                                <div class="panel-heading">
                                    <span class="panel-title">Lista de Procedimentos</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped b-t b-light">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Funcionalidades</th>
                                                <th>Vantagens</th>
                                                <th>Preço</th>
                                                <th>Opções</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                include('../banco.php');
                                                
                                                if(isset($_POST['texto'])){
                                                    $texto = $_POST['texto'];
                                                    $sql = "select * from procedimento where nome like '%$texto%'";
                                                    $consulta = $conexao->query($sql);

                                                    if($consulta->num_rows > 0){
                                                        while($linha = $consulta->fetch_array(MYSQLI_ASSOC)){
                                                            echo '<tr>
                                                                    <td>'.$linha['nome'].'</td>
                                                                    <td>'.$linha['funcionalidades'].'</td>
                                                                    <td>'.$linha['vantagens'].'</td>
                                                                    <td>'.$linha['preco'].'</td>
                                                                    <td>
                                                                        <a href="alterar-cadastro-de-procedimento.php?id='.$linha['id_procedimento'].'" title="Alterar Procedimento"><i class="fa fa-pencil-square-o text"></i></a>
                                                                        <a href="deletar.php?id='.$linha['id_procedimento'].'" title="Excluir Procedimento"><i class="fa fa-trash-o text-danger text"></i></a>
                                                                    </td>
                                                                  </tr>';
                                                        }
                                                    }else{
                                                        echo '<div class="alert alert-danger" role="alert">
                                                                <strong>Nenhum procedimento foi encontrado!</strong>
                                                              </div>';
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                    <div class="col-md-6 form-group">
                                        <a href="solicitacoes.php" rel="prev" target="_self"><input type="button" class = "btn btn-info" style="display: block; margin: 19px 0 0 0;" value="Voltar"></a>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <a href="cadastro-de-procedimentos.php" rel="prev" target="_self"><input type="button" class = "btn btn-info" style="display: block; margin: 19px 0 0 auto;" value="Cadastrar Procedimento"></a>
                                    </div>
                                </div>
                            </div>
                        </form>
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
