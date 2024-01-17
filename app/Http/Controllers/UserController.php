<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUpdateFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        //dd($users);
        return view('index', compact('users'));
    }

    public function show($id)
    {
        if (!$user = User::find($id)) {
            return redirect()->route('index');
        }
    }

    public function createUser(CreateUpdateFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        User::create($data);
        return redirect(route('index'));
    }


    public function edit($id)
    {
        if (!$user = User::find($id)) {
            return redirect()->route('index',);
        }
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        if (!$user = User::find($id))
            return redirect()->route('index');

        dd($request->all());
    }
}
