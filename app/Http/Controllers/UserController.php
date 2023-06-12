<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('users.index', compact('users'));
    }

    public function home()
    {
        return view('users.home');
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

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $user = User::create($data);
        return redirect()->route('users.index');
    }


    public function delete($id)
    {

        if (!$user = User::find($id)) {

            return redirect()->route('users.index');
        }

        $user->delete();
        return redirect()->route('users.index');
    }


    public function edit(StoreUpdateFormRequest $request, $id)
    {
        $data = $request->all();

        if (!$user = User::find($id)) {
            return redirect()->route('users.index');
        }
        //dd('ok');
        $user->update($data);
        return redirect()->route('users.index');
    }
}
