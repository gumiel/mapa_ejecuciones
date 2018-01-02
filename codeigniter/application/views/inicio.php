<!doctype html>
<html lang="en">
  <?php 
  $this->load->view('template/header');
  ?>
  <body style="background:#51a75c">
 
    <?php $this->load->view('template/menu'); ?>
    
    <div class="container" style="margin-top:10px">
      <div class="row">
        <div class="col-md-4">
          <h3 class="text-center mb-5">Simple Card</h3>
          <div class="card card-01">
            <img class="card-img-top" src="http://www.comunicacion.gob.bo/sites/default/files/styles/370x240/public/media/images/25352134_1045597395582484_1807840721650170897_o.jpg?itok=a-vmoA4n" alt="Card image cap">
            <div class="card-body">
              <span class="badge-box"><i class="fa fa-check"></i></span>
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-default text-uppercase">Ver</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <h3 class="text-center mb-5">Card with Slider</h3>
          <div class="card card-01">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block img-fluid" src="http://www.comunicacion.gob.bo/sites/default/files/styles/370x240/public/media/images/14614195_10154396173873311_269407466_o.jpg?itok=7UlhGHvL" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="http://www.comunicacion.gob.bo/sites/default/files/styles/370x240/public/media/images/0007_27.jpg?itok=Xg7jxgKb" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="http://www.comunicacion.gob.bo/sites/default/files/styles/370x240/public/media/images/16388159_1983320635228801_2425923252189615672_n.jpg?itok=KnNlONXj" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="card-body">
              <span class="badge-box"><i class="fa fa-user-circle-o"></i></span>
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-default text-uppercase">Ver</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <h3 class="text-center mb-5">Simple Card</h3>
          <div class="card card-01">
            <img class="card-img-top" src="http://www.comunicacion.gob.bo/sites/default/files/styles/370x240/public/media/images/25300015_1045574048918152_585304963932619238_o.jpg?itok=tJAnLYsl" alt="Card image cap">
            <div class="card-body">
              <span class="badge-box"><i class="fa fa-check"></i></span>
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-default text-uppercase">Ver</a>
            </div>
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