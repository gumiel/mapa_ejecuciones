<!doctype html>
<html lang="en">
  <?php 
  $this->load->view('template/header');
  ?>
  <body style="background:#51a75c">
 
    <?php $this->load->view('template/menu'); ?>
    <style type="text/css">
      .rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin: 0;
  }

.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
  }

.rslides li:first-child {
  position: relative;
  display: block;
  float: left;
  }

.rslides img {
  display: block;
  height: auto;
  float: left;
  width: 100%;
  border: 0;
  }
    </style>
    <div class="container" style="margin-top:10px">
      <div class="row">
        <div class="col-md-12">
          <ul id="slides" class='rslides'>
            <li><img src="<?php echo base_url()."imagenes_proyecto/" ?>1.jpg" alt=""></li>
            <li><img src="<?php echo base_url()."imagenes_proyecto/" ?>2.jpg" alt=""></li>
            <li><img src="<?php echo base_url()."imagenes_proyecto/" ?>3.jpg" alt=""></li>
          </ul>
        </div>
      </div>  
      <div class="row">

        <?php foreach ($proyectos as $proyecto): ?>
          
          <div class="col-md-4">
            <h3 class="text-center mb-5"><?php echo $proyecto['nombre_departamento'] ?></h3>
            <div class="card card-01">
              <img class="card-img-top" src="<?php echo base_url()."imagenes_proyecto/thumbs/".$proyecto['nombre_imagen_min'] ?>" max-width="370" max-height='240' >
              <div class="card-body">
                <span class="badge-box"><i class="fa fa-check"></i></span>
                <h4 class="card-title"><?php echo $proyecto['titulo'] ?></h4>
                <p class="card-text">
                  <?php echo cortadorCadena200($proyecto['descripcion']); ?>                
                </p>
                <a href="#" class="btn btn-default text-uppercase">Ver</a>
              </div>
            </div>
          </div>

        <?php endforeach ?>
        
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
<?php 
  $this->load->view('template/js'); 
?>
  
    <script src="<?php echo base_url(); ?>public/js/responsiveslides.min.js" ></script>
    
    <script >
      $(document).ready(function(){
        
        
        $(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: false,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  prevText: "Previous",   // String: Text for the "previous" button
  nextText: "Next",       // String: Text for the "next" button
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "rslides",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});
        
        
        
      })
    </script>
    
  </body>
</html>