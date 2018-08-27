<?php 
  include("auth.php");
  require('config/config.php');
  $chat = new Chat();
?>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$conexao = mysqli_connect($host, $user, $pass) or die(mysql_error()); 
mysqli_select_db( $conexao,'cad_artista') or die (mysql_error());

$query = sprintf("SELECT * FROM artista where status=1");

$dados = mysqli_query($conexao,$query) or die(mysql_error());

$linha = mysqli_fetch_assoc($dados);

$total = mysqli_num_rows($dados);
  
session_start();

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
      function enviaPagseguro(){
      $.post('pagseguro.php','',function(data){
      $('#code').val(data);
      $('#comprar').submit();
      })
      }
	  
      function loadlink(){
    $('#atualizadiv').load('media_gallery.php',function () {
         $(this).unwrap();
    });
}

loadlink(); // This will run on page load
setInterval(function(){
    loadlink() // this will run after every 5 seconds
}, 5000);
	  
	  
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
                    <img src="images/img.jpg" alt=""><?php echo $_SESSION['nick'] ?>
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
                <h3> Streamings ao vivo</h3>
              </div>

          
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel" id="atualizadiv">              
                  <div class="x_content">
                    <div class="row">
                      <!-- Começa aqui -->
					  <?php
						// se o número de resultados for maior que zero, mostra os dados
					
						if($linha['status'] = 1) {
							do {
					?>
                      <div class="col-md-55">
                        <div class="thumbnail">
							<div class="image view view-first">
							              <img src="logo.png" class="logo-phasic-img" />              
                            <div class="mask">                              
                            </div>
                          </div>
                          <div class="caption">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg_<?=$linha['id']?>" style="float: right;margin-top: -25%;position: absolute;margin-left: 30%;">Assistir</button>
                  <div class="modal fade bs-example-modal-lg_<?=$linha['id']?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="width: 80%;margin-left: 8%;">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel"><?=$linha['Nomedasuastreaming']?></h4>													   
						</div>
							<div class="col-md-55" style="margin-left: 69px;">
							<?=$linha['Embedyoutubeaovivo']?>
								</div>
                          <div class="x_panel">
                            <p><strong><?=$linha['Descricaostream']?></strong></p>
							 <p><?=$linha['Htmlbotaodoacaopagseguro']?></p>	
                          </div>
						  

              <h1>Bem Vindo, <?php echo $_COOKIE['nome']?> ao nosso Chat</h1>

              <div id="painel" style="background: gray">
              <?php 
                foreach($chat->listar() as $v){
                  $_COOKIE['nome'];
              }
              ?>
              </div>

              <form action="" method="post" id="frm-msg">
                  <fieldset>
                <div class="panel-footer">
                    <div class="input-group">
                        <input name="mensagem" id="mensagem" type="text" maxlength="100" cols='1' rows='6' class="form-control input-sm" placeholder="Digite sua mensagem..." />
                        <span class="input-group-btn">
                            <input type="button" id="submit" value="Enviar" class="btn btn-warning btn-sm" id="btn-chat">Enviar</input>         
                        </span>
                    </div>
                  </div>
                </fieldset>
              </form>



                        <div class="modal-footer">
						
						<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/120x53-pagar-roxo.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" onclick="enviaPagseguro()" style="margin-left: 6px;">
						  </input>
						 	
                          <form id="comprar" action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
                          <input type="hidden" name="code" id="code" value="" />
                          </form> 
											  
                        </div>                                                              
                    </div>                    
                  </div>  
                 </div>

                            <p><strong><?=$linha['Nomedasuastreaming']?> - <?=$linha['nick']?></strong> 
                            </p>
                            <p><?=$linha['Selecionargenero']?></p>
                             </div>
                        </div>
                      </div>
	<?php
		}while($linha = mysqli_fetch_assoc($dados));
	}else{
		
?>				
	<?php
	}
?>					  
                      <!-- Termina aqui -->
                    </div>
                  </div>
                </div>
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
    <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script> 

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script type="text/javascript"  src="js/chat.js"></script>
  
  </body>
</html>
<?php
// tira o resultado da busca da memória
mysqli_free_result($dados);
?>