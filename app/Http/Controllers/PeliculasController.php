<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculasController extends Controller
{
    public function index(){
        $peliculas = Pelicula::all();
        return view('peliculas.index', ['peliculas' => $peliculas, ]);
    }

    public function create(){
        return view('peliculas.create');
    }

    public function store(Request $request){
        $pelicula = new Pelicula();
        $pelicula -> titulo = $request->get('titulo');
        $pelicula -> descripcion = $request->get('descripcion');
        $pelicula -> save();

        return redirect('/peliculas');
    }

    public function show ($id){
        $pelicula = Pelicula::find($id);
        
        return view('peliculas.show', ['pelicula'=>$pelicula,]);
    }
}
