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
            <img src="https://steamcdn-a.akamaihd.net/steam/apps/847370/header.jpg?t=1572638789" class="d-block w-90" alt="..." width="2000px" height="700px">
            <div class="carousel-caption d-none d-md-block">
              <h5>Sunset overdrive </h5>
              <p>loca aventura corriendo y grindando</p>
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
            @foreach ($xbox as $xbox)
                <p class='col-xs-2 col-md'>
                <div class="card" style="width: 18rem;">
                    <img src="{{ $xbox->img }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $xbox->nombre }}</h5>
                        <p class="card-text">{{ $xbox->descripcion }}</p>
                        <h6 class="card-text">{{ $xbox->precio }}</h6>
                        <a href="#" class="btn btn-primary">compar</a>
                    </div>
                </div>
                </p>
            @endforeach

        </div>
    </div>


@endsection