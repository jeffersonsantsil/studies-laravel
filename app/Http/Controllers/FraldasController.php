<?php

namespace App\Http\Controllers;

use App\Models\Fralda;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class FraldasController extends Controller
{
    public function index()
    {
        $produtos = Fralda::paginate(10);
        //dd($produto);        
        return view('fraldas.index', compact('produtos'));
    }


    public function createFralda(Request $request)
    {

        $dados = $request->all();

        //dd($dados);

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

        Fralda::create($dados);
        return redirect(route('fralda.index'));
    }
}
