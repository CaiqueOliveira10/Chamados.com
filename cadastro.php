<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
<title>Cadastro</title>

<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
<script src="script.js"></script> 
</head>

<body>
<form method="post" action="cadastro.php">
<div class="section no-pad-bot" id="index-banner">
<div class="container">
<br><br>
<h1 id="title-login" class="header center">Cadastre-se</h1>
<div class="row center">
<img id="cadastre" src="images/cadastre.png" alt="">
</div>
<div class="card-content valign center">


<!-- CAMPO NOME -->
<div class="section">
<div class="row">
<div class="input-field col offset-s4 s4">
<input id="nome" name="nome" type="text" class="validate" placeholder="Nome" required>
</div>
</div>

<!-- CAMPO EMAIL -->
<div class="section">
<div class="row">
<div class="input-field col offset-s4 s4">
<input id="email" name="email" type="text" class="validate" placeholder="Email" required>
</div>
</div>

<!-- CAMPO SENHA -->
<div class="section">
<div class="row">
<div class="input-field col offset-s4 s4">
<input id="senha" name="senha"type="password" class="validate" placeholder="Senha" required>
</div>
</div>

<!-- CAMPO VALIDAR SENHA -->
<div class="section">
<div class="row">
<div class="input-field col offset-s4 s4">
<input id="confsenha" name="confsenha"type="password" class="validate" placeholder="Confirmar Senha" required>
</div>
</div>

<!-- CAMPO TELEFONE -->
<div class="section">
<div class="row">
<div class="input-field col offset-s4 s4">
<input id="telefone" name="telefone" type="text" placeholder="Telefone" maxlength="11" required>
</div>
</div>
</div>
</form>


<!-- BOTOES -->
<div class="row center">
<button type="submit" name="inserirbtn" class="btn-large waves-effect waves-light" onclick="validcad()">Inserir</button>
<a href="login.php" id="btnvoltar" class="btn-large waves-effect waves-light">Voltar</a>
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
if(isset($_POST["inserirbtn"])) inserir();
?>
<!-- INSERIR -->
<?php
function inserir(){
	$nome 	= $_POST["nome"];
	$email	= $_POST["email"];
	$senha	= $_POST["senha"];
	$telefone	= $_POST["telefone"];
	$con	= new mysqli("localhost","root","","sitefw");
	$sql	= "insert into cadastro(nome,email,senha,telefone) values('$nome','$email','$senha','$telefone')";
	$err = mysqli_query($con, $sql);
	echo "<h3>Cadastro realizado com sucesso !";
	$con->close();
}
?>