<?php

namespace App\Http\Controllers;

use App\France;
use View;

class FranceController extends Controller {

    public function index() {
        $posts = France::paginate(10);
        return View::make('france.franceIndex', compact('posts'));
    }

    public function view($name){
        $post = France::where('name', $name)->firstOrFail();
        return View::make('france.franceView', compact('post'));
    }

}