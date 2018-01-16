<!doctype html>
<html lang="en">
  <?php 
  $this->load->view('template/header');
  ?>
  <style>
     #mapaGMaps {
      height: 300px;
      width: 100%;
     }
     #mapVP {
      height: 300px;
      width: 100%;
     }
  </style>
  <body style="background:#51a75c">
 
    <?php $this->load->view('template/menu'); ?>
    
    <div class="container" style="margin-top:10px;background: white">
      
      <div class="row">
        <div class="col-md-12">
          <?php echo form_open_multipart('proyecto/procesarCreacion'); ?>
            <div class="form-group row">
              <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
              <div class="col-sm-10">                
                <?php echo form_input(array("class"=>"form-control", "id"=>"titulo",  "name"=>"titulo","value"=>"Planta de cítricos Lacteosbol" )); ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
              <div class="col-sm-10">
                <?php echo form_textarea(array("type"=>"textarea", "class"=>"form-control", "id"=>"descripcion", "value"=>"", "name"=>"descripcion" )); ?>

              </div>
            </div>   
            <div class="form-group row">
              <label for="latitud" class="col-sm-2 col-form-label">Latitud</label>
              <div class="col-sm-8">
                <?php echo form_input(array("class"=>"form-control","name"=>"latitud", "id"=>"latitud", "value"=>"-17.393308")); ?>
              </div>
              <div class="col-sm-2">                
                <?php echo form_input(array("class"=>"form-control", "name"=>"zoom", "id"=>"zoom", "value"=>"", "name"=>"zoom" )); ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="longitud" class="col-sm-2 col-form-label">Longitud</label>
              <div class="col-sm-8">              
                <?php echo form_input(array("class"=>"form-control","name"=>"longitud", "id"=>"longitud", "value"=>"-66.184276")); ?>              
              </div>
              <div class="col-sm-2">
                <button type="button" class="btn btn-success" id="btnVerMapa">Ver Mapa</button>
              </div>
            </div>
            <div class="form-group row">
              <label for="departamento" class="col-sm-2 col-form-label">Departamento</label>
              <div class="col-sm-10">
                <?php echo form_dropdown('departamento', $selectDepartamento, "", $selectDepartamentoOpt); ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="categoria " class="col-sm-2 col-form-label">Categoria</label>
              <div class="col-sm-10">
                <?php echo form_dropdown('categoria', $selectCategoria, "", $selectCategoriaOpt); ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="titulo" class="col-sm-2 col-form-label">Imagenes</label>
              <div class="col-sm-10" id="contentImg">
                <div class="input-group mb-3">
                  <?php echo form_input(array("type"=>"file", "class"=>"form-control","name"=>"imagen[]", "value"=>"")); ?> 
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger btnEliminarImagen" type="button">X</button>
                  </div>
                </div>           
              </div>
            </div>
            <div class="form-group row">
              <label for="titulo" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10 text-right">
                <button type='button' id="addImg" class="btn btn-warning">Agregar Imagen</button>
              </div>
            </div>
            <div class="form-group row">
              <label for="titulo" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <button type='button' id="vistaPrevia" class="btn btn-primary">Vista Previa</button>
                <button type='submit' id="publicar" class="btn btn-success">Publicar</button>
              </div>
            </div>
          <?php echo form_close(); ?>
        </div>
      </div>      

    </div><!-- /.container -->




    <!-- Modal -->
    <div class="modal fade" id="modalMapa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mapa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="mapaGMaps">
              
            </div>
          </div>
          <div class="modal-footer">
            Zoom: <b><span class="badge badge-warning" id="zoomMap">0</span></b>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="saveMap" >Guardar Cambio</button>
          </div>
        </div>
      </div>
    </div>







    <!-- Modal -->
    <div class="modal fade" id="modalMapaVistaPrevia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document" style="max-width: 1140px;">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Vista Previa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-body">
                    <div id="mapVP">MAPA</div>

                  </div>
                </div>
                
                <div class="card">
                  <div class="card-body" id="listaImgVistaPrevia">
                  </div>
                </div>
                
              </div>
              
              <div class="col-md-4">
                
                <div class="card">
                  <div class="card-header">
                    Industrias
                  </div>
                  <div class="card-body">
                    <h4 class="card-title" id="tituloVP"></h4>
                    <p>
                      <u>Dep:</u> <span class="badge badge-secondary" id="departamentoVP"></span>
                      <br>
                      <u>Categorias:</u> <span class="badge badge-primary" id="categoriaVP"></span> 
                    </p>
                    <p class="card-text" id="descripcionVP"></p>
                    <a href="#" class="btn btn-primary">Ver mas...</a>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="modal-footer">            
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>            
          </div>
        </div>
      </div>
    </div>



<?php 
  $this->load->view('template/js'); 
?>

    <!-- Optional JavaScript -->
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMn_-6DY-Yj1dxANofEJlcDDvOpNoxvFk"  ></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/piexif.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>public/js/plugins/sortable.min.js" type="text/javascript"></script>
  
    <script src="<?php echo base_url(); ?>public/js/plugins/purify.min.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

    <!-- the main fileinput plugin file -->
    <script src="<?php echo base_url(); ?>public/js/fileinput.min.js"></script>

    <script src="<?php echo base_url(); ?>public/js/locales/LANG.js"></script>

    <script src="<?php echo base_url(); ?>public/app/crearProyecto.js" type="text/javascript"></script>
    
    <script >

      


      

      

      

      
      
    </script>
    
  </body>
</html>