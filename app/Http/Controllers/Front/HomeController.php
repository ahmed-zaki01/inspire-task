<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::take(6)->orderBy('created_at', 'desc')->get();
        return view('front.index', compact('posts'));
    }
}
