<?php

//controllers/hamburguesa.php
require '../fw/fw.php';
require '../models/Hamburguesa.php';
require '../views/BotonesHamburguesa.php';

$p= new Hamburguesa;
$combos = $p->getcombos();
$desayunos = $p->getdesayunos();
$individuales = $p->getindividuales();
$postres = $p->getpostres();
$tamanios = $p->getTamanios();




$v= new BotonesHamburguesa;
if(isset($_GET['combo']) and isset($_GET['tamanio']))  {
	$listap = $p->getLista($_GET['combo'],$_GET['tamanio']); 
	$v->lista = $listap;

	if(!isset($_SESSION['carrito'])){	 
		$_SESSION['carrito'] = array(); 
	}

 	if(empty($_SESSION['carrito'])){
 		foreach($listap as $lis) {
	 		$_SESSION['carrito'][]=array("nombre"=>$lis['nombre'],"tamanio"=>$lis['tamanio'],"precio"=>$lis['precio'], "id_combo"=>$lis['id_combo'],"id_tamanio"=>$lis['id_tamanio'],"cant"=>1);

 		}
 	} else{
	 		/****************************************/
	 		foreach($listap as $lis){
	 			$combonombre=$lis['nombre'];
	 		}
	 		$noesta=true;
	 		/****************************************/
	 		foreach($_SESSION['carrito'] as $c=>&$b){
	 				
	 			if($b['nombre'] == $combonombre){
	 				$b['cant']=$b['cant']+1;
	 			} 		
	 		}
	 		foreach($_SESSION['carrito'] as $ca=>$ba){
				if($ba['nombre'] == $combonombre){
	 				$noesta=false;
	 			} 	
	 		}

	 		if($noesta){
				$_SESSION['carrito'][]=array("nombre"=>$lis['nombre'],"tamanio"=>$lis['tamanio'],"precio"=>$lis['precio'], "id_combo"=>$lis['id_combo'],"id_tamanio"=>$lis['id_tamanio'],"cant"=>1);
			}
	 		
 		}

  		/***********************************************************************************/


}
if(isset($_SESSION['carrito'])){
	$v->carritocompra = $_SESSION['carrito']; 
}
 
 	
			




if(isset($_GET['desayuno'])) $v->mostrarDesayunos=true;
if(isset($_GET['combos'])) $v->mostrarCombos=true;
if(isset($_GET['individuales'])) $v->mostrarIndividuales=true;
if(isset($_GET['postres'])) $v->mostrarPostres=true;

$v->combos = $combos;
$v->desayuno = $desayunos;
$v->individuales = $individuales;
$v->postres = $postres;
$v->tamanios = $tamanios;
$v->render();






?>