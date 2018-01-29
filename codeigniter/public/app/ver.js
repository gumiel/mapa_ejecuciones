

function initMap(){

  var myLatLngMaker = {lat: parseFloat(punto.posicion.latitud), lng: parseFloat(punto.posicion.longitud)};

    
  
  map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLngMaker,
    zoom: parseInt(punto.zoom)
  });

  

  
    var marcadorTexto = punto.marcadorTexto;
    var nombreDepartamento = punto.nombreDepartamento;
    var nombreCategoria = punto.nombreCategoria;
    var latitud = punto.posicion.latitud;
    var longitud = punto.posicion.longitud;
    var zoom = punto.zoom;

    var infowindow = new google.maps.InfoWindow({
      content: "<h5>"+marcadorTexto+"</h5><p><u>Dep.</u> <i>"
      +nombreDepartamento+"</i> <br> <u>Categoria.</u> <i>"
      +nombreCategoria+"</i></p>"
    });

    var marker1 = new google.maps.Marker({
      map: map,
      position: {lat: latitud, lng: longitud},
      animation: google.maps.Animation.DROP      
    });
    
    infowindow.open(map, marker1);


}