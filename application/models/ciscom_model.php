<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ciscom_model extends CI_Model {



	function __construct()

	{
	 	parent:: __construct();

	}


	function exist_row($cod_prod)
	{
		$this->db->where('cod_prod',$cod_prod);
		$q = $this->db->get('producto');

		if ($q->num_rows()>=1)
		{
			return TRUE;
		}else {
			return FALSE;
		}
	}

	function insert_prod($data)
	{
		$this->db->insert('producto',$data);
		$q = $this->db->affected_rows();
		return $q;

	}

	function update_prod($data,$cod_prod)
	{
		$this->db->where('cod_prod',$cod_prod);
		$q = $this->db->get('producto');

		if ($q->num_rows()>0)
		{
			$this->db->where('cod_prod', $cod_prod);
		    return $this->db->update('producto',$data);
		}
		return $q;	
	}

	function del($cod_prod)
	{
			$this->db->where('cod_prod',$cod_prod);		// Aqui ejecuta el Query: delete from producto where cod_prod = $cod_prod que me pase el controller como dato
			$this->db->delete('producto');			
			return $this->db->affected_rows();			// retorna las filas afectadas
			
	}




		/*function insert_update($data,$cod_prod)		// Aqui recbo los paràmetros enviados desde mi controller
	{
			
		$this->db->where('cod_prod',$cod_prod);		// ESTO ES ASI: select * from producto where cod_prod = $cod_prod que viene del controller
		$q = $this->db->get('Producto');

		if ($q->num_rows()>0)						// si el numero de filas de mi tabla es mayor a 0 osea q hay mas de uno
		 {
			$this->db->where('cod_prod',$cod_prod);		// me PRODUCE esto: update producto set $data where cod_prod = $cod_prod que viene de mi controller
			$this->db->update('Producto',$data);
		 }else
		                                           // si no
		 {											
		 	$this->db->insert('Producto',$data);		// inserto into producto values (2,'')
		 }
		 return $q;
	}
*/
	


/*	function insert_prod($data)
	{

	$this->db->insert('producto',$data);
	$q = $this->db->affected_rows();
	return $q;

	}*/

/*	function get_row($cod_prod)
	 {

	 	$this->db->where('cod_prod',$cod_prod);
	 	$q = $this->db->get('producto');
	 	foreach ($q->result_array() as $row) {
	 		$fila = $row->row();
	 		return $fila;
	 	}*/

	 

	/*function update_prod($data)
	{
		$this->db->where('cod_prod',$cod_prod);
		return $this->db->update('producto',$data);
	}*/


}