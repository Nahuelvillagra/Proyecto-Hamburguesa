<?php 
require '../fw/fw.php';
require '../models/Hamburguesa.php';
require '../views/BotonesHamburguesa.php';

if(isset($_SESSION['carritoaux'])){	 
		$_SESSION['carritoaux'] = $vacioa= array(); 
		header("location: hamburguesa");
	} else {
		header("location: hamburguesa");
	}

 ?>