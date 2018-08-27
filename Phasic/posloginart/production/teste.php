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


$sql = mysqli_query($conexao," UPDATE artista SET Nomedasuastreaming='', Selecionargenero='', Embedyoutubeaovivo='', Htmlbotaodoacaopagseguro='',
	Descricaostream='', status=0 WHERE id='$_SESSION[id]'");
		
	header("Location: form_upload.php")
?>
	</body>
	</html>