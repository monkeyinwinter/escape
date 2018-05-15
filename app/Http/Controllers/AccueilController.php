<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function accueil() {

        return view('accueil');
    }
}
