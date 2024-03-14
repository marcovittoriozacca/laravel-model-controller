<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $MoviesTable = Movie::all();

        $movies = $MoviesTable->toArray();

        return view('home', compact('movies'));
    }
}
