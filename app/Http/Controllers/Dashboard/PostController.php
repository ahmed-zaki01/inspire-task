<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('dashboard.posts.index', compact('posts'));
    } // end of index


    public function create()
    {
        $users = User::select('id', 'name')->get();
        return view('dashboard.posts.create', compact('users'));
    } // end of create

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'title' => 'required|string|max:50|unique:posts,title',
            'img' => 'nullable|image|mimes:png,jpg,jpeg',
            'short_desc' => 'required|string|max:200',
            'desc' => 'required|string',
        ], [], ['user_id' => 'user', 'img' => 'image', 'short_desc' => 'short description', 'desc' => 'description']);

        if ($request->img) {
            $imgNewName = $data['img']->hashName();
            \Image::make($data['img'])->resize(500, 350)->save(public_path('uploads/posts/' . $imgNewName));
        } else {
            $imgNewName = 'default.png';
        }
        $data['img'] = $imgNewName;

        Post::create($data);
        session()->flash('status', 'Post has been created successfully!');
        return redirect(route('dashboard.posts.index'));
    } // end of store


    public function edit(Post $post)
    {
        $users = User::select('id', 'name')->get();
        return view('dashboard.posts.edit', compact('post', 'users'));
    } // end of edit

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'title' => ['required', 'string', 'max:50', Rule::unique('posts', 'title')->ignore($post->id, 'id')],
            'img' => 'nullable|image|mimes:png,jpg,jpeg',
            'short_desc' => 'required|string|max:200',
            'desc' => 'required|string',
        ], [], ['user_id' => 'user', 'img' => 'image', 'short_desc' => 'short description', 'desc' => 'description']);

        if ($request->img) {
            $imgNewName = $data['img']->hashName();
            \Image::make($data['img'])->resize(500, 350)->save(public_path('uploads/posts/' . $imgNewName));
        } else {
            $imgNewName = 'default.png';
        }
        $data['img'] = $imgNewName;

        $post->update($data);
        session()->flash('status', 'Post has been updated successfully!');
        return redirect(route('dashboard.posts.index'));
    } // end of update

    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash('status', 'Post has been deleted successfully!');
        return redirect(route('dashboard.posts.index'));
    } // end of destroy
}
