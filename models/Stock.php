<?php
/*modelo*/
class Stock extends Model {
	

	public function getProductos(){

		$this->db->query("select * FROM productos");
		return $this->db->fetchAll();
	}

	public function getReposicion(){

		$this->db->query("select a.id_producto,a.nombre_producto,a.stock,a.reposicion
							from productos a, productos b 
							WHERE a.id_producto=b.id_producto AND a.stock < b.reposicion");
		return $this->db->fetchAll();
	}


}

?>