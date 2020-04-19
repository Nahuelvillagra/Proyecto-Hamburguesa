<!-- html -->

<!DOCTYPE html>
<html>
<head>
	<title>Pago</title>
	<style type="text/css">
		div{
			float: left;
		}

		h1{
			font-family: arial;
		}
		html{
			background-color: #5ECFE8;
		}
		img{
			width: 230px; 
			height: 200px;
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
		table {
			font-family: arial;
			width: 1%;
			text-align: center;
			border: none;
			margin-left: auto;
	    	margin-right: auto;
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

		select{
			width: 200px; 
			height: 30px;
		}

		.total{
			background-color: #99ED97
		}

		body{
			font-family: arial;
		}

	</style>
</head>
<body>

<?php if(!$this->pagorealizado){?>
	
		<h1>ELIJA FORMA DE PAGO</h1>

<div>

	<form method="GET" action="">
		
		<input type="hidden" name="total" value="<?= $_GET['total'] ?>" >
		
		<select name="forma">
			<?php foreach($this->formap as $f){?>
			<option value="<?= $f['id_forma_pago'] ?>"> <?=$f['forma'] ?> </option>
		<?php }  ?>
		</select>
		<br>
		<input type="submit" value="elegir" class="boton">
	</form>
	<button class="boton" ><a href="hamburguesa" >agregar mas combos/productos</a></button> <br>
	<button class="boton" ><a href="vaciar" >cancelar pedido</a></button> 
	
</div>

<div>
	
<?php if(isset($_SESSION['carrito'])){ if(!empty($_SESSION['carrito'])) { ?>		
		<table border="1">
				<tr>
					<th> nombre </th>
					<th> tamanio </th>
					<th> precio </th>
					<th> cantidad </th>
					
				</th>
		 	<?php if(isset($_SESSION['carrito'])){ foreach($_SESSION['carrito'] as $li) { 
		 		$this->total = $this->total + ($li['precio'] * $li['cant']); ?> 
				<tr>
					<td><?= $li['nombre']?></td>
					<td><?= $li['tamanio']?></td>
					<td><?= $li['precio']?></td>
					<td><?=$li['cant']?></td>
				</tr>

			<?php }  } ?>
				<tr>
					<td class="total"><b>total</b></td>
					<td colspan="4" ><?= $this->total ?></td>
				</tr>
		</table>
<?php } } ?>
</div>

<?php } else{ ?>
	<center>
		<p><b>pago realizado,espere a ser llamado para la entrega de su pedido</b></p>
		<br><p>Su numero de pedido es: <?= $this->numped ?> </p>
		<br>
		<button class="boton" ><a href="bienvenida" >aceptar</a></button>
	</center>
<?php } ?>
</body>
</html>