<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departamento_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function departamentoSelectList(){
		$this->db->select('id_departamento as id, nombre');		
		$this->db->order_by('id_departamento', 'ASC');
		$res = $this->db->get('departamento');
		return $res->result_array(); 
	}

}

/* End of file departamento_model.php */
/* Location: ./application/models/departamento_model.php */