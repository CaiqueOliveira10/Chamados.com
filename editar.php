
<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
<title>Chamado</title>

<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
<script src="script.js"></script> 
</head>

<body>

<!-- MENU -->
<body class="grey lighten-4">
<nav id="menu">
<div class="container">
<div class="nav-wrapper">
<a href="index.html" class="brand-logo">Chamados.com</a>
<a href="#" data-activates="side-nav" class="button-collapse show-on-large right">
<i class="material-icons">power_settings_new</i>
</a>
<ul class="right hide-on-med-and-down">
<li>
<a href="chamado.php">Cadastro</a>
</li>
<li>
<a href="lista.php">Chamados</a>
</li>
</ul>


</div>
</div>
</nav>

<form method="post" action="editar.php">
<section class="section section-details grey lighten-4">
<div class="container">
<div class="row">
<div class="col s12">
<div class="card">
<div class="card-content">
<div class="row">
<div class="col s12 m6">
<span class="card-title"><b>Chamado</b></span>
</div>
</div>

<!-- CAMPO TITULO -->
<div class="section">
<div class="row">
<div class="input-field col s4">
<i class="material-icons prefix">local_offer</i>
<input id="titulo" name="titulo" type="text" class="validate" placeholder="Titulo">
</div>
</div>

<!-- CAMPO DESCRIÇÃO -->
<div class="section">
<div class="row">
<div class="input-field col s4">
<i class="material-icons prefix">mode_edit</i>
<textarea id="descricao" name="descricao" class="materialize-textarea" placeholder="Descrição"></textarea>
</div>

<!-- OPTION PRIORIDADE -->
</div>
<div class="section">
<div class="row">
<div class="input-field col s4">
<select id="prioridade" name="prioridade" class="browser-default">
<option value="" disabled selected>Prioridade</option>
<option value="Baixa">Baixa</option>
<option value="Normal">Normal</option>
<option value="Alta">Alta</option>
<option value="Emergencia">Emergencia</option>
</select>
</div>

<!-- OPTION STATUS -->
</div>
<div class="section">
<div class="row">
<div class="input-field col s4">
<select id="status" name="status" class="browser-default">
<option value="" disabled selected>Status</option>
<option value="Aberto">Aberto</option>
<option value="Cancelado">Cancelado</option>
<option value="Fechado">Fechado</option>
</select>
</div>

<!-- CHECKBOX -->
</div>
<b>TIPO:</b>
<p><br>
<label>
<input type="checkbox" id="ck1" name="tipo" class="filled-in" value="Hardware" />
<span>Hardware</span>
</label>
</p>
<p>                        

<label>
<input type="checkbox" id="ck2" name="tipo" class="filled-in" value="Software" />
<span>Software</span>
</label>
</p>
<p>


<label>
<input type="checkbox" id="ck3" name="tipo" class="filled-in" value="Rede"/>
<span>Rede</span>
</label>
</p>
<p>

  
<label>
<input type="checkbox" id="ck4" name="tipo" class="filled-in" value="Acessos"/>
<span>Acessos</span>
</label>
</p>
</div>
</form>
<?php	
	if(isset($_POST["btnalterar"])) alterar();	
?>


<!-- BOTOES -->
<div class="card-action">
<button  type="submit" name="btnalterar" class="btn-large waves-effect waves-light">Alterar</button>
<a href="lista.php" id="btnvoltar" class="btn-large waves-effect waves-light">Voltar</a>
</div>
</div>
</section>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

<script>
$('#textarea1').val('');
M.textareaAutoResize($('#txtarea'));
</script>
</body>
</html>


<!-- FUNÇÕES PHP -->
<!-- INSERIR -->
<?php
function alterar(){
	$titulo 	= $_POST["titulo"];
	$descricao 	= $_POST["descricao"];
	$prioridade = $_POST["prioridade"];	
	$status = $_POST["status"];
	$tipo 	= $_POST["tipo"];
	$con = new mysqli("localhost", "root", "", "sitefw");
	$sql 	= "update chamados set descricao='$descricao',prioridade='$prioridade',status='$status',tipo='$tipo' where titulo='$titulo'";
	if(mysqli_query($con, $sql)){
		echo "<b><h4 align='center'> <font color=green  size='6pt'>Chamado Gravado Com Sucesso</font> </h4></b>";	
	} else {
		echo "<h4>Ocorreu um erro verifique !!!</h4>";
	}
	mysqli_close($con);
}
?>