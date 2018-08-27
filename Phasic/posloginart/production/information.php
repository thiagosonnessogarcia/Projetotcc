<html>

	<head>
		<title>Enviando dados de Streaming</title>
	</head>
<body>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$conexao = mysqli_connect($host, $user, $pass) or die(mysql_error()); 
mysqli_select_db($conexao,'cad_artista') or die (mysql_error());
?>


<?php

	session_start();

	$Nomedasuastreaming= addslashes($_POST['Nomedasuastreaming']);
	$Selecionargenero= addslashes($_POST['Selecionargenero']);
	$Embedyoutubeaovivo=addslashes($_POST['Embedyoutubeaovivo']);
	$Htmlbotaodoacaopagseguro= addslashes($_POST['Htmlbotaodoacaopagseguro']);
	$Descricaostream= addslashes($_POST['Descricaostream']);

	$sql = mysqli_query($conexao," UPDATE artista SET Nomedasuastreaming='$Nomedasuastreaming', Selecionargenero='$Selecionargenero', Embedyoutubeaovivo='$Embedyoutubeaovivo', Htmlbotaodoacaopagseguro='$Htmlbotaodoacaopagseguro',
	Descricaostream='$Descricaostream', status=1 WHERE id='$_SESSION[id]'");


	echo "<centr><h3> Parabêns sua Streaming começará em Instantes !!!<p>
		Você será redirecionado automaticamente para outra página
	</h3></center>";
	
	header("Location: form_upload.php")
?>
	</body>
	</html>