<?php 
//models/Hamburguesa.php

class Hamburguesa extends Model {
	

	public function getcombos(){

	$this->db->query("SELECT nombre,id_combo from combos where id_combo > 16");
		return $this->db->fetchAll();
	}

	public function getdesayunos(){

	$this->db->query("SELECT nombre,id_combo from combos where id_combo >= 9 and id_combo<=13 ");
		return $this->db->fetchAll();
	}
	
	public function getindividuales(){

	$this->db->query("SELECT nombre,id_combo from combos where id_combo <8");
		return $this->db->fetchAll();
	}

	public function getpostres(){

	$this->db->query("SELECT nombre,id_combo from combos where id_combo >13 and id_combo <17");
		return $this->db->fetchAll();
	}

	public function getTamanios(){

	$this->db->query("select id_tamanio,tamanio from combo_tamanio");
	return $this->db->fetchAll();
	}

	public function getLista($com,$tam){
		if(!ctype_digit($com)) throw new Exception();
		if($com < 1) throw new Exception();
		if(!ctype_digit($tam)) throw new Exception();
		if($tam <1) throw new Exception();
		
		$this->db->query("select c.id_combo as id_combo ,c.nombre,ct.tamanio,t.precio,t.id_tamanio as id_tamanio from combos c, combo_tamanio ct, tamanios t where ct.id_tamanio=t.id_tamanio and c.id_combo=t.id_combo and t.id_combo='$com' and t.id_tamanio= '$tam'  ");
		return $this->db->fetchAll();
	}

	public function getComboCantProd($com,$tam){
		
		if(!ctype_digit($com)) throw new Exception();
		if($com < 1) throw new Exception();
		if(!ctype_digit($tam)) throw new Exception();
		if($tam <1) throw new Exception();

		$this->db->query("SELECT id_combo, id_tamanio, id_prod, cantidad 
							FROM combo_cant_prod
							WHERE id_combo=$com and id_tamanio=$tam");
		return $this->db->fetchAll();
	}

	
	public function getProductos(){
		$this->db->query("SELECT id_producto,stock FROM productos");
		return $this->db->fetchAll();
	}


}

?>