<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
<title>Login</title>

<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
<form method="post" action="login.php">
<div class="section no-pad-bot" id="index-banner">
<div class="container">
<br><br>
<h1 id="title-login" class="header center">Central de Chamados</h1>
<div class="row center">
<img id="entrar" src="images/entrar.png" alt="">
</div>
<div class="card-content valign center">

<!-- CAMPO EMAIL -->
<div class="section">
<div class="row">
<div class="input-field col offset-s4 s4">
<input id="email" name="email" type="text" class="validate" placeholder="Email">
</div>
</div>

<!-- CAMPO SENHA -->
<div class="row">
<div class="input-field col offset-s4 s4">
<input id="senha" name="senha" type="password" class="validate" placeholder="Senha">
<a href="cadastro.php" class="recover-pass">Ainda Não Tenho Acesso.</a><br><br>
<a href="esqueci.html" class="recover-pass">Esqueci Minha Senha.</a>
</div>
</div>
</div>
</form>

<!-- BOTOES -->
<div class="row center">
<button type="submit" name="loginbtn" class="btn-large waves-effect waves-light">Login</button>
</div>
<br><br>
</div>
</div>


<!--  SCRIPTS-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>

<!-- FUNÇÕES PHP -->
<?php
if(isset($_POST["loginbtn"])) login();
?>


<!-- FUNÇÕES PHP -->
<?php
function login(){
    $con = new mysqli("localhost","root","","sitefw");
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $sql = "select * from cadastro where email='$email' and senha='$senha'";
    $reg = mysqli_query($con, $sql);
    if($col = mysqli_fetch_array($reg)){
        session_start();
        $_SESSION["nome"] = $col["nome"];	
        header("location: https://localhost/site/lista.php");
    } else {
        echo "<b><p align='center'> <font color=red  size='6pt'>Email ou Senha Incorretos</font> </p></b>";
    }
    $con->close();
}
?>