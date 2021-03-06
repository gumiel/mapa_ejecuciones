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
  @import url('https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700');

h2{float:left; width:100%; color:#14594d; margin-bottom:60px; font-size: 14px; position:relartive; z-index:3;}
h2 span{font-family: 'Libre Baskerville', serif; display:block; font-size:45px; text-transform:none; margin-bottom:20px; margin-top:30px; font-weight:700;}
h2 a{color:#fff; font-weight:bold;}

section{float:left;width:100%;padding:30px 0; position:relative; overflow:hidden; background:#6F8D8A;}
section:before{content:"";position:absolute; width:110%; height:100%;  background:url("https://static.pexels.com/photos/247599/pexels-photo-247599.jpeg") no-repeat 0 0; background-size:cover; filter: blur(10px); z-index:0; transform: scale(2);-ms-transform: scale(2); -webkit-transform: scale(2);}
h3{margin-bottom:20px; font-weight:bold; color:#fff; text-shadow:1px 1px 0 rgba(0,0,0,0.2);}
.btn-default{background:#DFC717; color:#fff; font-weight:700; text-shadow:1px 1px 0 rgba(0,0,0,0.2); font-size:14px;}
.card{box-shadow:2px 2px 20px rgba(0,0,0,0.3); border:none; margin-bottom:30px;}
.card-01 .card-body{position:relative; padding-top:40px;}
.card-01 .badge-box{position:absolute; top:-20px; left:50%; width:100px; height:100px;margin-left:-50px; text-align:center;}
.card-01 .badge-box i{background:#DFC717; color:#fff; border-radius:50%;  width:50px; height:50px; line-height:50px; text-align:center; font-size:20px;}
.card-01.height-fix{height:455px; overflow:hidden;}
.card-01.height-fix .card-img-top{width:auto!imporat;}

.profile-box{background-size:cover; float:left; width:100%; text-align:center; padding:30px 0; position:relative; overflow:hidden;}
.profile-box:before{filter: blur(10px);background:url("https://images.pexels.com/photos/195825/pexels-photo-195825.jpeg?h=350&auto=compress&cs=tinysrgb") no-repeat; background-size:cover; width:120%; position:absolute; content:""; height:120%; left:-10%;top:0;z-index:0;}
.profile-box img{width:170px; height:170px; position:relative; border:5px solid #fff;}
.social-box i {border:1px solid #DFC717; color:#DFC717; width:30px; height:30px; border-radius:50%;line-height:30px;}
.social-box i:hover{background:#DFC717; color:#fff;}
.social-box a{margin: 0 5px;}
.video-foreground{float:left;width:100%; height:500px;}

.card-01.height-fix .card-img-overlay{top:unset; color:#fff;
    background: -moz-linear-gradient(top, rgba(26,96,111,0) 0%, rgba(26,96,111,0) 1%, rgba(24,87,104,0.91) 31%, rgba(21,65,89,0.91) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(26,96,111,0) 0%,rgba(26,96,111,0) 1%,rgba(24,87,104,0.91) 31%,rgba(21,65,89,0.91) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(26,96,111,0) 0%,rgba(26,96,111,0) 1%,rgba(24,87,104,0.91) 31%,rgba(21,65,89,0.91) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001a606f', endColorstr='#e8154159',GradientType=0 );
}
.card-01.height-fix .fa{color: #fff;font-size: 22px;margin-right: 18px;};

/*flipper-card*/
.card-flipper {
  position: relative;
  float: left;
  width: 100%;
  text-align: center;
}

.card__front,
.card__back {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.card__back .card{
    width:100%;
    height:65vh;
}

.card__front,
.card__back {
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.3s;
          transition: transform 0.3s;
}

.card__front {
  background-color: #ff5078;
}

.card__back {
  background-color: #1e1e1e;
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
}
.card-flipper.effect__hover{position:relative;}
.card-flipper.effect__hover:hover .card__front {
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
}

.card-flipper.effect__hover:hover .card__back {
  -webkit-transform: rotateY(0);
          transform: rotateY(0);
}

.card-flipper.effect__random.flipped .card__front {
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
}

.card-flipper.effect__random.flipped .card__back {
  -webkit-transform: rotateY(0);
          transform: rotateY(0);
}
</style>
  </head>
  <body style="background:#51a75c">
    
    <?php
    require("tmpl/menu.php");
    ?>
    
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
    <script src="assets/js/bootstrap.min.js" ></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMn_-6DY-Yj1dxANofEJlcDDvOpNoxvFk" ></script>
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