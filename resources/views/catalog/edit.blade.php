@extends('layouts.app')

@section('content')
  <div class="container">
    <form class="form-horizontal"  action="{{route('catalog.edit', [$pelicula['id']])}}" method="post">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="row">
        <div class="col-md-6 offset-md-1">

          <div class="card-header">Editar Película</div>
          <div class="card">

            <div class="form-group">
              <div class="input">
                <label for="title" class="col-md-4 control-label">Título</label>
                <input type="text" name="title" id="movie-title" value="{{old('title', $pelicula['title'])}}" required>
              </div>
            </div>

            <div class="form-group">
              <div class="input">
                <label for="year" class="col-md-4 control-label">Año</label>
                <input type="text" name="year" id="movie-year" value="{{old('year', $pelicula['year'])}}" required>
              </div>
            </div>

            <div class="form-group">
              <div class="input">
                <label for="director" class="col-md-4 control-label">Director</label>
                <input type="text" name="director" id="movie-director" value="{{old('director', $pelicula['director'])}}" required>
              </div>
            </div>

            <div class="form-group">
              <div class="input">
                <label for="poster" class="col-md-4 control-label">Poster</label>
                <input type="text" name="poster" id="movie-poster" value="{{old('poster', $pelicula['poster'])}}" required>
              </div>
            </div>

            <div class="form-group">
              <div class="input">
                <label for="synopsis" class="col-md-4 control-label" style="vertical-align: top;">Resumen</label>
                <textarea name="synopsis" id="movie-synopsis" rows="8" cols="40">{{old('synopsis', $pelicula['synopsis'])}}</textarea>
              </div>
            </div>

          </div>
        </div>

        <div class="col-md-3 offset-md-1">
          <button class="btn btn-primary" type="submit">Editar</button>
          <a href="{{ url('/catalog/show/'.$pelicula['id']) }}" class="btn btn-light"><i class="fas fa-angle-left"></i>Volver a película</a>
        </div>

      </div>
    </form>
  </div>
@endsection
