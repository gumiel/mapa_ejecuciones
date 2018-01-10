<?php 

function formatoSelect($arrayAso, $id, $valor, $valorVacio){
	
	$array = array("" => $valorVacio);

	foreach ($arrayAso as $value) {
		$idAso = $value[$id];
		$valorAso = $value[$valor];
		$array[$idAso] = $valorAso;
	}

	return $array;

}



?>