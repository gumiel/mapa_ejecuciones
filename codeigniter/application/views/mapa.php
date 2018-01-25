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
    <script src="<?php echo base_url(); ?>public/app/mapa.js" type="text/javascript"></script>

    <script >

      var myLatLngDefault = {lat: -16.833564, lng: -65.348245};
      var myLatLng = null;
      var map = null;
      var marker = null;
      var infowindow = null;

      var puntosList = [
<?php forEach($listaPuntos as $punto ){ ?>

      { marcadorTexto: '<?php echo $punto['marcadorTexto'] ?>', 
      tituloUrl: '<?php echo base_url()."proyecto/ver/".$punto['titulo_url'] ?>', 
      nombreDepartamento: '<?php echo $punto['nombre_departamento'] ?>', 
      nombreCategoria: '<?php echo $punto['nombre_categoria'] ?>', 
      posicion: { latitud: <?php echo $punto['latitud'] ?>, longitud: <?php echo $punto['longitud'] ?> } },

<?php } ?>
      ]

           
      
    </script>
    
  </body>
</html>