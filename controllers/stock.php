<?php
/*controlador*/

require '../fw/fw.php';
require '../models/Stock.php';
require '../views/informestock.php';

$pis= new Stock;
$vis= new informestock;
$vis->todosproductos= $pis->getProductos();
$vis->reponer= $pis->getReposicion();
$vis->render();





?>