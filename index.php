<?php

require("./controller/Controller.php");

//Instancio el controlador
$controller = new Controller;

if (isset($_GET['m'])) {
	$controller->{$_GET['m']}();
}else {
	//Ejecuto el método
	$controller->index();
}



?>