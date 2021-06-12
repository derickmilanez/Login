<?php
$user = (isset($_COOKIE['CookieUsuario'])) ? base64_decode($_COOKIE['CookieUsuario']) : '';
$pass = (isset($_COOKIE['CookieSenha'])) ? base64_decode($_COOKIE['CookieSenha']) : '';
$lembrete = (isset($_COOKIE['CookieLembrete'])) ? base64_decode($_COOKIE['CookieLembrete']) : '';
$checked = ($lembrete == 'SIM') ? 'checked' : '';
?>
<!DOCTYPE html>
<html>
<head>
<title>Sistema de Login/Cadastro</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="style.css" rel="stylesheet">
<link rel="shortcut icon" href="user.png" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
<body>
 <div class="wrapper fadeInDown">
  <div id="formContent">
    <div class="fadeIn first">
	<h1> Log In</h1>
      <img src="user.png" id="icon" alt="User Icon" />
    </div>
    <form method="post" action="acessar.php">
      <input type="text" maxlength="16" id="login" class="fadeIn second" name="usuario" placeholder="Nome de usuário" value="<?=$user?>">
      <input type="password" maxlength="50" id="password" class="fadeIn third" name="senha" placeholder="Senha" value="<?=$pass?>"><br>
      <input type="checkbox" value="SIM" <?=$checked?> class="fadeIn fourth" id="defaultCheck1" name="lembrete">
      <label for="defaultCheck1" class="fadeIn fourth">
      Lembrar minha senha
      </label><br>
      <input type="submit" class="fadeIn fourth" value="Entrar" name="Login">
    </form>
    <div id="formFooter">
      <a class="underlineHover" href="cadastrar.php">Cadastre-se</a>
    </div>
  </div>
</div>
</body>
</html>