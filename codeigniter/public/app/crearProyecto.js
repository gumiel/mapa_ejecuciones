var myLatLngDefault = {lat: -16.833564, lng: -65.348245};
var myLatLng = null;
var map = null;
var marker = null;
var infowindow = null;

// para vista previa
var myLatLngDefaultVP = {lat: -16.833564, lng: -65.348245};
var myLatLngVP = null;
var mapVP = null;
var markerVP = null;
var infowindowVP = null;


//para las imagenes previas
var cadenaImagenes = new Array();


function initMap(){
        
	map = new google.maps.Map(document.getElementById('mapaGMaps'), {
	  center: myLatLngDefault,
	  zoom: 6
	});

}


function verMapa(latitud, longitud, zoom){

	if ( latitud != "" &&  longitud != "") {
	  
	  if(marker != null){
	    
	    marker.setMap(null);  
	  	if(infowindow != null){
	    	infowindow.setMap(null);  
		}
	  }
	  
	  var zoom1 = (zoom != "")? zoom: 14;

	  var myLatLngMaker = {lat: parseFloat(latitud), lng: parseFloat(longitud)};

	  map.setCenter(myLatLngMaker);	  
	  map.setZoom(parseInt(zoom1));
	  
	  marker = new google.maps.Marker({
	    map: map,
	    position: myLatLngMaker,
	    // draggable: true,
	    animation: google.maps.Animation.DROP,
	    title: 'Marcador arrastrable'
	  });

	  var markerLatLng = marker.getPosition();
	  var contentString = '<strong>La posicion del marcador es:</strong><br/>'+
	    markerLatLng.lat()+
	    ', '+
	    markerLatLng.lng()+
	    '<br/>Arrástrame para actualizar la posición.';
	  infowindow = new google.maps.InfoWindow({
	    content: contentString
	  });
	  
	  infowindow.open(map, marker);	  

	  google.maps.event.addListener(map, 'click', function(event) {
	    addMarkerClick(event.latLng, map);
	  });
	  
	}else{
	 
		if(marker){
	  		marker.setMap(null);			
		} 
	  
	  map.setCenter(myLatLngDefault);
	  map.setZoom(6);

	  
	  google.maps.event.addListener(map, 'click', function(event) {	    
	    addMarkerClick(event.latLng, map);
	  });
	  
	}        
}

function addMarkerClick(location, map) {
	
	if(typeof marker != "undefined" ){
		
		if( marker != null ){
		
			marker.setMap(null);
		}
	}

	marker = new google.maps.Marker({
	  position: location,
	  map: map
	});
	var markerLatLng = marker.getPosition();

	if(infowindow != null){
		infowindow.setContent([
		    '<strong>La posicion del marcador es:</strong><br/>',
		    markerLatLng.lat(),
		    ', ',
		    markerLatLng.lng(),
		    '<br/>Arrástrame para actualizar la posición.'
		].join(''));
		infowindow.open(map, marker);
	}else{
		
		var contentString = '<strong>La posicion del marcador es:</strong><br/>'+
		markerLatLng.lat()+
		', '+
		markerLatLng.lng()+
		'<br/>Arrástrame para actualizar la posición.';
		infowindow = new google.maps.InfoWindow({
		content: contentString
		});

		infowindow.open(map, marker);	 
	}
	

}

function modifiZoom(){

	var zoom = map.getZoom();
	$("#zoomMap").html(zoom);

	map.addListener('zoom_changed', function() {
	  $("#zoomMap").html(map.getZoom());
	});

}

function initMapVistaPrevia(){
	
	mapVP = new google.maps.Map(document.getElementById('mapVP'), {
	  center: myLatLngDefaultVP,
	  zoom: 6
	});

}

function verMapaVistaPrevia(latitudVP, longitudVP, zoomVP){
	if ( latitudVP != "" &&  longitudVP != "") {
	  
	  if(markerVP != null){

	    markerVP.setMap(null);  
	    infowindowVP.setMap(null);  
	  
	  }
	  
	  var myLatLngMakerVP = {lat: parseFloat(latitudVP), lng: parseFloat(longitudVP)};
	  
	  mapVP.setCenter(myLatLngMakerVP);
	  mapVP.setZoom(parseInt(zoomVP)) ;
	  
	  markerVP = new google.maps.Marker({
	    map: mapVP,
	    position: myLatLngMakerVP,
	    animation: google.maps.Animation.DROP,
	    title: 'Marcador arrastrable'
	  });

	  var markerLatLngVP = markerVP.getPosition();
	  var contentStringVP = '<strong>La posicion del marcador es:</strong><br/>'+
	    markerLatLngVP.lat()+
	    ', '+
	    markerLatLngVP.lng()+
	    '<br/>Arrástrame para actualizar la posición.';
	  infowindowVP = new google.maps.InfoWindow({
	    content: contentStringVP
	  });
	  
	  infowindowVP.open(mapVP, markerVP);
	  
	}else{
	  
	  markerVP.setMap(null);
	  mapVP.setCenter(myLatLngDefaultVP);
	  mapVP.setZoom(6);
	  
	} 
}



function seleccionArchivo(input){
	if (input.files && input.files[0]) {
	  var reader = new FileReader();
	  reader.onload = function (e) {
	      var imgSrc = '<img data-src="holder.js/75x75" class="rounded"  style="width: 168px; height: 150px;" src="'+e.target.result+'" data-holder-rendered="true">';
	      $("#listaImgVistaPrevia").prepend(imgSrc)
	  }

	  reader.readAsDataURL(input.files[0]);
	}
}













$(document).ready(function($){


/********************************************************************************************
********************************************************************************************
********************************************************************************************
********************************************************************************************/
	// ACCIONES PARA FORMULARIO

	$('#descripcion').summernote({          
      tabsize: 2,
      height: 300,
      lang: 'es-ES' // default: 'en-US'
    });



/********************************************************************************************
********************************************************************************************
********************************************************************************************
********************************************************************************************/
	// ACCIONES PARA MAPA
	
	$("#btnVerMapa").click(function(){
      $("#modalMapa").modal("show");          
    });

    $('#modalMapa').on('shown.bs.modal', function (e) {
      var latitud = $("#latitud").val();
      var longitud = $("#longitud").val();
      var zoom = $("#zoom").val();
      
      if(map == null){       
        initMap();            
      }
      
      verMapa(latitud, longitud, zoom);
      modifiZoom();

    })

    $("#saveMap").click(function(){

      $("#latitud").val(marker.position.lat());
      $("#longitud").val(marker.position.lng());
      $("#zoom").val($("#zoomMap").html());
      $("#modalMapa").modal("hide");

    });





    
/********************************************************************************************
********************************************************************************************
********************************************************************************************
********************************************************************************************/
	// ACCIONES PARA LA VISTA PREVIA

    $("#vistaPrevia").click(function(){
    	if($("#formCrear").valid()){
	      $("#listaImgVistaPrevia").html('');          
	      $("#modalMapaVistaPrevia").modal("show");             
	      $("input[name='imagen[]']").each(function(){

	        //cadenaImagenes = new array();
	        seleccionArchivo(this);  
	      
	      });    		
    	}

    });

    $('#modalMapaVistaPrevia').on('shown.bs.modal', function (e) {
      
      var latitudVP = $("#latitud").val();
      var longitudVP = $("#longitud").val();
      var zoomVP = $("#zoom").val();
      
      if(mapVP == null){        
        initMapVistaPrevia();           
      }
      
      verMapaVistaPrevia(latitudVP, longitudVP, zoomVP);

      $("#tituloVP").html($("#titulo").val());
      $("#descripcionVP").html($("#descripcion").val());
      $("#departamentoVP").html($("#departamento > option[value='"+$("#departamento").val()+"']").html());
      $("#categoriaVP").html($("#categoria > option[value='"+$("#categoria").val()+"']").html());          

    })










/********************************************************************************************
********************************************************************************************
********************************************************************************************
********************************************************************************************/
	//ACCIONES PARA IMAGENES

    $('.btnEliminarImagen').click(function(){
      $(this).parent().parent().remove();
    });
    
    
    $("#addImg").click(function(){
      // var btn = '<input type="file" class="form-control" name="imagen[]" value="" >';
      var btn = '<div class="input-group mb-3"><input type="file" class="form-control" name="imagen[]" value="" ><div class="input-group-append"><button class="btn btn-outline-danger btnEliminarImagen" type="button">X</button></div></div>';
      $("#contentImg").prepend(btn);

      $('.btnEliminarImagen').click(function(){
        $(this).parent().parent().remove();
      });

    });















$("#formCrear").validate({
	rules: {
		titulo: "required",
		descripcion: {
			required: true,
			minlength: 2
		},
		latitud: {
			required: true,
			minlength: 5,
			latCoord: true
		},
		longitud: {
			required: true,
			minlength: 5,
			longCoord: true
		},
		zoom: {
			required: true,
      		range: [6, 22]
		},
		departamento: "required",
		categoria: "required"
	}
});

    
});













