<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cad_artista";
$conexao = mysqli_connect($host, $user, $pass) or die(mysql_error()); 
mysqli_select_db( $conexao,'cad_artista') or die (mysql_error());

  session_start();

  if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
    header("Location: index.php");
    exit;
  }

// declaração de variáveis 
        $nick = isset( $_GET['nick'] ) ? $_GET['nick'] : null;
        $email = isset( $_GET['email'] ) ? md5($_GET['email']) : null;
        $senha = isset( $_GET['senha'] ) ? sha1($_GET['senha']) : null;
        $confirmarsenha = isset( $_GET['confirmarsenha'] ) ? sha1($_GET['confirmarsenha']) : null;

if( $senha == $confirmarsenha){
 
$up = mysqli_query($conexao,"UPDATE artista SET nick='$nick', email='$email', senha='$senha', confirmarsenha='$confirmarsenha' WHERE id='$_SESSION[id]'");

}else{
print'
<script type="text/javascript">
    alert("Repita a senha corretamente!");
</script>';
}

	header("Location: profile.php")

?>