<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Page;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['users'] = User::count();
        $data['posts'] = Post::count();
        return view('dashboard.index')->with($data);
    }

    public function logout()
    {
        admin_guard()->logout();
        session()->flash('status', 'You have been logged out successfully!');
        return redirect(route('dashboard.login'));
    } // end of logout method
}
