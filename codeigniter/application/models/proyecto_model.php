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

	public function createProyecto($data){
		$res = false;
		try {
			$this->db->insert('proyecto', array(
				'titulo' => $data['titulo'], 
				'descripcion' => $data['descripcion'],
				 'latitud' => $data['latitud'], 
				 'longitud' => $data['longitud'], 
				 'zoom' => $data['zoom'], 
				 'id_departamento' => $data['id_departamento'], 
				 'id_categoria' => $data['id_categoria']));
			$res = true;			
		} catch (Exception $e) {
			echo $e;
		}
		return $res;
	}

}

/* End of file proyecto_model.php */
/* Location: ./application/models/proyecto_model.php */