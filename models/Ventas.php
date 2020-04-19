<?php
/*modelo*/
class Ventas extends Model {
	

	public function getTodasventas(){

		$this->db->query("select p.id_pedido,f.forma,pa.total,DATE_FORMAT(p.fecha, '%d-%m-%Y') as fecha
							from pedidos p,forma_pago f, pagos pa 
							where p.id_pago=pa.id_pago and pa.id_forma_pago=f.id_forma_pago
							ORDER BY p.fecha");
		return $this->db->fetchAll();
	}

	public function getCredito(){

		$this->db->query("select p.id_pedido,DATE_FORMAT(p.fecha, '%d-%m-%Y') as fecha,pa.total, c.banco, c.cod_confirmacion as cod_conf
						from pedidos p, pagos pa , credito c 
						WHERE p.id_pago=pa.id_pago and pa.id_pago=c.id_pago and pa.id_forma_pago=3");
		return $this->db->fetchAll();
	}

	public function getDebito(){

		$this->db->query("select p.id_pedido,DATE_FORMAT(p.fecha, '%d-%m-%Y') as fecha,pa.total, d.banco, d.cod_confirmacion_debito as cod_conf
						from pedidos p, pagos pa , debito d 
						WHERE p.id_pago=pa.id_pago and pa.id_pago=d.id_pago and pa.id_forma_pago=2");
		return $this->db->fetchAll();
	}

	public function getEfectivo(){

		$this->db->query("select p.id_pedido,DATE_FORMAT(p.fecha, '%d-%m-%Y') as fecha,pa.total 
						from pedidos p, pagos pa 
						WHERE p.id_pago=pa.id_pago and pa.id_forma_pago=1");
		return $this->db->fetchAll();
	}


}

?>