@extends('layout')
    
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

   
    <div class="container p4">
        <h4>Preguntas</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
   
                                <tr>
                                    <th>id</th>
                                    <th>pregunta</th>
                                    <th>email</th>
                                    <th><a href="{{route('crearpre')}}"> crear</a></th>  
                                </tr>
                                @foreach ($admin as $ad)
                                @csrf
                                <tr>
                                <td>{{ $ad ->id }}</td>
                                <td>{{ $ad ->pregunta }}</td>
                                <td>{{ $ad ->email}}</td>
                                <td><a href="{{url('/db/preguntas/'.$ad->id.'/edit')}}">editar</a></td>
                                <td><form action="{{ url('/db/preguntas/'.$ad->id) }}" method="GET">
                                <button type="submit" onclick="return confirm('¿borrar?');" class="btn btn-danger">eliminar</button></td>
                                </tr>
                            </form>

                            @endforeach
                        </table>
                        </table>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>



 

    

 


    <div class="container p4">
        <h4>Pc</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
   
                                <tr>
                                    <th>id</th>
                                    <th>nombre</th>
                                    <th>descripcion</th>
                                    <th>precio</th>
                                    <th>img</th>
                                    <th><a href="{{route('crearpc')}}"> crear</a></th>  
                                </tr>
                                @foreach ($pc as $pc)
                                @csrf
                                <tr>
                                <td>{{ $pc ->id }}</td>
                                <td>{{ $pc ->nombre }}</td>
                                <td>{{ $pc ->descripcion}}</td>
                                <td>{{ $pc ->precio }}</td>
                                <td>{{ $pc ->img}}</td>
                                <td><a href="{{url('/db/pc/'.$pc->id.'/edit')}}">editar</a></td>
                                <td><form action="{{ url('/db/pc/'.$pc->id) }}" method="GET">
                                <button type="submit" onclick="return confirm('¿borrar?');" class="btn btn-danger">eliminar</button></td>
                                </tr>
                            </form>

                            @endforeach
                        </table>
                        </table>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container p4">
        <h4>XBOX</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
   
                                <tr>
                                    <th>id</th>
                                    <th>nombre</th>
                                    <th>descripcion</th>
                                    <th>precio</th>
                                    <th>img</th>
                                    <th><a href="{{route('crearxbox')}}"> crear</a></th>  
                                </tr>
                                @foreach ($xbox as $xbox)
                                @csrf
                                <tr>
                                <td>{{ $xbox ->id }}</td>
                                <td>{{ $xbox ->nombre }}</td>
                                <td>{{ $xbox ->descripcion}}</td>
                                <td>{{ $xbox ->precio }}</td>
                                <td>{{ $xbox ->img}}</td>
                                <td><a href="{{url('/db/xbox/'.$xbox->id.'/edit')}}">editar</a></td>
                                <td><form action="{{ url('/db/xbox/'.$xbox->id) }}" method="GET">
                                <button type="submit" onclick="return confirm('¿borrar?');" class="btn btn-danger">eliminar</button></td>
                                </tr>
                            </form>

                            @endforeach
                        </table>
                        </table>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container p4">
        <h4>Play Station</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
   
                                <tr>
                                    <th>id</th>
                                    <th>nombre</th>
                                    <th>descripcion</th>
                                    <th>precio</th>
                                    <th>img</th>
                                    <th><a href="{{route('crearplay')}}"> crear</a></th>  
                                </tr>
                                @foreach ($play as $play)
                                @csrf
                                <tr>
                                <td>{{ $play ->id }}</td>
                                <td>{{ $play ->nombre }}</td>
                                <td>{{ $play ->descripcion}}</td>
                                <td>{{ $play ->precio }}</td>
                                <td>{{ $play ->img}}</td>
                                <td><a href="{{url('/db/play/'.$play->id.'/edit')}}">editar</a></td>
                                <td><form action="{{ url('/db/play/'.$play->id) }}" method="GET">
                                <button type="submit" onclick="return confirm('¿borrar?');" class="btn btn-danger">eliminar</button></td>
                                </tr>
                            </form>

                            @endforeach
                        </table>
                        </table>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container p4">
        <h4>Nintedo</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
   
                                <tr>
                                    <th>id</th>
                                    <th>nombre</th>
                                    <th>descripcion</th>
                                    <th>precio</th>
                                    <th>img</th>
                                    <th><a href="{{route('crearnin')}}"> crear</a></th>  
                                </tr>
                                @foreach ($nintendo as $nin)
                                @csrf
                                <tr>
                                <td>{{ $nin ->id }}</td>
                                <td>{{ $nin ->nombre }}</td>
                                <td>{{ $nin ->descripcion}}</td>
                                <td>{{ $nin ->precio }}</td>
                                <td>{{ $nin ->img}}</td>
                                <td><a href="{{url('/db/nindtendo/'.$nin->id.'/edit')}}">editar</a></td>
                                <td><form action="{{ url('/db/nintendo/'.$nin->id) }}" method="GET">
                                <button type="submit" onclick="return confirm('¿borrar?');" class="btn btn-danger">eliminar</button></td>
                                </tr>
                            </form>

                            @endforeach
                        </table>
                        </table>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>




      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


@endsection