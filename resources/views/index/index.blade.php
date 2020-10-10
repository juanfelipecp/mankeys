<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style type='text/css'>
      .navbar {
      background-color: #e5cea0;
    }
    .navbar .navbar-brand {
      color: #6b6b6b;
    }
    .navbar .navbar-brand:hover,
    .navbar .navbar-brand:focus {
      color: #a2a0a5;
    }
    .navbar .navbar-text {
      color: #6b6b6b;
    }
    .navbar .navbar-text a {
      color: #a2a0a5;
    }
    .navbar .navbar-text a:hover,
    .navbar .navbar-text a:focus {
      color: #a2a0a5; 
    }
    .navbar .navbar-nav .nav-link {
      color: #6b6b6b;
      border-radius: .25rem;
      margin: 0 0.25em;
    }
    .navbar .navbar-nav .nav-link:not(.disabled):hover,
    .navbar .navbar-nav .nav-link:not(.disabled):focus {
      color: #a2a0a5;
    }
    .navbar .navbar-nav .dropdown-menu {
      background-color: #e5cea0;
      border-color: #e7bc82;
    }
    .navbar .navbar-nav .dropdown-menu .dropdown-item {
      color: #6b6b6b;
    }
    .navbar .navbar-nav .dropdown-menu .dropdown-item:hover,
    .navbar .navbar-nav .dropdown-menu .dropdown-item:focus,
    .navbar .navbar-nav .dropdown-menu .dropdown-item.active {
      color: #a2a0a5;
      background-color: #e7bc82;
    }
    .navbar .navbar-nav .dropdown-menu .dropdown-divider {
      border-top-color: #e7bc82;
    }
    .navbar .navbar-nav .nav-item.active .nav-link,
    .navbar .navbar-nav .nav-item.active .nav-link:hover,
    .navbar .navbar-nav .nav-item.active .nav-link:focus,
    .navbar .navbar-nav .nav-item.show .nav-link,
    .navbar .navbar-nav .nav-item.show .nav-link:hover,
    .navbar .navbar-nav .nav-item.show .nav-link:focus {
      color: #a2a0a5;
      background-color: #e7bc82;
    }
    .navbar .navbar-toggle {
      border-color: #e7bc82;
    }
    .navbar .navbar-toggle:hover,
    .navbar .navbar-toggle:focus {
      background-color: #e7bc82;
    }
    .navbar .navbar-toggle .navbar-toggler-icon {
      color: #6b6b6b;
    }
    .navbar .navbar-collapse,
    .navbar .navbar-form {
      border-color: #6b6b6b;
    }
    .navbar .navbar-link {
      color: #6b6b6b;
    }
    .navbar .navbar-link:hover {
      color: #a2a0a5;
    }
    
    @media (max-width: 575px) {
      .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item {
        color: #6b6b6b;
      }
      .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:hover,
      .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:focus {
        color: #a2a0a5;
      }
      .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item.active {
        color: #a2a0a5;
        background-color: #e7bc82;
      }
    }
    
    @media (max-width: 767px) {
      .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item {
        color: #6b6b6b;
      }
      .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:hover,
      .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:focus {
        color: #a2a0a5;
      }
      .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item.active {
        color: #a2a0a5;
        background-color: #e7bc82;
      }
    }
    
    @media (max-width: 991px) {
      .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item {
        color: #6b6b6b;
      }
      .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:hover,
      .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:focus {
        color: #a2a0a5;
      }
      .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item.active {
        color: #a2a0a5;
        background-color: #e7bc82;
      }
    }
    
    @media (max-width: 1199px) {
      .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item {
        color: #6b6b6b;
      }
      .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:hover,
      .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:focus {
        color: #a2a0a5;
      }
      .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item.active {
        color: #a2a0a5;
        background-color: #e7bc82;
      }
    }
    
    .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item {
      color: #6b6b6b;
    }
    .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:hover,
    .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:focus {
      color: #a2a0a5;
    }
    .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item.active {
      color: #a2a0a5;
      background-color: #e7bc82;
    }
    </style>



    <title>Mankeys</title>
  </head>
  <body background="https://images6.alphacoders.com/963/963333.png">
    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="{{ route('indexp') }}">Mankeys <img src="https://mundomuymisterioso.files.wordpress.com/2013/01/056___mankey_by_winter_freak-d32qywq.jpg" alt="" width="50px" height="50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" href="{{ route('pcp') }}">pc <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="{{ route('nintendop') }}">nintendo</a>
            <a class="nav-link" href="{{ route('playp') }}">play station</a>
            <a class="nav-link" href="{{ route('xboxp') }}">xbox</a>
            <a class="nav-link" href="{{ route('preguntasp') }}" >preguntas</a>
          </div>
        </div>
      </nav>
    

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://edbatista.typepad.com/mankeybusiness/images/2005/05-02-13-05.jpg" class="d-block w-90" alt="..." width="2000px" height="700px">
            <div class="carousel-caption d-none d-md-block">
              <h5>dorothy</h5>
              <p>tu operadora de confiansa</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://edbatista.typepad.com/mankeybusiness/images/2005/05-02-13-02.jpg" class="d-block w-90" alt="..." width="2000px" height="700px">
            <div class="carousel-caption d-none d-md-block">
              <h5>frank </h5>
              <p>abogado experto sin escrupulos</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://edbatista.typepad.com/mankeybusiness/images/2005/05-02-13-03.jpg" class="d-block w-90" alt="..." width="2000px" height="700px">
            <div class="carousel-caption d-none d-md-block">
              <h5>ryan </h5>
              <p>un inutil </p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        
      </div>
      <div class="container">
      <div class='row'>
        <p class='col-xs-12 col-md-2'> <h5> </p>
        <p class='col-xs-12 col-md-8'>¿Que es Mankeys?<br>
          Mankeys es tu pagina para comprar keys de todo tipo de consola y plataforma</h5></p>   
        <p class='col-xs-12 col-md-2'> <h5> </p> 
    </div>
    </div>
<br>
  </div>
  <div class="container">
  <div class='row'>
    <p class='col-xs-12 col-md-2'> <h5> </p>
    <p class='col-xs-12 col-md-8'>
      <h5>Ultimas Ofertas</h5>
      <table>
          <tr>
          <td>
            
            <div class="card" style="width: 18rem;">
                <img src="https://img.resized.co/dexerto/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL2ltYWdlcy5kZXhlcnRvLmVzXFxcL3VwbG9hZHNcXFwvMjAyMFxcXC8wOFxcXC8yNjE2MTc0M1xcXC9xdWUtZXMtYW1vbmctdXMtZWwtdWx0aW1vLWp1ZWdvLXF1ZS1zZS1oYS1hcG9kZXJhZG8tZGUtdHdpdGNoLmpwZ1wiLFwid2lkdGhcIjo2MjAsXCJoZWlnaHRcIjozNDcsXCJkZWZhdWx0XCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3BwbHVzLmltYWdlcy5kZXhlcnRvLmNvbVxcXC91cGxvYWRzXFxcLzIwMTlcXFwvMTFcXFwvMTEyMTQ5NDNcXFwvcGxhY2Vob2xkZXIuanBnXCIsXCJvcHRpb25zXCI6W119IiwiaGFzaCI6IjhhZjIxMmI3ZWU4NjA2NjU3OGRiNTQ3Y2IwMDBiM2U0NGVhODk0YzkifQ==/que-es-among-us-el-ultimo-juego-que-se-ha-apoderado-de-twitch.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Among Us</h5>
                  <p class="card-text">¿quien es el impostor?</p>
                  <h6 class="card-text"> ̶3̶.̶0̶0̶ ̶U̶S̶D̶ >1.00USD</h6>
                <a href="#" class="btn btn-primary">ir a la oferta</a>
                </div>
              </div>
              </td>
              <td>
       
                <div class="card" style="width: 18rem;">
                    <img src="https://fanatical.imgix.net/product/original/0bdff20f-f63b-4776-8654-02927fd0974b.jpeg?auto=compress,format&w=400&fit=max" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Hotline Miami</h5>
                      <p class="card-text">Frenetismo,sangre y confusion</p>
                      <h6 class="card-text"> ̶ ̶9̶.̶0̶0̶ ̶U̶S̶D̶>2.50USD</h6>
                    <a href="#" class="btn btn-primary">ir a la oferta</a>
                    </div>
                  </div>
            </td>
            <td>
       
                <div class="card" style="width: 18rem;">
                    <img src="https://steamcdn-a.akamaihd.net/steam/apps/600090/header.jpg?t=1597415805" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">The Coma:Recut</h5>
                      <p class="card-text">Media noche en una escuela y un misterioso preseguidor</p>
                      <h6 class="card-text"> ̶ ̶1.̶0̶0̶ ̶U̶S̶D̶>0.50USD</h6>
                    <a href="#" class="btn btn-primary">ir a la oferta</a>
                    </div>
                  </div>
            </td>
        </tr>
        <tr>
            <td>
            
                <div class="card" style="width: 18rem;">
                    <img src="https://steamcdn-a.akamaihd.net/steam/apps/35140/header.jpg?t=1569358035" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Batman: Arkham Asylum Game of the Year Edition</h5>
                      <p class="card-text">Experimenta lo que es ser Batman y enfréntate a los más grandes villanos de Gotham.</p>
                      <h6 class="card-text">  ̶1̶0̶.̶0̶0̶U̶S̶D̶>2.50USD</h6>
                    <a href="#" class="btn btn-primary">ir a la oferta</a>
                    </div>
                  </div>
                  </td>
                  <td>
           
                    <div class="card" style="width: 18rem;">
                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/237630/header.jpg?t=1584036507" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">DuckTales: Remastered</h5>
                          <p class="card-text">
                            DuckTales: Remastered es una hermosa reinvención hecha a mano de uno de los títulos de 8 bits más apreciados de todos los tiempos.</p>
                          <h6 class="card-text"> ̶1̶0̶.̶0̶0̶U̶S̶D̶>2.50USD</h6>
                        <a href="#" class="btn btn-primary">ir a la oferta</a>
                        </div>
                      </div>
                </td>
                <td>
           
                    <div class="card" style="width: 18rem;">
                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/214490/header.jpg?t=1587920608" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Alien:isolation</h5>
                          <p class="card-text">Descubre el verdadero significado del miedo en Alien: Isolation, un survival horror ambientado en una atmósfera de pavor constante y peligro mortal.</p>
                          <h6 class="card-text"> ̶ ̶1̶9̶.̶6̶9̶U̶S̶D̶>0.52USD</h6>
                        <a href="#" class="btn btn-primary">ir a la oferta</a>
                        </div>
                      </div>
                </td>

        </tr>
      </table>  
    
    
    </p>   
    <p class='col-xs-12 col-md-2'> <h5> </p> 
</div>
</div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>