<?php
/* controlador */

require '../fw/fw.php';
require '../views/carritocompra.php';


$vc= new carritocompra;

if(isset($_SESSION['carrito'])){ 
	if(!isset($_SESSION['carritoaux'])){	 
			$_SESSION['carritoaux'] = array();
		} 
	if(empty($_SESSION['carritoaux'])){
		foreach( $_SESSION['carrito'] as $aux){
			$_SESSION['carritoaux'][]=$aux;			
		}
	} else{
		foreach($_SESSION['carrito'] as $keycarrito=>$valorcarrito){
			foreach ($_SESSION['carritoaux'] as $keyauxiliar => $valorauxiliar) {
				if($valorauxiliar['nombre'] <> $valorauxiliar['nombre']){
					$_SESSION['carritoaux'][]= $valorcarrito;
				}
			}
			
		}
	}
	
}

$vc->carrito = &$_SESSION['carritoaux'];
///$vc->var= var_dump($_SESSION['carritoaux']);
$vc->render();

 /*	} else{
 			$_SESSION['carritoaux']= array();
 			//foreach($_SESSION['carrito'] as $aux){
			//$_SESSION['carritoaux'][]=$aux;
		}
		$vc->carrito = &$_SESSION['carritoaux'];
*/
	 

?>