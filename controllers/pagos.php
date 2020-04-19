<?php 
/*controlador*/

require '../fw/fw.php';
require '../models/Pagos.php';
require '../views/formapagos.php';


$pa= new Pagos;


$vp= new formapagos;


$vp->totalo= $_GET['total'];

if(isset($_GET['forma']) and isset($_GET['total']) and isset($_SESSION['carrito']) ) {

/*registra pago*/
$pagos= $pa->setpagos($_GET['forma'],$_GET['total']);

/* registra pedido */
$ultimonumero= $pa->getUltimoNumeroPago();
var_dump($ultimonumero);
$pedido= $pa->setPedido($ultimonumero);

/*registra combos_pedido*/
$ultimonumeropedido= $vp->numped = $pa->getUltimoNumeroPedido();
$combopedido= $pa->setCombosPedido($ultimonumeropedido);

/*pago debito*/
if($_GET['forma'] == 2 ){
	$debito= $pa->setDebito($ultimonumero);
}

/*pago credito*/
if($_GET['forma'] == 3){
	$credito= $pa->setCredito($ultimonumero);
}


/* decrementar stock */
foreach($_SESSION['carrito'] as $s=>$l){

	$cantidadprod= $pa->getComboCantProd($l['id_combo'], $l['id_tamanio']);
	for($x=1;$x<=$l['cant'];$x++){
		foreach($cantidadprod as $t=>$k){
			$decremento = $pa->updateStock($k['id_prod'],$k['cantidad']);
		
		}
	}	
}



/*pago realizado*/
$vp->pagorealizado=true;
}

$formas= $pa->getFormaPago();
$vp->formap= $formas;


$vp->render();
?>