@extends('layout')
    
@section('content')

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://media.playstation.com/is/image/SCEA/marvels-spider-man-marquee-accolades-1-ps4-las-19dec18?$native_xxl_nt$" class="d-block w-90" alt="..."width="2000px" height="700px">
            <div class="carousel-caption d-none d-md-block">
              <h5>Marvel´s spiderman</h5>
              <p>explora nueva york como spiderman </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="center">
            <img src="https://steamcdn-a.akamaihd.net/steam/apps/1190460/header.jpg?t=1598952356" class="d-block w-90" alt="..." width="2000px" height="700px" >
          </div>
            <div class="carousel-caption d-none d-md-block">
              <h5>Death stranding</h5>
              <p>entrega paquetes para volver a unir a toda una nacion</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://laedicionespecial.es/wp-content/uploads/2020/03/Ghost-of-Tsushima-portada-laedicionespecial_1.jpg" class="d-block w-90" alt="..." width="2000px" height="700px">
            <div class="carousel-caption d-none d-md-block">
              <h5>Ghost Of Tsushima</h5>
              <p>Jin Sakai debe abandonar la tradición samurái y construir un nuevo camino, el del Fantasma, para entablar una guerra poco convencional por la libertad</p>
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
            @foreach ($play as $play)
                <p class='col-xs-2 col-md'>
                <div class="card" style="width: 18rem;">
                    <img src="{{ $play->img }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $play->nombre }}</h5>
                        <p class="card-text">{{ $play->descripcion }}</p>
                        <h6 class="card-text">{{ $play->precio }}</h6>
                        <a href="#" class="btn btn-primary">compar</a>
                    </div>
                </div>
                </p>
            @endforeach

        </div>
    </div>
  
@endsection