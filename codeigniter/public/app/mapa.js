

function initMap(){
  
  map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLngDefault,
    zoom: 6
  });

  

  puntosList.forEach(function(e){
    var marcadorTexto = e.marcadorTexto;
    var nombreDepartamento = e.nombreDepartamento;
    var nombreCategoria = e.nombreCategoria;
    var latitud = e.posicion.latitud;
    var longitud = e.posicion.longitud;

    var infowindow = new google.maps.InfoWindow({
      content: "<h5>"+marcadorTexto+"</h5><p><u>Dep.</u> <i>"
      +nombreDepartamento+"</i> <br> <u>Categoria.</u> <i>"
      +nombreCategoria+"</i></p>"
    });

    var marker1 = new google.maps.Marker({
      map: map,
      position: {lat: latitud, lng: longitud},
      animation: google.maps.Animation.DROP,
      title: 'Par ingresar se debe hacer click'
    });

    marker1.addListener('click', function() {
      location.href =  e.tituloUrl;
    });
    
    marker1.addListener('mouseover', function() {
      infowindow.open(map, marker1);
    });
    
    marker1.addListener('mouseout', function() {
      infowindow.close();
    });

  });

}