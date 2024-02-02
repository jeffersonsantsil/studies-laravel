<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function session(Request $request)
    {
        Session([
            'operador' => $request->nameOperador,
            'turno' => $request->turno,
            'produto' => $request->produto,
            'tamanhoProduto' => $request->tamanhoProduto
        ]);
        $dadosSessao = Session::all();

        //dd($dadosSessao['operador']);
        return view('site.peso.pesagem', compact('dadosSessao'));
    }

    public function destroy()
    {        
        Session::flush();
        return redirect('/');
    }
}
