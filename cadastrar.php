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
	<h1> Cadastre-se</h1>
      <img src="user.png" id="icon" alt="User Icon" />
    </div>
    <form method="post" action="registrar.php">
      <input type="text" maxlength="16" id="login" class="fadeIn second" name="usuario" placeholder="Digite seu nome de usuário">
      <input type="password" maxlength="50" id="password" class="fadeIn third" name="senha" placeholder="Digite sua senha">
      <input type="submit" class="fadeIn fourth" value="Cadastrar" name="singup">
    </form>
    <div id="formFooter">
      <a class="underlineHover" href="index.php">Fazer Log In</a>
    </div>
  </div>
</div>
</body>
</html>