<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MovieController extends Controller
{
    // public $movies = [
          
    //     ['id' => 1, 'title' =>'Incontri ravvicinati', 'director' =>'Spielberg', 'img' =>'/media/tiger-jpg.jpg', 'genres' =>'Sci-fi'],
    //     ['id' =>2, 'title' =>'1917', 'director' =>'Mendes', 'img' =>'/media/tiger-jpg.jpg', 'genres' =>'Guerra'],
    //     ['id' =>3, 'title' =>'Quei bravi ragazzi', 'director' =>'Scorsese', 'img' =>'/media/tiger-jpg.jpg', 'genres' =>'Avventura' ],
    //     ['id' =>4, 'title' =>'Tigre', 'director' =>'Gerwig', 'img' =>'/media/tiger-jpg.jpg', 'genres' =>'Animali'],
    //     ['id' =>5, 'title' =>'Leone', 'director' =>'Salerno', 'img' =>'/media/tiger-jpg.jpg', 'genres' =>'Territorio'],

    // ];

    public function movieList(){

    $movies = Movie::all();    
    return view('movie.movies', ['movies' => $movies]);
    }


    // public function movieDetail($id){
      
    //     foreach($this->movies as $movie){
    //         if($id == $movie['id']){
    //            return view('movie.movie-detail', ['movie' =>$movie]);
    //         }
    //     }
    
    // }

    public function create(){     
        return view('movie.create');
    }

public function store(MovieRequest $request){
    $movie = Movie::create([
        'title' => $request->title,
        'director' => $request->director,
        'year' => $request->year,
        'plot' => $request->plot,
        'img'  =>$request->file('img')->store('public/images')  
    ]);
    
    
    return redirect()->route('Homepage')->with('successMessage', 'Hai correttamente inserito il tuo film');
}


}




