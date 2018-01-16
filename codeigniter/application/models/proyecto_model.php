<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		// $this->load->library('encrypt');
	}

	public function listProyectoPorCategoria()
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

	public function listaPuntosMapa()
	{		
		$this->db->select('titulo as marcadorTexto, latitud, longitud');		
		$this->db->order_by('id_proyecto', 'ASC');
		$res = $this->db->get('proyecto');
		return $res->result_array();
	}

	public function listaPuntosMapaPorDepartamento($nombreDepartamento)
	{		
		$this->db->select('titulo as marcadorTexto, latitud, longitud ');
		$this->db->join('departamento', 'departamento.id_departamento = proyecto.id_departamento');	
		$this->db->from('proyecto');	
		$this->db->where('departamento.nombre_url', $nombreDepartamento);				
		$res = $this->db->get();
		return $res->result_array();
	}

}

/* End of file proyecto_model.php */
/* Location: ./application/models/proyecto_model.php */