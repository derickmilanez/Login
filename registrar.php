<html>
<head>
<title>Sistema de Login/Cadastro</title>
<link href="rainbow.css" rel="stylesheet">
<link rel="shortcut icon" href="user.png" />
</head>
<body style="background-image: url('defaultdance.gif');">
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "login";
$usuario   = $_POST["usuario"];
$senha = $_POST["senha"];
$conn = mysqli_connect($hostname,$username,$password,$database);
$consultasql = "select * from usuarios where usuario='$usuario'";
$consulta = mysqli_query($conn,$consultasql);
$linha = mysqli_num_rows($consulta);
$sql = "insert into usuarios(usuario,senha) values ('$usuario','$senha')";
if(empty($_POST["usuario"]) || empty($_POST["senha"])){
echo "<script>window.location = 'cadastrar.php'</script>";
}
else{
if($linha == 0){
mysqli_query($conn,$sql);
echo "
<h1 class='rainbow'>DADOS REGISTRADOS.</h1>
<center>
<a class='rainbow' href='index.php'>Clique aqui para ir para a tela de Log In!</a>
</center>
<embed name='defaultdance' src='defaultdance.mp3' hidden='true' autostart='true'>
";	
}
else{
echo "<script>window.location = 'error.php'</script>";
}
}
mysqli_close($conn);
?>
</body>
</html>