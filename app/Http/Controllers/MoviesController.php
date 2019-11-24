<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{

    public function getIndex()
    {
        $arrayPeliculas = Movie::all();
        return view( 'catalog.index', ['arrayPeliculas'=>$arrayPeliculas] );
    }

    public function getShow($id)
    {
        $pelicula = Movie::findOrFail($id);
        return view( 'catalog.show', ['id'=>$id, 'pelicula'=>$pelicula]);
    }

    public function getCreate()
    {
        return view( 'catalog.create');
    }

    public function getEdit($id)
    {
      $pelicula = Movie::findOrFail($id);
        return view( 'catalog.edit', ['id'=>$id, 'pelicula'=>$pelicula]);
    }
    
}
