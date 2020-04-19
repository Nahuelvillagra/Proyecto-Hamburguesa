<?php
/*controlador*/

require '../fw/fw.php';
require '../models/Ventas.php';
require '../views/informeventas.php';

$pi= new Ventas;
$vi= new informeventas;
$vi->todasventas= $pi->getTodasventas();
$vi->credito= $pi->getCredito();
$vi->debito= $pi->getDebito();
$vi->efectivo= $pi->getEfectivo();
$vi->render();





?>