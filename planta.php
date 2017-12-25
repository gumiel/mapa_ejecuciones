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
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <div id="map">MAPA</div>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          
          <div class="card">
            <div class="card-header">
              Industrias
            </div>
            <div class="card-body">
              <h4 class="card-title">Planta de cítricos Lacteosbol</h4>
              <p class="card-text">Blandit praesent luptatum
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
              in futurum.</p>
              <a href="#" class="btn btn-primary">Ver mas...</a>
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