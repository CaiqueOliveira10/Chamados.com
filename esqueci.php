
<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
<title>Lista</title>

<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
<form method="post" action="esqueci.php">
<div class="section no-pad-bot" id="index-banner">
<div class="container">
<br><br>
<h1 id="title-login" class="header center">Esqueci Minha Senha</h1>
<div class="row center">
<img id="esqueci" src="images/esqueci.png" alt="">
</div>

<!-- CAMPO EMAIL -->
<div class="card-content valign center">
 <div class="section">
<div class="row">
<div class="input-field col offset-s4 s4">
<input id="email" type="email" class="validate" placeholder="Email">
</div>
</div>
</form>
<!-- BOTOES -->
<div class="row center">
<button type="submit" id="enviarmail" class="btn-large waves-effect waves-light">Enviar</button>
<a href="login.php" id="voltar" class="btn-large waves-effect waves-light">Voltar</a>

</div>
<br>
<br>

</div>
</div>


<!--  SCRIPTS-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
 <script src="js/init.js"></script>

</body>
</html>