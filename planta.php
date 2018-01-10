<!doctype html>
<html lang="en">
  <head>
    <title>Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
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
          <br>
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
    <script src="assets/js/bootstrap.min.js" ></script>
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