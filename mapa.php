<!doctype html>
<html lang="en">
  <head>
    <title>Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body style="background:#51a75c">
    
    <?php
    require("tmpl/menu.php");
    ?>
    
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
    <script src="assets/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMn_-6DY-Yj1dxANofEJlcDDvOpNoxvFk"  ></script>
    <script >
      $(document).ready(function(){
        initMap();
        function initMap(){
          
          var myLatLng = {lat: -16.833564, lng: -65.348245};-17.393308, -66.184276
          var map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 6
          });
          /*--------------------------------------------------------*/
          /*--------------------------------------------------------*/
          /*--------------------------------------------------------*/
          /*--------------------------------------------------------*/
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
           
          
          var marker = new google.maps.Marker({
            map: map,
            position: myLatLng,
            animation: google.maps.Animation.DROP,
            title: 'Doble via La Paz - Oruro'
          });
          marker.addListener('mouseover', function() {
            infowindow.open(map, marker);
          });
          marker.addListener('mouseout', function() {
            infowindow.close();
          });
          
          /*--------------------------------------------------------*/
          /*--------------------------------------------------------*/
          /*--------------------------------------------------------*/
          /*--------------------------------------------------------*/
          
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
           
          
          var marker1 = new google.maps.Marker({
            map: map,
            position: {lat: -17.393308, lng: -66.184276},
            animation: google.maps.Animation.DROP,
            title: 'Doble via La Paz - Oruro'
          });
          marker1.addListener('mouseover', function() {
            infowindow.open(map, marker1);
          });
          marker1.addListener('mouseout', function() {
            infowindow.close();
          });
          
          /*--------------------------------------------------------*/
          /*--------------------------------------------------------*/
          /*--------------------------------------------------------*/
          /*--------------------------------------------------------*/
          
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
           
          
          var marker2 = new google.maps.Marker({
            map: map,
            position: {lat: -16.518448, lng: -68.150056},
            animation: google.maps.Animation.DROP,
            title: 'Doble via La Paz - Oruro'
          });
          marker2.addListener('mouseover', function() {
            infowindow.open(map, marker2);
          });
          marker2.addListener('mouseout', function() {
            infowindow.close();
          });
        }
        
      })
    </script>
    
  </body>
</html>