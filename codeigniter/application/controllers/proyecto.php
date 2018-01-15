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
		 $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));

        $config['upload_path']          = './imagenes_proyecto/';
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['max_size']             = 100000;
	    $config['max_width']            = 2020;
	    $config['max_height']           = 1768;
	    

	    $this->load->library('upload', $config);

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

	public function procesarCreacion(){

		$titulo          = $this->input->post('titulo');
		$descripcion     = $this->input->post('descripcion');
		$latitud         = $this->input->post('latitud');
		$longitud        = $this->input->post('longitud');
		$zoom            = $this->input->post('zoom');
		$id_departamento = $this->input->post('departamento');
		$id_categoria    = $this->input->post('categoria');
		$titulo          = $this->input->post('titulo');

		$files      = $_FILES;
		$file_count = count($_FILES['imagen']['name']);		

		for($i = 0; $i < $file_count; $i++)
		{

			$_FILES['upload_field_name']['name']     = $files['imagen']['name'][$i];
			$_FILES['upload_field_name']['type']     = $files['imagen']['type'][$i];
			$_FILES['upload_field_name']['tmp_name'] = $files['imagen']['tmp_name'][$i];
			$_FILES['upload_field_name']['error']    = $files['imagen']['error'][$i];
			$_FILES['upload_field_name']['size']     = $files['imagen']['size'][$i];

		    if( $this->upload->do_upload('upload_field_name'))
		    {
		        echo "entro";
		        break;
		    }
			else
		    {
		        echo "no entro";
		        // Successfull file upload
		        var_dump($this->upload->display_errors());
		        break;
		    }
		} 



		// if ($this->form_validation->run() == TRUE)
		if (TRUE)
        {
			$data = array(
			'titulo' => $titulo, 
			'descripcion' => $descripcion,
			'latitud' => $latitud, 
			'longitud' => $longitud, 
			'zoom' => $zoom, 
			'id_departamento' => $id_departamento, 
			'id_categoria' => $id_categoria);
			$this->proyecto_model->createProyecto($data);
			redirect('proyecto/crear', 'refresh');
        }
        else
        {
        	echo validation_errors();
            $this->load->view('crearProyecto');
        }

	}

	public function mapa($departamento = ''){
		if($departamento != '' ){
			$data['listaPuntos'] = $this->proyecto_model->listaPuntosMapa();
		}else{
			$data['listaPuntos'] = $this->proyecto_model->listaPuntosMapaPorDepartamento($departamento);
		}		
		
		$this->load->view('mapa', $data, FALSE);
	}	

}
