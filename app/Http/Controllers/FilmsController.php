<?php

namespace App\Http\Controllers;


use App\Models\Movie;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    public function index(){

        $movies = Movie::all();

        dd($books);

        return view('welcome', compact('movies'));
    }
}
