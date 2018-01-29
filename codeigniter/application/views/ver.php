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
      <h3 style="display:inline"><?php echo $proyecto->titulo; ?></h3>
      <div class="row">
        
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <div id="map">MAPA</div>
            </div>
          </div>
          <br>
          <div class="card">
            <div class="card-body" id="listaImgVistaPrevia">
              
              <?php foreach ($imagenes as $imagen ): ?>
                <img class="rounded" style="width: 168px; height: 150px;" src="<?php echo base_url()."imagenes_proyecto/thumbs/".$imagen['nombre_imagen_min']; ?>" >                
              <?php endforeach ?>
           
            </div>
          </div>
            
        </div>
          
        <div class="col-md-4">
            
          <div class="card">
            <div class="card-header">
              <b><?php echo $proyecto->titulo; ?></b>
            </div>
            <div class="card-body">
              <h4 class="card-title" id="tituloVP"></h4>
              <p>
                <u>Dep:</u> 
                <span class="badge badge-secondary" id="departamentoVP">
                  <?php echo $proyecto->nombre_departamento; ?>  
                </span>
                <br>
                <u>Categorias:</u> 
                <span class="badge badge-primary" id="categoriaVP">
                  <?php echo $proyecto->nombre_categoria; ?>
                </span> 
              </p>
              <p class="card-text" id="descripcionVP">
                <?php echo $proyecto->descripcion; ?>
              </p>                    
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
    <script src="<?php echo base_url(); ?>public/app/ver.js" type="text/javascript"></script>

    <script >

      var myLatLngDefault = {lat: -16.833564, lng: -65.348245};
      var myLatLng = null;
      var map = null;
      var marker = null;
      var infowindow = null;

      var punto = 
      { marcadorTexto: '<?php echo $proyecto->titulo ?>',        
      nombreDepartamento: '<?php echo $proyecto->nombre_departamento ?>', 
      nombreCategoria: '<?php echo $proyecto->nombre_categoria ?>', 
      zoom: '<?php echo $proyecto->zoom ?>',
      posicion: { latitud: <?php echo $proyecto->latitud ?>, longitud: <?php echo $proyecto->longitud ?> } }


      

           
      
    </script>
    
  </body>
</html>