<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    public function index(){

        $movies = Movie::all();

        /* dd($movies); */

        return view('welcome', compact('movies'));
    }
}
