<!DOCTYPE html>
<html>
<head>
	<title>Carrito</title>
	<style type="text/css">
		html{
			background-color: #5ECFE8;
		}

		table {
			font-family: arial;
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

		.botoneliminar {
			font-family: arial;
			border-radius: 20px;
			width: 25px;
			height: 25px;
			margin: 4px;
			padding: 4px;
			background-color: pink;
		    color: #000000;
		    border: 2px solid #000000;
			-webkit-transition-duration: 0.4s; /* Safari */
		   	transition-duration: 0.4s;
		   	cursor: pointer;
		}

		.botoneliminar:hover {
			background-color: white;
	    	color: 	#000000	;
		}

		.botonsumar {
			font-family: arial;
			border-radius: 20px;
			width: 25px;
			height: 25px;
			margin: 4px;
			padding: 4px;
			background-color: yellow;
		    color: #000000;
		    border: 2px solid #000000;
			-webkit-transition-duration: 0.4s; /* Safari */
		   	transition-duration: 0.4s;
		   	cursor: pointer;
		}

		.botonesumar:hover {
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


<?php if(!empty($this->carrito)){ /*if(!empty($this->carrito)) {*/ //var_dump($this->var);	 	
	 		if(isset($_POST['eliminador'])){
				$h= $_POST['eliminador'];
				if($this->carrito[$h]['cant'] > 1 ){
				$this->carrito[$h]['cant']=$this->carrito[$h]['cant']-1;					
				}
			} 

	  		if(isset($_POST['sumador'])){
				$s= $_POST['sumador'];
				$this->carrito[$s]['cant']=$this->carrito[$s]['cant']+1;
	    	}

?>
<form method="POST">
		
			<table border="1">
					<tr>
						<th> nombre </th>
						<th> tamanio </th>
						<th> precio </th>
						<th> cantidad </th>
						
					</th>
			 	<?php foreach($this->carrito as $car) { 
			 		$this->total = $this->total + ($car['precio'] * $car['cant']); ?> 
					
					<tr>
						<td><?= $car['nombre']?></td> 
						<td><?= $car['tamanio']?></td>
						<td><?= $car['precio']?></td>
						<td><?= $car['cant']?> </td>
						<td><button class="botonsumar" name="sumador" value="<?=$this->sumador?>">+</button><button class="botoneliminar" name="eliminador" value="<?=$this->eliminador?>">X</button></td>
					</tr>
						

				<?php $this->eliminador=$this->eliminador+1; $this->sumador=$this->sumador+1;}   ?>
					<tr>
						<td class="total"><b>total</b></td>
						<td colspan="3" ><?= $this->total ?></td>
					</tr>
			</table>
	<?php /*}*/ } ?>
</form>	
	</div>
	<center>
		<button  class="boton"><a href="cargarcarrito"> ACEPTAR </a></button>
		<button  class="boton"><a href="vaciarauxiliar"> CANCELAR </a></button>
		<p> <b>NOTA: <br> Al presionar <button class="botoneliminar">X</button> se eliminara solo una unidad del producto elegido </b> <br> <b>Al presionar <button class="botonsumar">+</button> se sumara solo una unidad del producto elegido </b> </p>
	</center>
</body>
</html>