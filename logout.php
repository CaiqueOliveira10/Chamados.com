<?php
	session_start();
	session_destroy();
	header("location: https://localhost/site/login.php");
?>