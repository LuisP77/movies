@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="padding:10px;">
        <a href="{{ url('/catalog/create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Agregar película</a>
      </div>
    </div>
    <div class="row">
      @foreach( $arrayPeliculas as $key=>$pelicula )
        <div class="col-xs-6 col-sm-4 col-md-3 text-center">
          <a href="{{ url('/catalog/show/' . $pelicula['id']) }}">
            <img src="{{ $pelicula['poster'] }}" style="height: 200px;"/>
            <h4 style="min-height:45px; margin: 5px 0 10px 0">
              {{ $pelicula['title'] }}
            </h4>
          </a>
        </div>
      @endforeach
    </div>
  </div>
@endsection
