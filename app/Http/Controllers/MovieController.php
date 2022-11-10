<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Render the movie view
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('movie.index');
    }
}
