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
      <h3 style="display:inline">Mapa de proyectos concluidos</h3>
      <div class="row">
        <div class="col-md-8 text-right">
          Seleccione el departamento:
        </div>
        <div class="col-md-4">
            
            <?php echo form_dropdown('departamento', $selectDepartamento, $departamentoUrl, $selectDepartamentoOpt); ?>
          
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








<?php 
  $this->load->view('template/js'); 
?>
    
    <!-- Optional JavaScript -->
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMn_-6DY-Yj1dxANofEJlcDDvOpNoxvFk&callback=initMap"  ></script>
    

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
            title: 'Proyecto'
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