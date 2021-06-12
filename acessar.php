<html>
<head>
<title>Sistema de Login/Cadastro</title>
<link rel="shortcut icon" href="user.png" />
</head>
<body>
<?php
$user = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$pass = (isset($_POST['senha'])) ? $_POST['senha'] : '';
$lembrete = (isset($_POST['lembrete'])) ? $_POST['lembrete'] : '';
$hostname = "localhost";
$username = "root";
$password = "";
$database = "login";
$conn = mysqli_connect($hostname,$username,$password,$database) or die('Não foi possível se conectar');
$usuario  = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);
$query = "select * from usuarios where usuario='$usuario' and senha='$senha'";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);
if($row==1){
	session_start();
	$_SESSION["nome"] = $usuario;
	if($lembrete == 'SIM'){
	$expira = time() + 60*60*24*30; 
	setCookie('CookieLembrete', base64_encode('SIM'), $expira);
	setCookie('CookieEmail', base64_encode($email), $expira);
	setCookie('CookieSenha', base64_encode($senha), $expira);
	}
else{

	setCookie('CookieLembrete');
	setCookie('CookieEmail');
	setCookie('CookieSenha');
}
	header("location:restrita.php");
	exit();
}else{
echo "<script>alert('Usuário ou senha inválidos.')</script>";
echo "<script>window.location = 'index.php'</script>";
}
?>
</body>
</html>