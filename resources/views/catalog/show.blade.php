@extends('layouts.app')

@section('content')
  @php
    if( $pelicula['rented'] ){
      $estado = 'Película actualmente alquilada';
      $btn_estado_href = '#';
      $btn_estado_class = 'btn btn-danger';
      $btn_estado_message = 'Devolver película';
    }else{
      $estado = 'Película disponible';
      $btn_estado_href = '#';
      $btn_estado_class = 'btn btn-primary';
      $btn_estado_message = 'Alquilar película';
    }
  @endphp

  <div class="container">
    <div class="row">
      <div class="col-sm-4">
          <img src="{{ $pelicula['poster'] }}" style="height: 400px;"/>
      </div>
      <div class="col-sm-8">
          <h2>{{ $pelicula['title'] }}</h2></br>
          <h4>Año: {{ $pelicula['year'] }}</h4></br>
          <h4>Director: {{ $pelicula['director'] }}</h4></br></br>

          <b>Resumen: </b>{{ $pelicula['synopsis'] }}</br></br>

          <b>Estado: </b> {{$estado}}</br></br>
          <a href="{{$btn_estado_href}}" class="{{$btn_estado_class}}">{{$btn_estado_message}}</a>
          <a href="{{ url('/catalog/edit/' . $id) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>Editar película</a>
          <a href="{{ url('/catalog') }}" class="btn btn-light"><i class="fas fa-angle-left"></i>Volver al listado</a>
      </div>
    </div>
  </div>
@endsection
