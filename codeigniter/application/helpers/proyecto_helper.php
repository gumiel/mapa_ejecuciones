<?php 

function listCagetoria(){

	$ci=& get_instance();
    $ci->load->database();

    $ci->db->select('id_categoria, nombre');
    $res = $ci->db->get('categoria');
    return $res->result_array();
    // $Var->result_array();
}

 ?>