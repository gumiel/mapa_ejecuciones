<?php 

function cortador200($cadena){
	return substr(strip_tags($cadena, '<br>'), 0, 400);	
}

 ?>