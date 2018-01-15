<!doctype html>
<html lang="en">
  <?php 
  $this->load->view('template/header');
  ?>
  <style>
     #map {
      height: 500px;
      width: 100%;
     }
  </style>
  <body style="background:#51a75c">
 
    <?php $this->load->view('template/menu'); ?>
    
    <div class="container" style="margin-top:10px">
      <div class="row">
        <h3 style="display:inline">Mapa de proyectos concluidos</h3>
        <div class="col-md-8 text-right">
          Seleccione el departamento:
        </div>
        <div class="col-md-4">
          
            <?php echo form_dropdown('departamento', $selectDepartamento, "", $selectDepartamentoOpt); ?>
          
        </div>
        <div class="col-md-12">
          
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
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMn_-6DY-Yj1dxANofEJlcDDvOpNoxvFk&callback=initMap"  ></script>
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

      var puntosList = [
<?php forEach($listaPuntos as $punto ){ ?>

      { marcadorTexto: '<?php echo $punto['marcadorTexto'] ?>', 
      posicion: { latitud: <?php echo $punto['latitud'] ?>, longitud: <?php echo $punto['longitud'] ?> } },

<?php } ?>
      ]

      initMap(); 

      function initMap(){
        
        map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLngDefault,
          zoom: 6
        });

        

        puntosList.forEach(function(e){
          var marcadorTexto = e.marcadorTexto;
          var latitud = e.posicion.latitud;
          var longitud = e.posicion.longitud;

          var infowindow = new google.maps.InfoWindow({
            content: marcadorTexto
          });

          var marker1 = new google.maps.Marker({
            map: map,
            position: {lat: latitud, lng: longitud},
            animation: google.maps.Animation.DROP,
            title: 'Doble via La Paz - Oruro'
          });
          
          marker1.addListener('mouseover', function() {
            infowindow.open(map, marker1);
          });
          
          marker1.addListener('mouseout', function() {
            infowindow.close();
          });

        });
      
      }     
      
    </script>
    
  </body>
</html>