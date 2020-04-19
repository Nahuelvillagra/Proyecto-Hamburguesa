<!DOCTYPE html>
<html>
<head>
	<title>Seleccion de informes</title>
	<style type="text/css">
		html{
			background-color: #5ECFE8;
		}
		.boton {
			width: 200px;
			height: 30px;
			margin: 4px;
			padding: 4px;
			background-color: #99ED97;
		    color: #000000;
		    border: 2px solid #000000;
		    border-radius: 10px;
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
<center>
<p><b>Elija el informe que desea obtener</b></p>
<button class="boton"><a href="informe-ventas">INFORME DE VENTAS</a></button> 
<button class="boton"><a href="informe-stock">INFORME DE STOCK</a></button> <br>
<button class="boton"><a href="bienvenida">VOLVER A INICIO</a></button>
</center>
</body>
</html>