<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Render the user view
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('user.index');
    }
}
