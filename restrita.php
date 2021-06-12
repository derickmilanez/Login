<!DOCTYPE html>
<html>
<head>
<title>Sistema de Login/Cadastro</title>
<link href="rainbow.css" rel="stylesheet">
<link rel="shortcut icon" href="user.png" />
</head>
<body style="
  background-image: url('defaultdance.gif');">
<?php
session_start();
if(!isset($_SESSION["nome"])){
echo "<script>window.location = 'expirada.php'</script>";
}
?>
<embed id="music" name="defaultdance" src="defaultdance.mp3" hidden="true" autostart="true">
<h1 class="rainbow">Olá <?php echo $_SESSION["nome"]; ?>,
você está logado!</h1><br>
<center>
<a class="rainbow" href="logout.php">Clique aqui para sair!</a>
</center>
</body>
</html>