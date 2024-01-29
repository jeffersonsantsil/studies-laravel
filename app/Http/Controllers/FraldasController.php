<?php

namespace App\Http\Controllers;

use App\Models\Fralda;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class FraldasController extends Controller
{

    public function indexLogin()
    {
        return view('fraldas.users.login');
    }

    public function login(Request $request)
    {
        $produtos = Fralda::orderBy('created_at', 'desc')->get();


        $dados = $request->all();
        if ($dados['operador'] == 'Helton') {
            $arrayOperadorTurno = [
                'operador' => $dados['operador'],
                'turno' => $dados['turno']
            ];
            return view('fraldas.fraldas-peso', compact('arrayOperadorTurno', 'produtos'));
        } else {
            return view('fraldas.users.login');
        }
    }


    public function pesoFraldas()
    {
        $produtos = Fralda::orderBy('created_at', 'desc')->get();
        if (!$produtos) {
            return view('fraldas..fraldas-peso', compact('produtos'));
        } else {
            $produtos = null;
            return view('fraldas..fraldas-peso', compact('produtos'));
        }
        //$produtos = Fralda::paginate(10);
        dd($produtos);
    }



    public function cadFralda(Request $request)
    {
        
        $dados = $request->all();

        //dd($request);

        if ($dados['peso'] == "") {
            $dados['status'] = 'Sem Registro';
            $dados['peso'] = 0;
        }
        if ($dados['peso'] > '26.95') {
            $dados['status'] = 'Acima do Máximo';
        }
        if ($dados['peso'] > '26.20' || $dados['peso'] < '26.94') {
            $dados['status'] = 'Alerta Máximo';
        }
        if ($dados['peso'] >= '24.69' || $dados['peso'] <= '26.19') {
            $dados['status'] = 'Dentro do Especificado';
        }
        if ($dados['peso'] < '24.69' || $dados['peso'] > '23.94') {
            $dados['status'] = 'Alerta Mínimo';
        }
        if ($dados['peso'] < '23.93') {
            $dados['status'] = 'Abaixo do Mínimo';
        }

        //dd($dados);
        $arrayOperadorTurno = [
            'operador' => $dados['operador'],
            'turno' => $dados['turno'],
        ];
        Fralda::create($dados);
        return redirect(route('fraldas.peso', compact('arrayOperadorTurno')));
    }
}
