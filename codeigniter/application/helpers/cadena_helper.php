<?php 

function cortador200($cadena){
	return substr(strip_tags($cadena, '<br>'), 0, 400);	
}

function cortadorCadena200($cadena){
	$res = "";
	if( strlen(strip_tags($cadena)) >= 100 ){
		$res = substr(strip_tags($cadena, '<br>'), 0, 200).'...';
	}else{
		$res = substr(strip_tags($cadena, '<br>'), 0, 200);
	}
	return $res;
}

 ?>