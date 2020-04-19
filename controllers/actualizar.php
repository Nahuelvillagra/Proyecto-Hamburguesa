<?php
/*controlador*/

require '../fw/fw.php';
require '../models/Actualizar.php';
require '../views/actualizarstock.php';

$ps= new Actualizar;
$vs= new actualizarstock;

if(isset($_POST['nom']) and isset($_POST['cant'])){

	$existe = $ps->getExiste($_POST['nom']);
	if($existe == 1){
		$ida= $ps->getIdProducto($_POST['nom']);
		foreach($ida as $d){
			$id=$d['id_producto'];
		}
		
		$ps->updateProducto((int)$id,$_POST['cant']);
		$vs->ok=true;
	} else { 
			$vs->adver=true;
		}
	
}

$vs->render();

?>