@extends('layouts.app')

@section('title', 'Edição de Usuário: ')

@section('erros')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <ul>
                    <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection
@section('content')

    <div class="formCenter col-5 container-fluid">
        <form action="{{ route('users.edit', $user->id) }}" method="post">
            @csrf
            <div class="mb-3 form-group">
                <label for="name" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
            </div>
            <div class="mb-3 form-group">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }} ">
            </div>
            <div class="mb-3 form-group">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" name="password" >
            </div>           

            <?php
            if (!isset($user)) {
                echo '<button type="submit" class="btn btn-success">Cadastrar';
            } else {
                echo '<button type="submit" class="btn btn-primary">Editar';
            }
            ?>
            </button>
        </form>

    </div>

@endsection
