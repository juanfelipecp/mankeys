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
            <a class="nav-link " href="{{ route('preguntasp') }}" tabindex="-1" >preguntas</a>
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
            <img src="https://i.blogs.es/c54c19/300316-quantum-review/2560_3000.jpg" class="d-block w-90" alt="..."width="2000px" height="700px">
            <div class="carousel-caption d-none d-md-block">
              <h5>QuantumBreak</h5>
              <p>una aventura de accion con poderes del tiempo</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="center">
            <img src="https://store-images.s-microsoft.com/image/apps.63952.70893698145596502.e6730d59-d897-4b7b-9ba0-0182f3b9884a.b5a9cba9-aaca-428e-9f4d-d92250870d1b?mode=scale&q=90&h=1080&w=1920&background=%23FFFFFF" class="d-block w-90" alt="..." width="2000px" height="700px" >
          </div>
            <div class="carousel-caption d-none d-md-block">
              <h5>halo 5</h5>
              <p>popo</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://edbatista.typepad.com/mankeybusiness/images/2005/05-02-13-03.jpg" class="d-block w-90" alt="..." width="2000px" height="700px">
            <div class="carousel-caption d-none d-md-block">
              <h5>frank </h5>
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

      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>