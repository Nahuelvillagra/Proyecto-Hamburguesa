<?php
/* modelo */

class Pagos extends Model {
	

	public function getFormaPago(){

	$this->db->query("SELECT * from forma_pago");
		return $this->db->fetchAll();
	}

	/*pagos*/
	public function setPagos($forma,$total){
	
		if(!ctype_digit($forma)) throw Exception;
		if($forma <1 or $forma >3) throw Exception;  

		if(!is_numeric($total)) throw Exception;
		if($total <1) throw Exception;

		$this->db->query("INSERT INTO pagos
							  (id_forma_pago, total)
							  VALUES
							  ($forma, $total)");
		
		} 


	public function getUltimoNumeroPago(){
		
			return $this->db->lastId();
	}

	public function setPedido($ulnum){
		if(!is_numeric($ulnum)) throw new Exception();
		
		$this->db->query("INSERT INTO pedidos (id_pago,fecha)
							VALUES($ulnum,NOW() )");

	}

	public function getUltimoNumeroPedido(){
			return $this->db->lastId();
			}

	public function setCombosPedido($ul){
		
		if(!is_numeric($ul)) throw new Exception();
		if(isset($_SESSION['carrito'])){ foreach($_SESSION['carrito'] as $c){
			
			$combod=intval($c['id_combo']);

			$this->db->query("INSERT INTO combos_pedido
							  (id_pedido, id_combo)
							  VALUES
							  ($ul, $combod)" );
			}
		}
	}

	public function setDebito($ulti){
		if(!is_numeric($ulti)) throw new Exception();
		$ran = rand();
		$this->db->query("INSERT INTO debito
							  (id_pago, cod_confirmacion_debito, banco)
							  VALUES
							  ($ulti, $ran , 'zarazaza')" );
			
	}
	public function setCredito($ultim){
		if(!is_numeric($ultim)) throw new Exception();
		$rand = rand();
		$this->db->query("INSERT INTO credito
							  (id_pago, cod_confirmacion, banco)
							  VALUES
							  ($ultim, $rand , 'zarazaza')" );
			
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

	public function updateStock($prod,$cant){
		if(!is_numeric($cant)) throw new Exception();
		if(!ctype_digit($prod)) throw new Exception();
		if($prod < 1) throw new Exception();
			
		

		$this->db->query("UPDATE productos
							  SET stock = stock - $cant
							  WHERE id_producto = $prod");
	}

}

?>