<?php 
require '../fw/fw.php';
require '../models/Hamburguesa.php';
require '../views/BotonesHamburguesa.php';

if(isset($_SESSION['carrito'])){	 
		$_SESSION['carrito'] = $vacio= array(); 
		header("location: hamburguesa");
	} else {
		header("location: hamburguesa");
	}
if(isset($_SESSION['carritoaux'])){	 
		$_SESSION['carritoaux'] = $vacioa= array(); 
		header("location: hamburguesa");
	} else {
		header("location: hamburguesa");
	}
if(isset($_SESSION['limite'])){	 
		$_SESSION['limite'] = $vaciob= array(); 
		header("location: hamburguesa");
	} else {
		header("location: hamburguesa");
	}


 ?>