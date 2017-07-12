<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller
{
   
    //
    public function getIndex()
    {
        $movies = Movie::all();
		return view('catalog.index', array('arrayPeliculas'=>$movies));
    }

    public function getShow($id)
    {
        //var_dump($this->arrayPeliculas[$id]);
		$movie =  Movie::findOrFail($id);
        return view('catalog.show', array('pelicula'=>$movie));
    }

    public function getCreate()
    {
        return view('catalog.create');
    }

    public function postCreate(Request $request)
    {
        
        
        $p = new Movie;
        $p->title=$request->input('title');
        $p->year=$request->input('year');
        $p->director=$request->input('director');
        $p->poster=$request->input('poster');
        $p->synopsis=$request->input('synopsis');
   
        $p->save();        

        return redirect('/catalog');
        
    }

    public function getEdit($id)
    {
		$movie = Movie::findOrFail($id);
        return view('catalog.edit', array('pelicula'=>$movie));
    }

    public function putEdit(Request $request)
    {
        $movie =  Movie::findOrFail($request->id);



        $movie->title=$request->input('title');
        $movie->year=$request->input('year');
        $movie->director=$request->input('director');
        $movie->poster=$request->input('poster');
        $movie->synopsis=$request->input('synopsis');

        $movie->save();

        return redirect('/catalog/show/'.$request->id);

    }
}
