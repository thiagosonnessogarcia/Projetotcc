<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Selecionar tipo de Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css" rel="stylesheet">
    
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>

    <style type="text/css">
        html { width: 100%; height:100%; overflow:hidden; }


.login { 
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -150px 0 0 -150px;
    width:300px;
    height:300px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
    width: 100%; 
    margin-bottom: 10px; 
    background: rgba(0,0,0,0.3);
    border: none;
    outline: none;
    padding: 10px;
    font-size: 13px;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    border: 3px solid rgba(0,0,0,0.3);
    border-radius: 10px;
    box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
    -webkit-transition: box-shadow .5s ease;
    -moz-transition: box-shadow .5s ease;
    -o-transition: box-shadow .5s ease;
    -ms-transition: box-shadow .5s ease;
    transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }
    </style>
</head>

<body background="img\planofundo.jpg">
<body>
    <div class="container">
        <div class="row">
            <a href="index.php" style="color: white; font-size: 30px"><img src="logo.png" class="logo-phasic-img" />  </a>
            <br><br><br>
            <div class="col-sm-1 col-md-1 col-lg-12 mt-1">
            <font color="white"><center><h1> SELECIONAR SEU TIPO DE LOGIN NO PHASIC </h1></center></font>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-5 col-lg-6 mt-5">
                    <body background="C:\xampp\htdocs\Phasic\img\planofundo.jpg" bgproperties="fixed">
                <div class="login">
                    <h1>Login Usuário</h1>
                    <form method="post" action="userauthentication.php">
                        <input type="email" name="email" placeholder="E-mail" required="required" />
                        <input type="password" name="senha" placeholder="Senha" required="required" />
                        <button type="submit" class="btn btn-primary btn-small" style="border-radius: 10px">Login</button>
                        <button type="reset" class="btn btn-primary btn-small" style="border-radius: 10px">Limpar</button>
                        <a href="" style="color: white; font-size: 16px">Esqueceu sua senha? </a>
                    </p>
                    </form>
                    <br>
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- login bootsnipp -->
                </div>
                </div>
                <div class="col-sm-5 col-md-5 col-lg-6 mt-5">
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="login">
                    <h1>Login Artista</h1>
                    <form method="post" action="userauthenticationart.php">
                        <input type="email" name="email" placeholder="E-mail" required="required" />
                        <input type="password" name="senha" placeholder="Senha" required="required" />
                        <button type="submit" class="btn btn-primary btn-large" style="border-radius: 10px">Login</button>
                        <button type="reset" class="btn btn-primary btn-small" style="border-radius: 10px">Limpar</button>
                        <a href="" style="color: white; font-size: 16px">Esqueceu sua senha? </a>
                    </form>
                    <br>
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- login bootsnipp -->
                </div>
                </div>  
            </div>
    </div>
</body>
</html>
