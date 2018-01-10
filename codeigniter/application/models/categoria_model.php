<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function categoriaSelectList(){
		$this->db->select('id_categoria as id, nombre');		
		$this->db->order_by('id_categoria', 'ASC');
		$res = $this->db->get('categoria');
		return $res->result_array(); 
	}

}

/* End of file categoria_model.php */
/* Location: ./application/models/categoria_model.php */