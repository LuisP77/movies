<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Session;

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

    public function postCreate(Request $request)
    {
        $input = $request->all();
        $movie = new Movie();
        Movie::create($input);
        Session::flash('status_message','Película añadida.');
        return redirect('catalog');
    }

    public function putEdit(Request $request, $id)
    {
        $movie = Movie::find($id);
        $input = $request->all();

        $movie->title = $request->title;
        $movie->year = $request->year;
        $movie->director = $request->director;
        $movie->poster = $request->poster;
        $movie->synopsis = $request->synopsis;
        $movie->save();

        Session::flash('status_message','Película editado.');
        return redirect('catalog/show/'.$id);

    }

}
