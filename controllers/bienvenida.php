<?php
/*controler bienvenida*/

require '../fw/fw.php';
require '../views/Bienvenida.php';

$vb= new Bienvenida;
$vb->render();


?>