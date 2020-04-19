<!DOCTYPE html>
<!-- html/BotonesHamburguesa.php -->
<html>
<head>
	<title> Combos </title>
	<style type="text/css">
		img{
			width: 130px; 
			height: 100px;
		}

		select{
			width: 100px; 
			height: 30px;
		}
		html{
			background-color: #5ECFE8;
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

		

		div{
				float: left;


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
		}

		body{
			font-family: arial;
		}
		.total{
			background-color: #99ED97
		}

	</style>
</head>
<div class="body">
<body>

<center>	
<h1>¡ELEGI LO QUE MAS TE GUSTE!</h1>	
</center>

<div class="arriba">
<form action="" method="get">
<input  class="boton" type="submit" value="desayuno" name="desayuno"> <br>
<input class="boton" type="submit" value="combos" name="combos"> <br>
<input class="boton" type="submit" value="productos_individuales" name="individuales"> <br>
<input class="boton" type="submit" value="postres" name="postres">		
	
</form>

</div>

<div class="arriba">
	
<?php

if (empty($_GET)) { ?>
	<center>
	<img src="detalles\Hamburguesa.png"> <br>
	</center>
	<?php	echo "ELIJA OPCION O CANCELE EL PEDIDO"; ?>
	<br>
	<center>
	<button class="boton" ><a href="bienvenida" >¿cancelar pedido?</a></button>
	</center>
<?php } ?> 
<!-- ********************  combos   ***************************  -->

<form method="get" action="">
<?php
if($this->mostrarCombos){
	 foreach($this->combos as $p) { ?>
	 
		<button class="boton" type="submit" name="combo" value="<?=$p['id_combo']?>" > <?=$p['nombre']?> </button>
		<br/>
<?php }  } ?>

</form>

<!-- ***********************************************  -->

<form method="get" action="">
<?php
if($this->mostrarDesayunos){
	 foreach($this->desayuno as $d) { ?>
		<button class="boton" type="submit" name="combo" value="<?=$d['id_combo']?>" > <?=$d['nombre']?> </button>
		<br/>

<?php }  } ?>

</form>

<!--*************************************************-->

<form method="get" action="">
<?php
if($this->mostrarIndividuales){
	 foreach($this->individuales as $in) { ?>
		<button class="boton" type="submit" name="combo" value="<?=$in['id_combo']?>" > <?=$in['nombre']?> </button>
		<br/>

<?php }  } ?>

</form>

<!--***********************************************-->

<form method="get" action="">
<?php
if($this->mostrarPostres){
	 foreach($this->postres as $po) { ?>
		<button class="boton" type="submit" name="combo" value="<?=$po['id_combo']?>" > <?=$po['nombre']?> </button>
		<br/>

<?php }  } ?>

</form>

<!--************************************************-->


</div>

<div >
<?php if(isset($_GET['combo'])){ if(!($_GET['combo']>11 and $_GET['combo']<17)){?>
	<form action="" method="get">
	<center>
		
	<select name="tamanio">
	<?php foreach ($this->tamanios as $tam) { ?>
		<option value="<?= $tam['id_tamanio']?>"><?= $tam['tamanio']?></option>
	<?php }?>

	</select>
	</center>
<input type="hidden" name="combo" value="<?= $_GET['combo']?>">
<br>
<input type="submit" class="boton" value="agregar al carrito">
</form>
<?php  } else{ if(isset($_GET['combo'])){ if($_GET['combo']>11 and $_GET['combo']<17) {?>
<form action="" method="get">
<input type="hidden" name="tamanio" value="2">
<input type="hidden" name="combo" value="<?= $_GET['combo']?>">
<br>
<input type="submit" class="boton" value="agregar al carrito">
</form>
<?php } } } }?>	
</div>

<div class="arriba">
<?php if(isset($this->carritocompra)){ if(!empty($this->carritocompra)) { ?>		
		<table border="1">
				<tr>
					<th> nombre </th>
					<th> tamanio </th>
					<th> precio </th>
					<th> cantidad </th>
					
				</th>



		 	<?php if(isset($this->carritocompra)){ foreach($this->carritocompra as $li) { 
		 		$this->total = $this->total + ($li['precio'] * $li['cant']); ?> 
				<tr>
					<td><?= $li['nombre']?></td>
					<td><?= $li['tamanio']?></td>
					<td><?= $li['precio']?></td>
					<td><?= $li['cant']?></td>
				</tr>

			<?php }  } ?>
				<tr>
					<td class="total"> <b>total</b> </td>
					<td colspan="4" ><?= $this->total ?></td>
				</tr>
		</table>
		<form action="pagos" method="GET">
			<input type="hidden" name="total" value="<?=$this->total?>">
			<input class="boton" type="submit" value="pedir">
		</form>

		<button  class="boton"><a href="vaciarauxiliarhamburguesa"> ver carrito </a></button> <br>
		<button class="boton" ><a href="vaciar" >volver a pedir</a></button> <br>
		<button class="boton" ><a href="bienvenida" >cancelar pedido</a></button>


<?php } } ?>
</div>

</body>
</div>
</html>
