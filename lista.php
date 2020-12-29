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

<!-- MENU -->
<body class="grey lighten-4">
<nav id="menu">
<div class="container">
<div class="nav-wrapper">
<a href="index.html" class="brand-logo">Chamados.com</a>
<a href="logout.php" data-activates="side-nav" class="button-collapse show-on-large right">
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

<!-- TITULO -->

<?php
	session_start();
    echo "Ola,". $_SESSION["nome"] . " seja bem vindo !";
?>

<section class="section section-posts grey lighten-4">
<div class="container">
<div class="row">
 <div class="col s12">
<div class="card">
<div class="card-content">
<span class="card-title">Posts</span>

<!-- BARRA DE PESQUISA -->
<form method="post" action="lista.php">
<div class="input-field row col s4">
<i class="material-icons prefix" style="margin-left: -3vh">search</i>
<input id="buscar" name="buscar" type="search" class="col s12" placeholder="Buscar">
</div>
<div>
<button type="submit" name="btnbusca" class="btn black" style="margin-bottom: -6vh; margin-left: 4vh;">OK</button>
<a href="chamado.php"  id="login-button" class="btn green" style="margin-bottom: -6vh;">Novo Chamado</a>


</div>


<!-- TABELA -->

<table class="striped">
<thead>
<tr>
<th>Titulo</th>
<th>Descricao</th>
<th>Prioridade</th>
<th>Status</th>
<th>Tipo</th>
<th>Editar</th>
<th>Apagar</th>



</tr>
</thead>
<tbody>

</div>
</div>
</div>
</div>
</div>
</section>
<?php montabusca();?>
</table>

<hr size="20"> 
<br>

<!-- BUSCA -->
<form method="post" action="lista.php">
<table class="striped">
<thead>
<tr>
<th>Titulo</th>
<th>Descricao</th>
<th>Prioridade</th>
<th>Status</th>
<th>Tipo</th>
<th>Editar</th>
<th>Apagar</th>

</tr>
</thead>
<tbody>

</div>
</div>
</div>
</div>
</div>
</section>
<?php tabela();?>
</table>

<!--  SCRIPTS-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
</body>
</html>


<!-- FUNÇÕES PHP -->
<!-- TABELA E PESQUISA -->
<?php
function tabela(){
    $con = new mysqli ("localhost","root","","sitefw");
    $sql = "select * from chamados order by titulo";
    $resultado = mysqli_query($con, $sql);
    while($reg = mysqli_fetch_array($resultado)){
        echo "<tr><td>". $reg["titulo"] ."</td>";
        echo "<td>". $reg["descricao"] ."</td>";
        echo "<td>". $reg["prioridade"] ."</td>";
        echo "<td>". $reg["status"] ."</td>";
        echo "<td>". $reg["tipo"] ."</td>";
        echo "<td><a href = 'editar.php?ed=$reg[titulo]'>Editar</td>";
        echo "<td><a href = 'delete.php?rn=$reg[titulo]'>Delete</td></tr>";    
    }
    $con->close();
}


function montaBusca(){
    if(isset($_POST["btnbusca"])){
    $con = new mysqli ("localhost","root","","sitefw");
    $busca = $_POST["buscar"];
    $sql = "select * from chamados where titulo like '%$busca%' or prioridade like '%$busca%'  order by titulo";
    $resultado = mysqli_query($con, $sql);
    while($reg = mysqli_fetch_array($resultado)){
        echo "<tr><td>". $reg["titulo"] ."</td>";
        echo "<td>". $reg["descricao"] ."</td>";
        echo "<td>". $reg["prioridade"] ."</td>";
        echo "<td>". $reg["status"] ."</td>";
        echo "<td>". $reg["tipo"] ."</td>";
        echo "<td><a href='editar.php?tt=$reg[titulo]'>editar</a></td>";
        echo "<td><a href = 'delete.php?rn=$reg[titulo]'>Delete</td></tr>";  
    }
    $con->close();
}
}
?>
