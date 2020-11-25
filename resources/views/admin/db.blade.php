<!doctype html>
<html lang="en">
  <head>
    <title>data base</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

 
    <div>
    <table class="table">
        <thead>
            <tr>
              <th>id</th>
              <th>email</th>
              <th>pregunta</th>
            <th><a href="{{route('crearpre')}}"> crear</a></th>  
            </tr>
        </thead>
        <tbody>
            <tr>
              @foreach ($admin as $ad)
                <td scope="row">{{ $ad->id }}</td>
                <td>{{ $ad->email}}</td>
                <td>{{ $ad->pregunta }}</td>
                <td><a href="{{url('/db/preguntas/'.$ad->id.'/edit')}}">editar</a></td>
                <td><form action="{{ url('/db/preguntas/'.$ad->id) }}" method="GET">
                <button type="submit" onclick="return confirm('¿borrar?');" class="btn btn-danger">eliminar</button></td>
                </tr>
            </form>

            @endforeach
            </tr>
        </tbody>
    </table>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>