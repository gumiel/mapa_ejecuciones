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
    
    <div class="container" style="margin-top:10px;background: white">
      
      <div class="row">
        <div class="col-md-12">
          <form>
            <div class="form-group row">
              <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="titulo" value="Planta de cítricos Lacteosbol" >
              </div>
            </div>
            <div class="form-group row">
              <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="descripcion">Blandit praesent luptatum
                    zzril delenit augue duis dolore te feugait nulla facilisi.
                    Nam liber tempor cum soluta nobis eleifend option congue
                    nihil imperdiet doming id quod mazim placerat facer possim
                    assum. Typi non habent claritatem insitam; est usus legentis
                    in iis qui facit eorum claritatem. Investigationes
                    demonstraverunt lectores legere me lius quod ii legunt saepius.
                    Claritas est etiam processus dynamicus, qui sequitur mutationem
                    consuetudium lectorum. Mirum est notare quam littera gothica,
                    quam nunc putamus parum claram, anteposuerit litterarum formas
                    humanitatis per seacula quarta decima et quinta decima. Eodem
                    modo typi, qui nunc nobis videntur parum clari, fiant sollemnes
                    in futurum.</textarea>
              </div>
            </div>   
            <div class="form-group row">
              <label for="latitud" class="col-sm-2 col-form-label">Latitud</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="latitud" value="-17.393308" >
              </div>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="zoom" value="" placeholder ="Zoom">                
              </div>
            </div>
            <div class="form-group row">
              <label for="longitud" class="col-sm-2 col-form-label">Longitud</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="longitud" value="-66.184276" >                
              </div>
              <div class="col-sm-2">
                <button type="button" class="btn btn-success" id="btnVerMapa">Ver Mapa</button>
              </div>
            </div>
            <div class="form-group row">
              <label for="departamento" class="col-sm-2 col-form-label">Departamento</label>
              <div class="col-sm-10">
                <?php echo form_dropdown('departamento', $selectDepartamento, "", $selectDepartamentoOpt); ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="categoria " class="col-sm-2 col-form-label">Categoria</label>
              <div class="col-sm-10">
                <?php echo form_dropdown('categoria', $selectCategoria, "", $selectCategoriaOpt); ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="titulo" class="col-sm-2 col-form-label">Imagenes</label>
              <div class="col-sm-10" id="contentImg">
                <input type="file" class="form-control" id="imagen[]" value="" >              
              </div>
            </div>
            <div class="form-group row">
              <label for="titulo" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10 text-right">
                <button type='button' id="addImg" class="btn btn-warning">Agregar Imagen</button>
              </div>
            </div>
            <div class="form-group row">
              <label for="titulo" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <button type='button' id="vistaPrevia" class="btn btn-primary">Vista Previa</button>
                <button type='button' id="publicar" class="btn btn-success">Publicar</button>
              </div>
            </div>
          </form>
        </div>
      </div>      

    </div><!-- /.container -->




    <!-- Modal -->
    <div class="modal fade" id="modalMapa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mapa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="mapaGMaps">
              
            </div>
          </div>
          <div class="modal-footer">
            Zoom: <b><span class="badge badge-warning" id="zoomMap">0</span></b>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="saveMap" >Guardar Cambio</button>
          </div>
        </div>
      </div>
    </div>







    <!-- Modal -->
    <div class="modal fade" id="modalMapaVistaPrevia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document" style="max-width: 1140px;">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Vista Previa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-body">
                    <div id="mapVP">MAPA</div>

                  </div>
                </div>
                
                <div class="card">
                  <div class="card-body">
                    <img data-src="holder.js/75x75" class="rounded"  style="width: 168px; height: 150px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160e0772ac7%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160e0772ac7%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.34375%22%20y%3D%2242.05625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                    <img data-src="holder.js/75x75" class="rounded"  style="width: 168px; height: 150px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160e0772ac7%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160e0772ac7%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.34375%22%20y%3D%2242.05625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                    <img data-src="holder.js/75x75" class="rounded"  style="width: 168px; height: 150px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160e0772ac7%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160e0772ac7%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.34375%22%20y%3D%2242.05625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                    <img data-src="holder.js/75x75" class="rounded"  style="width: 168px; height: 150px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160e0772ac7%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160e0772ac7%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.34375%22%20y%3D%2242.05625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                  </div>
                </div>
                
              </div>
              
              <div class="col-md-4">
                
                <div class="card">
                  <div class="card-header">
                    Industrias
                  </div>
                  <div class="card-body">
                    <h4 class="card-title" id="tituloVP"></h4>
                    <p>
                      <u>Dep:</u> <span class="badge badge-secondary" id="departamentoVP"></span>
                      <br>
                      <u>Categorias:</u> <span class="badge badge-primary" id="categoriaVP"></span> 
                    </p>
                    <p class="card-text" id="descripcionVP"></p>
                    <a href="#" class="btn btn-primary">Ver mas...</a>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="modal-footer">            
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>            
          </div>
        </div>
      </div>
    </div>



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

      $(document).ready(function(){

        
        
        
        $("#addImg").click(function(){
          var btn = '<input type="file" class="form-control" id="imagen[]" value="" >';
          $("#contentImg").prepend(btn);
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
          $("#modalMapaVistaPrevia").modal("show");          
        });

        $('#modalMapaVistaPrevia').on('shown.bs.modal', function (e) {
          
          var latitudVP = $("#latitud").val();
          var longitudVP = $("#longitud").val();
          
          if(mapVP == null){
            console.log("creado nuevo");
            initMapVistaPrevia();           
          }
          
          verMapaVistaPrevia(latitudVP, longitudVP);

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

      function verMapaVistaPrevia(latitudVP, longitudVP){
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
          mapVP.setZoom(14);
          
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
      
    </script>
    
  </body>
</html>