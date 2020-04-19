<?php 
require '../fw/fw.php';
require '../models/Hamburguesa.php';
require '../views/BotonesHamburguesa.php';

if(isset($_SESSION['carrito']) and isset($_SESSION['carritoaux'])){	 
		$_SESSION['carrito'] = $_SESSION['carritoaux']; 
		header("location: hamburguesa");
	} else {
		echo "hola que paso";;
	}


 ?>