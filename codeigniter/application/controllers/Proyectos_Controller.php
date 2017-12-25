<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyectos_Controller extends CI_Controller {
	
	public function prueba(){
    	//cargo el helper de url, con funciones para trabajo con URL del sitio
        $this->load->helper('url');
        
        //cargo el modelo de artículos
        $this->load->model('proyectos_model');
        
        //pido los ultimos artículos al modelo
        $ultimosArticulos = $this->Articulo_model->dame_ultimos_articulos();
        
        //creo el array con datos de configuración para la vista
        $datos_vista = array('rs_articulos' => $ultimosArticulos);
        
        //cargo la vista pasando los datos de configuacion
        $this->load->view('home', $datos_vista);
		$this->load->view('inicio');
	}
}
