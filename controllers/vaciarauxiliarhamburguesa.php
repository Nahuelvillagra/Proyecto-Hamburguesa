<?php 
require '../fw/fw.php';
require '../models/Hamburguesa.php';
require '../views/BotonesHamburguesa.php';

if(isset($_SESSION['carritoaux'])){	 
		$_SESSION['carritoaux'] = $vacioa= array(); 
		header("location: carrito");
	} else {
		header("location: carrito");
	}

 ?>