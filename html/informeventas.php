<!DOCTYPE html>
<html>
<head>
	<title>Informe de ventas</title>
	<style type="text/css">
		html{
			background-color: #5ECFE8;
		}
		/*div{
			float: left;
		}*/
		table {
			font-family: arial;
			/*width: 1%;*/
			text-align: center;
			border: none;
			/*margin: 1%;*/
		}


		th {
			border: none;
			border-bottom: 1px solid #000000;
			background-color: #99ED97;
	    	color: 	#000000;
		}

		td {
			border: none;
			border-bottom: 1px solid #DEB887;
			background-color: #FFFFFF;
			color: 	#000000;
		}

		.boton {
			font-family: arial;
			border-radius: 10px;
			width: 200px;
			height: 30px;
			margin: 4px;
			padding: 4px;
			background-color: #99ED97;
		    color: #000000;
		    border: 2px solid #000000;
			-webkit-transition-duration: 0.4s; /* Safari */
		   	transition-duration: 0.4s;
		   	cursor: pointer;
		}

		.boton:hover {
			background-color: white;
	    	color: 	#000000	;
		}
		a{
			text-decoration: none;
			display: block;
			color: black;
			font-family: arial;
		}
	</style>
</head>
<body>
<div>
<CENTER>
<p><b>VENTAS TOTALES</b></p>	
<table>
	<tr>
		<th>N° PEDIDO</th>
		<th>FORMA DE PAGO</th>
		<th>TOTAL</th>
		<th>FECHA</th>
	</tr>
	<tr>
<?php if(isset($this->todasventas)){ foreach($this->todasventas as $t){ ?> 
		<td><?= $t['id_pedido']?></td>
		<td><?= $t['forma']?></td>
		<td><?= $t['total']?></td>
		<td><?= $t['fecha']?></td>
		
	</tr>
<?php } } ?>
</table>	
</CENTER>
</div>

<div>
<CENTER>
<p><b>VENTAS CON TARJETA DE DEBITO</b></p>	
<table>
	<tr>
		<th>N° PEDIDO</th>
		<th>TOTAL</th>
		<th>FECHA</th>
		<th>BANCO</th>
		<th>CONFIRMACION</th>
	</tr>
	<tr>
<?php if(isset($this->debito)){ foreach($this->debito as $d){ ?> 
		<td><?= $d['id_pedido']?></td>
		<td><?= $d['total']?></td>
		<td><?= $d['fecha']?></td>
		<td><?= $d['banco']?></td>
		<td><?=$d['cod_conf']?></td>
		
	</tr>
<?php } } ?>
</table>	
</CENTER>
</div>

<div>
<CENTER>
<p><b>VENTAS CON TARJETA DE CREDITO</b></p>	
<table>
	<tr>
		<th>N° PEDIDO</th>
		<th>TOTAL</th>
		<th>FECHA</th>
		<th>BANCO</th>
		<th>CONFIRMACION</th>
	</tr>
	<tr>
<?php if(isset($this->credito)){ foreach($this->credito as $c){ ?> 
		<td><?= $c['id_pedido']?></td>
		<td><?= $c['total']?></td>
		<td><?= $c['fecha']?></td>
		<td><?= $c['banco']?></td>
		<td><?=$c['cod_conf']?></td>
		
	</tr>
<?php } } ?>
</table>	
</CENTER>
</div>

<div>
<CENTER>
<p><b>VENTAS EN EFECTIVO</b></p>	
<table>
	<tr>
		<th>N° PEDIDO</th>
		<th>TOTAL</th>
		<th>FECHA</th>
	</tr>
	<tr>
<?php if(isset($this->efectivo)){ foreach($this->efectivo as $e){ ?> 
		<td><?= $e['id_pedido']?></td>
		<td><?= $e['total']?></td>
		<td><?= $e['fecha']?></td>
		
	</tr>
<?php } } ?>
</table>	
</CENTER>
</div>

<center>
	<button class="boton"><a href="bienvenida">VOLVER A INICIO</a></button>
	<button class="boton"><a href="informes">ELEGIR OTRO INFORME</a></button>
</center>
</body>
</html>