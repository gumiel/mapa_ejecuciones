<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('proyecto_model');		
		$this->load->helper("cadena");
	}

	public function index(){    
		$this->load->view('inicio');
	}

	

	public function categoria($id=""){
		echo $id;
		$data['proyectos'] = $this->proyecto_model->listAllProyecto();
		$this->load->view('listaProyectos', $data) ;
	}

	public function crear(){
		$this->load->view('crearProyecto') ;
	}		

}
