<?php

namespace App\Http\Controllers;

use App\Post;
use View;

class PostsController extends Controller {

    public function index() {
        $posts = Post::paginate(5);
        return View::make('posts.index', compact('posts'));
    }

    public function view($region){
        $post = Post::where('region', $region)->firstOrFail();
        return View::make('posts.view', compact('post'));
    }

}