<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::take(6)->orderBy('id', 'desc')->get();
        return view('front.index', compact('posts'));
    }
}
