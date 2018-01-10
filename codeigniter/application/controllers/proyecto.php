<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('proyecto_model');		
		$this->load->model('categoria_model');		
		$this->load->model('departamento_model');		
		$this->load->helper("cadena");
		$this->load->helper("select_helper");
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

		$selectCategoria = $this->categoria_model->categoriaSelectList();
		$data['selectCategoria'] = formatoSelect($selectCategoria, "id", "nombre", "Seleccione");
		$data['selectCategoriaOpt'] = array('class' => "form-control", 'id'=> 'categoria');

		$selectDepartamento = $this->departamento_model->departamentoSelectList();
		$data['selectDepartamento'] = formatoSelect($selectDepartamento, "id", "nombre", "Seleccione");
		$data['selectDepartamentoOpt'] = array('class' => "form-control", 'id'=> 'departamento');

		$this->load->view('crearProyecto', $data) ;

	}		

}
