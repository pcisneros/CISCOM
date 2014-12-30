<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Venta_model extends CI_Model {

	function __construct()
	{
		parent:: __construct();
	}

	function exists_row($cod_ven)
	{
		$this->db->where ('cod_ven',$cod_ven);	//select * from where cod = $cod_prod
	    $q = $this->db->get('venta');

	    if ($q->num_rows() >=1) {
	    	return TRUE;
	    }else {
	    	return FALSE;
	    }
	}


	function Save($data)
	{
		$this->db->insert('venta',$data);
		$q = $this->db->affected_rows();
		return $q;
	}

	function Update($data,$cod_ven)
	{
		$this->db->where('cod_ven',$cod_ven);
		$q = $this->db->get('venta');

		if ($q->num_rows()>0) {
			$this->db->where('cod_ven',$cod_ven);
			return $this->db->update('venta', $data);
		}

		return $q;
	}

	function Delete($cod_ven)
	{
	   $this->db->where('cod_ven',$cod_ven);
	   $this->db->delete('venta');
	   return $this->db->affected_rows();
	}

	function getTable()
	{
		$q = $this->db->get('venta');

		if ($q->num_rows() > 0 ) {
			return $q->result();
		}else  {
			return FALSE;
			// echo "no hay datos en la tabla";
		}
	}

	function search($q)
	{
		$this->db->like('cliente',$q);

		$q = $this->db->get('venta');

		if ($q->num_rows()> 0) {
			return $q;
		}else {
			return FALSE;
		}
	}
}