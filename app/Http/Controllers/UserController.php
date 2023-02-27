<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel as User;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('users.index');
    }
}