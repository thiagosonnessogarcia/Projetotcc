<?php
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
  }

// Executa uma consulta 
$sql = "SELECT `nome`, `sobrenome` , `email` , `senha' 'confirmarsenha' , 'cpf' , 'rg' , 'sexo' FROM `usuario`";
$query = $mysqli->query($sql);
while ($banco = $query->fetch_assoc()) {
	$nome = addslashes($banco["nome"]);
	$sobrenome = addslashes($dados["sobrenome"]);
	$email = addslashes($dados["email"]);
	$senha = addslashes($dados["senha"]);
	$confirmarsenha = addslashes($dados["confirmarsenha"]); 
	$cpf = addslashes($dados["cpf"]);
	$rg = addslashes($dados["rg"]);
	$sexo = addslashes($sexo["sexo"]);

	echo "<a href=\"editar.php?id=$id\">Editar </a>";
	
	
}


?>