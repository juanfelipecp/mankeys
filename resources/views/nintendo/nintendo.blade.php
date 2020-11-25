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

                    
                <img src="https://store.nintendo.co/media/catalog/product/cache/1aff59ff6f21b2058ac5563c018426d7/z/e/zeldalinksawakening-swbanner-v2-1920x1080.jpg"
                    class="d-block w-90" alt="..." width="2000px" height="700px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>The Legend of Zelda: Link’s Awakening</h5>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="center">
                    <img src="https://hipertextual.com/files/2020/03/hipertextual-animal-crossing-new-horizons-2020410955.jpg"
                        class="d-block w-90" alt="..." width="2000px" height="700px">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>animal crossing new horizons</h5>
                    <p>cuida tu isla</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://store.nintendo.co/media/catalog/product/cache/1aff59ff6f21b2058ac5563c018426d7/y/c/ycw-switch-swbanner-v2-1920x1080.jpg" class="d-block w-90"
                    alt="..." width="2000px" height="700px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>yoshi´s crafted world</h5>
                    <p>vive una aventura llena de papel y carton</p>
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
            @foreach ($nintendo as $nintendo)
                <p class='col-xs-2 col-md'>
                <div class="card" style="width: 18rem;">
                    <img src="{{ $nintendo->img }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $nintendo->nombre }}</h5>
                        <p class="card-text">{{ $nintendo->descripcion }}</p>
                        <h6 class="card-text">{{ $nintendo->precio }}</h6>
                        <a href="#" class="btn btn-primary">compar</a>
                    </div>
                </div>
                </p>
            @endforeach

        </div>
    </div>


@endsection