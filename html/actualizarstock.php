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
		.dvertencia{
			color:red;
		}
		.ok{
			color:green;
		}
	</style>
</head>
<body>
<div>

<CENTER>

<p><b>Ingrese nombre del producto y cantidad que desee actualizar</b></p>	
<form method="POST" action="">
Nombre:
<input type="text" name="nom"> 
Cantidad:
<input type="number" min="1" name="cant">
<?php if($this->adver){ ?>
<center><p class='dvertencia'><b>PRODUCTO NO EXISTENTE,compruebe escritura</b></p></center>
<?php } ?>
<?php if($this->ok){ ?>
<center><p class='ok'><b>Producto actualizado correctamente </b></p></center>
<?php } ?>

	<br>
	<button type="sumbit" class="boton">Actualizar</button> <br>
	<button class="boton"><a href="informes">Cancelar</a></button><br>	
	<button class="boton"><a href="bienvenida">Volver a inicio</a></button>

</center>
</form>
</div>
</body>
</html>