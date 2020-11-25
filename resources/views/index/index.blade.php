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
          <img src="https://hipertextual.com/files/2020/03/hipertextual-animal-crossing-new-horizons-2020410955.jpg" class="d-block w-90"
              alt="..." width="2000px" height="700px">
          <div class="carousel-caption d-none d-md-block">
              <h5> Animal Crosing </h5>
              <p>se la envidia de tus amigos con tu isla</p>
          </div>
      </div>
      <div class="carousel-item">
          <div class="center">
              <img src="https://fanatical.imgix.net/product/original/0bdff20f-f63b-4776-8654-02927fd0974b.jpeg?auto=compress,format&w=400&fit=max"
                  class="d-block w-90" alt="..." width="2000px" height="700px">
          </div>
          <div class="carousel-caption d-none d-md-block">
              <h5>Hotline Miami</h5>
              <p>matar</p>
          </div>
      </div>
      <div class="carousel-item">
          <img src="https://steamcdn-a.akamaihd.net/steam/apps/237630/header.jpg?t=1584036507" class="d-block w-90"
              alt="..." width="2000px" height="700px">
          <div class="carousel-caption d-none d-md-block">
              <h5>DuckTales: Remastered </h5>
              <p>un lavado de cara a uno de los mejores juegos de 8 bits</p>
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
      <div class="container">
        <div class='row'>
              @foreach ($pc as $pc)
            <p class='col-xs col-md'>
              
            <div class="card" style="width: 18rem;">
              
                <img src="{{ $pc->img }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $pc->nombre }}</h5>
                    <p class="card-text">{{ $pc->descripcion }}</p>
                    <h6 class="card-text">{{ $pc->precio }}</h6>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            </p>
            @endforeach

    </div>
   
</div>


@endsection

