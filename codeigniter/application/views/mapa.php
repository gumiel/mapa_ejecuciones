<!doctype html>
<html lang="en">
  <?php 
  $this->load->view('template/header');
  ?>
  <style>
     #mapaGMaps {
      height: 300px;
      width: 100%;
     }
     #mapVP {
      height: 300px;
      width: 100%;
     }
  </style>
  <body style="background:#51a75c">
 
    <?php $this->load->view('template/menu'); ?>
    
    <div class="container" style="margin-top:10px">
      <div class="row">
        <div class="col-md-12">
          <div>
            <h3 style="display:inline">Mapa de proyectos concluidos</h3>
            <span class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Seleccione Por:
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Todos</a>
                <a class="dropdown-item" href="#">Caminos</a>
                <a class="dropdown-item" href="#">Escuelas</a>
              </div>
            </span>
          </div>
          <br>
          <div class="card">
            <div class="card-body">
              <div id="map">MAPA</div>
            </div>
          </div>
        </div>
        
        
      </div>
      

    </div><!-- /.container -->











    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" ></script>
    <script src="<?php echo base_url(); ?>public/js/summernote-bs4.js"></script>
    <script src="<?php echo base_url(); ?>public/lang/summernote-es-ES.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMn_-6DY-Yj1dxANofEJlcDDvOpNoxvFk"  ></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/piexif.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>public/js/plugins/sortable.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>public/js/plugins/purify.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

<!-- the main fileinput plugin file -->
<script src="<?php echo base_url(); ?>public/js/fileinput.min.js"></script>
<!-- optionally uncomment line below for loading your theme assets for a theme like Font Awesome (`fa`) -->
<!-- script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/themes/fa/theme.min.js"></script -->
<!-- optionally if you need translation for your language then include  locale file as mentioned below -->
<script src="<?php echo base_url(); ?>public/js/locales/LANG.js"></script>
    <script >

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

      $(document).ready(function(){

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

        $("#titulo").fileinput();

        $('#descripcion').summernote({          
          tabsize: 2,
          height: 300,
          lang: 'es-ES' // default: 'en-US'
        });

        $("#btnVerMapa").click(function(){
          $("#modalMapa").modal("show");          
        });

        $("#vistaPrevia").click(function(){
          
          $("#listaImgVistaPrevia").html('');          
          $("#modalMapaVistaPrevia").modal("show");             
          $("input[name='imagen[]']").each(function(){

            //cadenaImagenes = new array();
            seleccionArchivo(this);  
          
          });

          console.log("AQUI ESSSSSSS"+cadenaImagenes);



        });

        $('#modalMapaVistaPrevia').on('shown.bs.modal', function (e) {
          
          var latitudVP = $("#latitud").val();
          var longitudVP = $("#longitud").val();
          var zoomVP = $("#zoom").val();
          
          if(mapVP == null){
            console.log("creado nuevo");
            initMapVistaPrevia();           
          }
          
          verMapaVistaPrevia(latitudVP, longitudVP, zoomVP);

          $("#tituloVP").html($("#titulo").val());
          $("#descripcionVP").html($("#descripcion").html());
          $("#departamentoVP").html($("#departamento > option[value='"+$("#departamento").val()+"']").html());
          $("#categoriaVP").html($("#categoria > option[value='"+$("#categoria").val()+"']").html());          

        })


        $('#modalMapa').on('shown.bs.modal', function (e) {
          var latitud = $("#latitud").val();
          var longitud = $("#longitud").val();
          
          if(map == null){
            console.log("creado nuevo");
            initMap();            
          }
          
          verMapa(latitud, longitud);
          modifiZoom();

        })

        $("#saveMap").click(function(){

          $("#latitud").val(marker.position.lat());
          $("#longitud").val(marker.position.lng());
          $("#zoom").val($("#zoomMap").html());
          $("#modalMapa").modal("hide");

        });
        
      });

      function initMap(){
        
        map = new google.maps.Map(document.getElementById('mapaGMaps'), {
          center: myLatLngDefault,
          zoom: 6
        });
      
      }


      function verMapa(latitud, longitud){
        
        if ( latitud != "" &&  longitud != "") {

          console.log("con datos");
          
          if(marker != null){
            console.log("matar marcador");
            marker.setMap(null);  
            infowindow.setMap(null);  
          }
          
          var myLatLngMaker = {lat: parseFloat(latitud), lng: parseFloat(longitud)};
          console.log(myLatLngMaker);
          map.setCenter(myLatLngMaker);
          map.setZoom(14);
          
          marker = new google.maps.Marker({
            map: map,
            position: myLatLngMaker,
            draggable: true,
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
          
          

          // google.maps.event.addListener(marker, 'dragend', function(){

          //   var markerLatLng = marker.getPosition();
          //   myLatLng = {lat: markerLatLng.lat(), lng: markerLatLng.lng()};
          //   infowindow.setContent([
          //       '<strong>La posicion del marcador es:</strong><br/>',
          //       markerLatLng.lat(),
          //       ', ',
          //       markerLatLng.lng(),
          //       '<br/>Arrástrame para actualizar la posición.'
          //   ].join(''));
          //   infowindow.open(map, marker);
          // });

          google.maps.event.addListener(map, 'click', function(event) {
            addMarkerClick(event.latLng, map);
          });
          
        }else{
          console.log("sin datos");
          marker.setMap(null);
          map.setCenter(myLatLngDefault);
          map.setZoom(6);
          

          
        }        
      }

      function addMarkerClick(location, map) {
        
        marker.setMap(null);
        marker = new google.maps.Marker({
          position: location,
          map: map
        });
        var markerLatLng = marker.getPosition();
        infowindow.setContent([
            '<strong>La posicion del marcador es:</strong><br/>',
            markerLatLng.lat(),
            ', ',
            markerLatLng.lng(),
            '<br/>Arrástrame para actualizar la posición.'
        ].join(''));
        infowindow.open(map, marker);

      }

      function modifiZoom(){

        var zoom = map.getZoom();
        $("#zoomMap").html(zoom);

        map.addListener('zoom_changed', function() {
          $("#zoomMap").html(map.getZoom());
        });

      }

      function initMapVistaPrevia(){
        console.log("VISTA PREVIA MAPA");
        mapVP = new google.maps.Map(document.getElementById('mapVP'), {
          center: myLatLngDefaultVP,
          zoom: 6
        });
      
      }

      function verMapaVistaPrevia(latitudVP, longitudVP, zoomVP){
        if ( latitudVP != "" &&  longitudVP != "") {

          console.log("con datos");
          
          if(markerVP != null){
            console.log("matar marcador");
            markerVP.setMap(null);  
            infowindowVP.setMap(null);  
          }
          
          var myLatLngMakerVP = {lat: parseFloat(latitudVP), lng: parseFloat(longitudVP)};
          console.log(myLatLngMakerVP);
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
          console.log("sin datos");
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

      
      
    </script>
    
  </body>
</html>