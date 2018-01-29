<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagen_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function listImagenes($id_proyecto){
		$this->db->select('nombre_imagen, nombre_imagen_min');
		$this->db->where('id_proyecto', $id_proyecto);
		$result = $this->db->get('imagen');
		return $result->result_array();
	}

}

/* End of file imagen_model.php */
/* Location: ./application/models/imagen_model.php */