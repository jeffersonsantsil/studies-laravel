<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('users.index', compact('users'));
    }


    public function show($id)
    {
        $user = User::find($id);

        //dd($users);
        if ($user != null) {
            return view('users.show', compact('user'));
        }
        return back();        
    }


    public function newUser()
    {
        //dd('Chegou');
        return view('users.newUser');
    }
}
