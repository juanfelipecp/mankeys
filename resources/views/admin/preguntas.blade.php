@extends('layout')
    
@section('content')

      <form action="{{ route('store') }}">
        <div class="form-group">
          <label for="exampleInputEmail1">Email </label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">pregunta</label>
          <input type="text" class="form-control" id="pregunta"  name="pregunta">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection