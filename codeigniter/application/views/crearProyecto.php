<!doctype html>
<html lang="en">
  <?php 
  $this->load->view('template/header');
  ?>
  <body style="background:#51a75c">
 
    <?php $this->load->view('template/menu'); ?>
    
    <div class="container" style="margin-top:10px;background: white">
      
      <div class="row">
        <div class="col-md-12">
          <form>
            <div class="form-group row">
              <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="titulo" value="" >
              </div>
            </div>
            <div class="form-group row">
              <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="descripcion"></textarea>
              </div>
            </div>   
            <div class="form-group row">
              <label for="latitud" class="col-sm-2 col-form-label">Latitud</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="latitud" value="" >
              </div>
            </div>
            <div class="form-group row">
              <label for="longitud" class="col-sm-2 col-form-label">Longitud</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="longitud" value="" >                
              </div>
              <div class="col-sm-2">
                <button type="button" class="btn btn-success" id="btnVerMapa">Ver Mapa</button>
              </div>
            </div>
            <div class="form-group row">
              <label for="departamento" class="col-sm-2 col-form-label">Departamento</label>
              <div class="col-sm-10">
                <select class="form-control" id="departamento"></select>
              </div>
            </div>
            <div class="form-group row">
              <label for="categoria " class="col-sm-2 col-form-label">Categoria</label>
              <div class="col-sm-10">
                <?php echo form_dropdown('categoria', $selectCategoria, "", $selectCategoriaOpt); ?>
              </div>
            </div>
          </form>
        </div>
      </div>      

    </div><!-- /.container -->




    <!-- Modal -->
    <div class="modal fade" id="modalMapa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" ></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMn_-6DY-Yj1dxANofEJlcDDvOpNoxvFk"  ></script>
    <script >
      $(document).ready(function(){


        $("#btnVerMapa").click(function(){
          $("#modalMapa").modal("show");
        });


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