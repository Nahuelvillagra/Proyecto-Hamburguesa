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
<p><b>PRODUCTOS A REPONER</b></p>	
<table>
	<tr>
		<th>N° DE PRODUCTO</th>
		<th>NOMBRE</th>
		<th>STOCK</th>
	</tr>
<?php if(isset($this->reponer)){ foreach($this->reponer as $r){ ?> 
	<tr>
		<td><?= $r['id_producto']?></td>
		<td><?= $r['nombre_producto']?></td>
		<td><?= $r['stock']?></td>		
	</tr>
<?php } } ?>
</table>	
<button class="boton"><a href="actualizar">¿actualizar stock?</a></button>
</CENTER>
</div>

<div>
<CENTER>
<p><b>LISTA DE PRODUCTOS</b></p>	
<table>
	<tr>
		<th>N° DE PRODUCTO</th>
		<th>NOMBRE</th>
		<th>STOCK DISPONIBLE</th>
		<th>PTO DE REPOSICION</th>
	</tr>
	<tr>
<?php if(isset($this->todosproductos)){ foreach($this->todosproductos as $p){ ?> 
		<td><?= $p['id_producto']?></td>
		<td><?= $p['nombre_producto']?></td>
		<td><?= $p['stock']?></td>
		<td><?= $p['reposicion']?></td>
		
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