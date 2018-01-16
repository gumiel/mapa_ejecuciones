<!doctype html>
<html lang="en">
  <?php 
  $this->load->view('template/header');
  ?>
  <body style="background:#51a75c">
 
    <?php $this->load->view('template/menu'); ?>
    
    <div class="container" style="margin-top:10px;">
      <div class='row'>
        <div class='col-md-12'><h2>Proyectos</h2></div>
      </div>
      <div class="row" >




            <?php 
            $contador = 1;
            foreach ($proyectos as $proyecto) {

              $contador++;
              if($contador%2==0){
            ?>

                  <div class="col-md-2" style='background-color: white; margin-bottom: 10px'>
                      <img class="img-thumbnail" alt="100x100" src="<?php echo base_url(); ?>public/img_proyectos/<?php echo $proyecto['img_miniatura'] ?>" style="width: 100px; height: 100px;">  
                  </div>
                  <div class="col-md-10" style='background-color: white; margin-bottom: 10px'>
                    <h3 class="text-primary"><?php echo $proyecto['titulo']; ?></h3>
                    <?php echo cortador200($proyecto['descripcion']);  ?> ...                     
                    <a class="btn btn-info btn-sm " href="<?php echo base_url().'proyecto/'.$proyecto['id_proyecto']; ?>" role="button" aria-pressed="true">Leer mas</a>
                  </div>

            <?php                
              }else{
            ?>


                  <div class="col-md-10" style='background-color: white; margin-bottom: 10px'>
                    <h3 class="text-primary"><?php echo $proyecto['titulo']; ?></h3>
                    <?php echo cortador200($proyecto['descripcion']);  ?> ... 
                    <a class="btn btn-info btn-sm" href="<?php echo base_url().'proyecto/'.$proyecto['id_proyecto']; ?>" role="button" aria-pressed="true">Leer mas</a>                    
                  </div>
                  <div class="col-md-2" style='background-color: white; margin-bottom: 10px'>
                      <img class="img-thumbnail" alt="100x100" src="<?php echo base_url(); ?>public/img_proyectos/<?php echo $proyecto['img_miniatura'] ?>" style="width: 100px; height: 100px;">  
                  </div>


            <?php
              }
            ?>
            
            <?php } ?>
            
        
      </div>
      

    </div><!-- /.container -->

    <!-- Optional JavaScript -->
    
  </body>
</html>