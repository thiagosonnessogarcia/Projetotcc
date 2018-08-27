<?php

$nome      = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email     = $_POST["email"];
$senha = $_POST["senha"];
$confirmarsenha = $_POST["confirmarsenha"]; 
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$sexo = $_POST["sexo"];


// conectando ao banco 


$host = "localhost";
$user = "root";
$pass = "";
$banco = "cad_user";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error()); 
mysql_select_db($banco) or die (mysql_error());
?>
<?php
  session_start();
  if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
    header("Location: index.php");
    exit;
  } else

header("Location: poslogin/production/posindex.php");
?>