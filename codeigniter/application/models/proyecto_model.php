<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		// $this->load->library('encrypt');
	}

	public function listProyectoPorCategoria($categoria = '')
	{		
		$this->db->select('*');		
		$this->db->join('imagen', 'imagen.id_proyecto = proyecto.id_proyecto AND imagen.portada = 1');		
		
		if($categoria != ''){
			$this->db->join('categoria', 'categoria.id_categoria = proyecto.id_categoria');
			$this->db->where('categoria.nombre', $categoria);							
		}

		$res = $this->db->get('proyecto');
		return $res->result_array();
	}

	public function createProyecto($data){
		$res = 0;
		try {
			$this->db->insert('proyecto', array(
				'titulo' => $data['titulo'], 
				'descripcion' => $data['descripcion'],
				 'latitud' => $data['latitud'], 
				 'longitud' => $data['longitud'], 
				 'zoom' => $data['zoom'], 
				 'id_departamento' => $data['id_departamento'], 
				 'titulo_url' => $data['titulo_url'], 
				 'id_categoria' => $data['id_categoria']));
			$res = $this->db->insert_id();			
		} catch (Exception $e) {
			echo $e;
		}
		return $res;
	}

	public function listaPuntosMapa()
	{		
		$this->db->select('titulo as marcadorTexto, latitud, longitud, titulo_url, categoria.nombre as nombre_categoria,  departamento.nombre as nombre_departamento');		
		$this->db->join('departamento', 'departamento.id_departamento = proyecto.id_departamento');	
		$this->db->join('categoria', 'categoria.id_categoria = proyecto.id_categoria');	
		$this->db->from('proyecto');
		$this->db->order_by('proyecto.id_proyecto', 'ASC');
		$res = $this->db->get();
		return $res->result_array();
	}

	public function listaPuntosMapaPorDepartamento($nombreDepartamento)
	{		
		$this->db->select('titulo as marcadorTexto, latitud, longitud, titulo_url');
		$this->db->join('departamento', 'departamento.id_departamento = proyecto.id_departamento');	
		$this->db->from('proyecto');	
		$this->db->where('departamento.nombre_url', $nombreDepartamento);				
		$res = $this->db->get();
		return $res->result_array();
	}

	public function verProyecto($titulo_url){
		$this->db->select('id_proyecto, titulo, descripcion, latitud, longitud, zoom, categoria.nombre as nombre_categoria,  departamento.nombre as nombre_departamento');		
		$this->db->join('departamento', 'departamento.id_departamento = proyecto.id_departamento');	
		$this->db->join('categoria', 'categoria.id_categoria = proyecto.id_categoria');	
		$this->db->from('proyecto');
		$this->db->where('proyecto.titulo_url', $titulo_url);
		$this->db->order_by('proyecto.id_proyecto', 'ASC');
		$res = $this->db->get();		
		return $res->row();
	}

	public function insertImagenes($imagenesBach){
		$this->db->insert_batch('imagen', $imagenesBach);
	}

}

/* End of file proyecto_model.php */
/* Location: ./application/models/proyecto_model.php */