<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function getPage($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('front.custom-page', compact('page'));
    }
}
