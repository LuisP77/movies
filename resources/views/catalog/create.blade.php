@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-1">
        <div class="card-header">Agregar Película</div>
          <div class="card">
            <form class="form-horizontal" method="post">
              {{ csrf_field() }}

              <div class="form-group">
                <div class="input">
                  <label for="title" class="col-md-4 control-label">Título</label>
                  <input type="text" name="title" id="movie-title" value="{{old('title')}}" required>
                </div>
              </div>

              <div class="form-group">
                <div class="input">
                  <label for="year" class="col-md-4 control-label">Año</label>
                  <input type="text" name="year" id="movie-year" value="{{old('year')}}" required>
                </div>
              </div>

              <div class="form-group">
                <div class="input">
                  <label for="director" class="col-md-4 control-label">Director</label>
                  <input type="text" name="director" id="movie-director" value="{{old('director')}}" required>
                </div>
              </div>

              <div class="form-group">
                <div class="input">
                  <label for="poster" class="col-md-4 control-label">Poster</label>
                  <input type="text" name="poster" id="movie-poster" value="{{old('poster')}}" required>
                </div>
              </div>

              <div class="form-group">
                <div class="input">
                  <label for="synopsis" class="col-md-4 control-label" style="vertical-align: top;">Resumen</label>
                  <textarea name="synopsis" id="movie-synopsis" rows="8" cols="40">{{old('synopsis')}}</textarea>
                </div>
              </div>

            </form>

          </div>
        </div>

        <div class="col-md-3 offset-md-1">
          <button class="btn btn-primary" type="submit">Agregar</button>
          <a href="{{ url('/catalog') }}" class="btn btn-light"><i class="fas fa-angle-left"></i>Volver al listado</a>
        </div>

      </div>
    </div>
  </div>
@endsection
