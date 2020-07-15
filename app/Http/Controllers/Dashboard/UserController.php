<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('dashboard.users.index', compact('users'));
    } // end of index


    public function create()
    {
        return view('dashboard.users.create');
    } // end of create


    public function store(Request $request)
    {
        $data = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'phone' => ['nullable', 'string', 'regex:/^(01)([0-2]|5)[0-9]{8}$/'],
        ])->validate();


        User::create($data);
        session()->flash('status', 'User has been created successfully!');
        return redirect(route('dashboard.users.index'));
    } // end of store


    public function edit(User $user)
    {
        return view('dashboard.users.edit', compact('user'));
    } // end of edit


    public function update(Request $request, User $user)
    {
        $data = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id, 'id')],
            'phone' => ['nullable', 'string', 'regex:/^(01)([0-2]|5)[0-9]{8}$/'],
        ])->validate();


        $user->update($data);
        session()->flash('status', 'User has been updated successfully!');
        return redirect(route('dashboard.users.index'));
    } // end of update

    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('status', 'User has been deleted successfully!');
        return redirect(route('dashboard.users.index'));
    } // end of destroy
}
