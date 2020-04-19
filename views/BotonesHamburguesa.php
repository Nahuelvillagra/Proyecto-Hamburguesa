<?php

// views/BotonesHamburguesa.php

class BotonesHamburguesa extends View {
	public $desayuno;
	public $combos;
	public $individuales;
	public $postres;
	public $tamanios;
	public $lista=null;
	public $limi=null;
	public $mensajelimite=false;

	public $mostrarDesayunos=false;
	public $mostrarCombos= false;
	public $mostrarIndividuales= false;
	public $mostrarPostres= false;
	public $total;
	public $carritocompra;
}