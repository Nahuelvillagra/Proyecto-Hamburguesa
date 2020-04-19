<?php
/*modelo*/
class Actualizar extends Model {
	

	public function getExiste($nombre){

		if(strlen($nombre) < 3 ) throw new Exception();
		$nombre = $this->escape($nombre);
		$nombre = str_replace("%", "\%", $nombre);
		$nombre = str_replace("_", "\_", $nombre);
		

		$this->db->query("SELECT nombre_producto
							FROM productos 
							WHERE nombre_producto LIKE '%$nombre%' ");
		return $this->db->numRows();
	}

	public function getIdProducto($nombre){
		if(strlen($nombre) < 3 ) throw new Exception();
		$nombre = $this->escape($nombre);
		$nombre = str_replace("%", "\%", $nombre);
		$nombre = str_replace("_", "\_", $nombre);

		$this->db->query("SELECT id_producto
							FROM productos 
							WHERE nombre_producto LIKE '%$nombre%' ");
		return $this->db->fetchAll();
	}
	
	public function updateProducto($id,$cantidad){
		if(!ctype_digit($id)) throw new Exception();
		if($id < 1) throw new Exception();

		if(!is_numeric($cantidad)) throw new Exception();
		if($id < 1) throw new Exception();
		
		$this->db->query("UPDATE productos SET stock = stock+ $cantidad WHERE id_producto = $id");
	}


}

?>