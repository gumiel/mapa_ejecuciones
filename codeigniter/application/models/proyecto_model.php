<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		// $this->load->library('encrypt');
	}

	public function listAllProyecto()
	{		
		$this->db->select('*');		
		$this->db->order_by('id_proyecto', 'ASC');
		$res = $this->db->get('proyecto');
		return $res->result_array();
	}

}

/* End of file proyecto_model.php */
/* Location: ./application/models/proyecto_model.php */