<?php
$host = "localhost";
$user = "root";
$pass = "";
$conexao = mysqli_connect($host, $user, $pass) or die(mysql_error()); 
mysqli_select_db( $conexao,'cad_artista') or die (mysql_error());

  
session_start();


$sql = mysqli_query($conexao,"SELECT * FROM artista WHERE id='$_SESSION[id]'") or die (mysql_error());
$res = mysqli_fetch_array($sql);
$row = mysqli_num_rows($sql);
if($row > 0){
    $_SESSION['Nomedasuastreaming']=$res['Nomedasuastreaming'];
    $_SESSION['Selecionargenero']=$res['Selecionargenero'];
    $_SESSION['id'] = $res['id'];
    $_SESSION['Embedyoutubeaovivo'] = $res['Embedyoutubeaovivo'];
    $_SESSION['Htmlbotaodoacaopagseguro'] = $res['Htmlbotaodoacaopagseguro'];
    $_SESSION['Descricaostream'] = $res['Descricaostream'];       
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Phasic Music </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	
	<script type="text/javascript">
 
    </script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <!-- <a href="index.html" class="site_title"> -->
              <img src="logo.png" class="logo-phasic-img" />              
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="background-profile">
              <div class="profile clearfix">
                <div class="profile_pic">
                  <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                </div>
                 <div class="profile_info">
                  <span class="content-welcome">Bem Vindo, </span>
                  <h2><?php echo $_SESSION['nick']?></h2>
                </div>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Inicio</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="posartindex.php">Como usar</a></li> 
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Editar Perfil <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="profile.php">Perfil</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Sua Streaming<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                  
                      <li><a href="form_upload.php">Configurar Vídeo ao vivo</a></li>
                    </ul>
                  </li>
               </ul>
              </div>
              <div class="menu_section">
                <h3>Streaming On-line</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-desktop"></i> Streamings ao vivo <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                 
                      <li><a href="media_gallery.php">Gêneros</a></li>                      
                    </ul>
                  </li>
                    </ul>
                  </li>                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php $_SESSION['nick'] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Inicio </a></li>
                    
                    <li><a href="logoutart.php"><i class="fa fa-sign-out pull-right"></i> Sair </a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
      <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Configurações Streaming </h3>
              </div>       
            </div>
            
                                <!-- /Img+Chat -->

            <div class="x_panel">
            <div class="row col-md-12"> 
            <div class="col-md-6"style="margin-left: 360px;"><?php echo $_SESSION['Embedyoutubeaovivo']?>           
            </div>
            
            </div>
            </div>
                    <!-- /Formulario -->
            <div class="x_panel">
            	
                    <form name ="signup" method="post" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" action="information.php">
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Nomedasuastreaming">Nome da sua Streaming<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Nomedasuastreaming" name="Nomedasuastreaming" required placeholder="Digite aqui um Nome para a sua Streaming" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label type="text" class="control-label col-md-3 col-sm-3 col-xs-12" for="Selecionargenero">Selecionar Genero</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="Selecionargenero" name="Selecionargenero" for="Selecionargenero" class="select2_single form-control" tabindex="-1">                 
                            <option value="Rock">Rock</option>
                            <option value="Pop">Pop</option>
                            <option value="Eletronica">Eletronica</option>
                            <option value="Sertanejo">Sertanejo</option>
                            <option value="Samba">Samba</option>
                            <option value="Reggae">Reggae</option>
                            <option value="Funk">Funk</option>
                            <option value="Indie">Indie</option>
                            <option value="Tango">Tango</option>
                            <option value="Punk Rock">Punk Rock</option>
                            <option value="Hard Rock">Hard Rock</option>
                            <option value="Grunge">Grunge</option>
                            <option value="Country">Country</option>
                            <option value="Axé">Axé</option>
                            <option value="Hip Hop/Rap">Hip Hop/Rap</option>
                            <option value="Alternativo">Alternativo</option>
                            <option value="Jazz">Jazz</option>
                            <option value="MPB">MPB</option>
                            <option value="Salsa">Salsa</option>
                            <option value="Bossa Nova">Bossa Nova</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Embedyoutubeaovivo">Embed Youtube ao vivo<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Embedyoutubeaovivo" name="Embedyoutubeaovivo" required placeholder="Digite aqui a conexão com o Youtube ao Vivo" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Htmlbotaodoacaopagseguro">Html Botão Doação PagSeguro<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Htmlbotaodoacaopagseguro" name="Htmlbotaodoacaopagseguro" required placeholder="Botão para a Doação do Pagseguro" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Descrição Stream</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                       <textarea id="Descricaostream" required placeholder="Descição do seu Streaming" class="form-control" name="Descricaostream" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">                        
                          <button type="submit" class="btn btn-success">Iniciar</button> 
                        </div>
                      </div>
                    </form>
						<form action="teste.php">
							<button id class="btn btn-danger" type="submit" style="
    margin-left: 450px;
    margin-top: -57px;">Parar</button>
						</form>
                  </div> 
                       </div>
                                         </div>
             		
                    </div>
                  
        <!-- /page content -->

        <!-- footer content -->
        <footer>
         
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  
  </body>
</html>
