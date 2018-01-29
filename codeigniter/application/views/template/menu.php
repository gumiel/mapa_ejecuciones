<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Proyectos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()."proyecto/"; ?>">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()."proyecto/mapa" ?>">Mapa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Login</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          
          <?php foreach (listCagetoria() as $categoria): ?>
            <a class="dropdown-item" href="<?php echo base_url()."proyecto/categoria/".$categoria['nombre']; ?>"><?php echo $categoria['nombre'] ?></a>            
          <?php endforeach ?>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()."proyecto/crear" ?>">Crear</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>