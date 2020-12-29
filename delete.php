<?php
$con = new mysqli ("localhost","root","","sitefw");
$titulo = $_GET['rn'];
$sql = "delete from chamados where titulo= '$titulo'";
$resultado = mysqli_query($con, $sql);
error_reporting(0);

if($resultado)
{
    echo"<font color='green'>record delete";
    header("Refresh: 0;url=https://localhost/site/lista.php");
}
else
    {
        echo"<font color='red'>erro";
        header("Refresh: 2;url=https://localhost/site/lista.php");
    }
?>