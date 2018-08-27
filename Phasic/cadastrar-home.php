<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Phasic.com</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <script type="text/javascript">
    function validarSenha (input){ 
    if (input.value != document.getElementById('Senha').value) {
    input.setCustomValidity('Repita a senha corretamente!');
     } else {
    input.setCustomValidity('');
    }
    }     
    </script>
  </head>

  <body id="page-top">
    <form name="signup" method="post" action="cadastrando.php">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="logo.png" class="logo-phasic-img"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login-home.php" id="btn-login-home">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" id="btn-registrar-home">Registrar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="content-form-cadastrar">
                <span style="border-bottom: 2px solid purple; color: purple; margin: -21% 0%; padding: 10px; font-size: 20px; float: left; width: 100%;"> CADASTRAR NO PHASIC </span>
                <br>
                <div class="">
                <label>Nick:</label>
                <input id="nick" name="nick" type="text" required placeholder="Digite seu Nick" title="Digite seu Nick">
                <br><br>
                <label>Nome:</label>
                <input id="nome" name="nome" type="text" required placeholder="Digite seu Nome" title="Digite seu Nome">
                <br><br>
                <label>Sobrenome:</label>
                <input id="sobrenome" name="sobrenome" type="text" required placeholder="DIgite seu Sobrenome" title="Digite seu Sobrenome">
                <br><br>
                <label for="txtEmail">E-mail</label>
                <input id="txtEmail" name="email" type="email" required placeholder="Digite seu E-mail" title="E-mail">
                <br><br>
                <form id="formSenha" name="formSenha" action="" method="POST">
                <label for="Senha">Senha</label>
                <input id="Senha" name="senha" type="password" required placeholder="Digite uma Senha" title="Digite sua Senha">
                <br><br>
                <label for="confirmarsenha">Confirmar Senha</label>
                <input id="confirmarsenha" name="confirmarsenha" type="password" required placeholder="Confirmar Senha" title="Confirmar Senha" oninput="validarSenha(this)"/>    
                </form>
                <br><br>
                <label>CPF:</label>
                <input id="cpf" name="cpf" type="text" required placeholder="Digite seu CPF" title="Digite seu CPF">
                <br><br>
                <label>RG:</label>
                <input id="rg" name="rg" type="text" required placeholder="Digite seu RG" title=" Digite seu RG">
                <br><br>
                <label>Sexo:</label>
                <input id="sexo" name="sexo" type="text" required placeholder="Digite seu Sexo" title="Sexo">                
                <br><br>
                <label>Data de Nascimento:</label>
                <input id="datadenascimento" name="datadenascimento" type="date" required placeholder="Data de Nascimento" title="Data de Nascimento">
                <br><br>
                <input type="submit" id="btn-entrar-login" value="Cadastrar" style="background-color: purple; border: none; color: #FFF; border-radius: 3px; padding: 10px; cursor: pointer; margin-left: 10% !important" />
                 <input type="reset" id="btn-limpar-campos" value="Limpar" style="background-color: #DDD; border: none; color: #333; border-radius: 3px; padding: 10px; cursor: pointer"/>
                <br><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header> 

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; Phasic 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>
  </form>
  </body>

</html>
