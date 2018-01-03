<!doctype html>
<html lang="en">
  <?php 
  $this->load->view('template/header');
  ?>
  <body style="background:#51a75c">
 
    <?php $this->load->view('template/menu'); ?>
    
    <div class="container" style="margin-top:10px;">
      <div class="row">
        <div class="col-md-12">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
              Proyectos
            </a>
            <?php 
            $contador = 1;
            foreach ($proyectos as $value) {
              $contador++;
              if($contador%2==0){
            ?>
              <a href="#" class="list-group-item disabled">
                <div class="row">
                  <div class="col-md-2">
                      <img class="img-thumbnail" alt="100x100" src="<?php echo base_url(); ?>public/img_proyectos/<?php echo $value['img_miniatura'] ?>" style="width: 100px; height: 100px;">  
                  </div>
                  <div class="col-md-10">
                    <h5><?php echo $value['titulo']; ?></h5>
                    <?php echo cortador200($value['descripcion']);  ?> ... 
                    <button type="button" class="btn btn-default">Leer mas</button>
                  </div>
                </div>
              </a>
            <?php                
              }else{
            ?>
              <a href="#" class="list-group-item disabled">
                <div class="row">
                  <div class="col-md-10">
                    <h5><?php echo $value['titulo']; ?></h5>
                    <?php echo cortador200($value['descripcion']);  ?> ... 
                    <button type="button" class="btn btn-default">Leer mas</button>
                  </div>
                  <div class="col-md-2">
                      <img class="img-thumbnail" alt="100x100" src="<?php echo base_url(); ?>public/img_proyectos/<?php echo $value['img_miniatura'] ?>" style="width: 100px; height: 100px;">  
                  </div>
                </div>
              </a>
            <?php
              }
            ?>
            
            <?php } ?>
            
          </div>
        </div>
        
      </div>
      

    </div><!-- /.container -->

    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMn_-6DY-Yj1dxANofEJlcDDvOpNoxvFk"  ></script>
    <script >
      $(document).ready(function(){
        initMap();
        function initMap(){
          var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h3 id="firstHeading" class="firstHeading">Industrias</h3>'+
            '<div id="bodyContent">'+
            '<p><b>LACTEOS BOL</b> Planta industrializadora de leche</b>, is a large ' +
            '.</p>'+
            '</div>'+
            '</div>';
          var infowindow = new google.maps.InfoWindow({
            content: contentString
          });
           
          var myLatLng = {lat: -16.833564, lng: -65.348245};
          var map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 16
          });
          var marker = new google.maps.Marker({
            map: map,
            position: myLatLng,
            animation: google.maps.Animation.DROP,
            title: 'Doble via La Paz - Oruro'
          });
          marker.addListener('click', function() {
            infowindow.open(map, marker);
          });
          
        }
        
      })
    </script>
    
  </body>
</html>