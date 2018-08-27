<?php 
	include("auth.php");
	require('config/config.php');
	$chat = new Chat();
?>

<!DOCTYPE HTML">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Chat</title>
<link rel="stylesheet" type="text/css" href="css/style.css" style="background: black" />
<script type="text/javascript"	src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script type="text/javascript"	src="js/chat.js"></script>
</head>

<body>
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
		<label> 
			<span>Mensagem</span> 
			<textarea name="mensagem" id="mensagem" maxlength="100" cols="1" rows="6" style="background: gray"></textarea>
		</label> 
		<input type="button" id="submit" value="Enviar" style="background: purple;" />
	</fieldset>
</form>
</body>
</html>
