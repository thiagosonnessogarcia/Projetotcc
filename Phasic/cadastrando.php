<html>

	<head>
		<title>Cadastrando Usuário</title>
	</head>
<body>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cad_user";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error()); 
mysql_select_db($banco) or die (mysql_error());
?>


<?php

	$nick=addslashes($_POST['nick']);
	$nome= addslashes($_POST['nome']);
	$sobrenome= addslashes($_POST['sobrenome']);
	$email= addslashes(md5($_POST['email']));
	$senha= addslashes(sha1($_POST['senha']));
	$confirmarsenha= addslashes(sha1($_POST['confirmarsenha']));
	$cpf= addslashes(sha1($_POST['cpf']));
	$rg= addslashes($_POST['rg']);
	$sexo= addslashes($_POST['sexo']);
	$datadenascimento= addslashes($_POST['datadenascimento']);
	$ip=$_SERVER['REMOTE_ADDR'];
	$data= date(d-m-Y);
		
	$sql = mysql_query("INSERT INTO usuario(nick, nome, sobrenome, email, senha, confirmarsenha, cpf, rg, sexo, datadenascimento, ip, data)
	VALUES('$nick','$nome','$sobrenome','$email', '$senha', '$confirmarsenha', '$cpf', '$rg', '$sexo', '$datadenascimento', '$ip', '$data')");
	
	echo "<center><h2>Cadastro Efetuado com Sucesso!!!</center></h2>";
	header("Location: login-home.php");
?>
	
</body>
</html>