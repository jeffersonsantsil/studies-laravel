@extends('layouts.app')

@section('title', 'Cadastro de usuários')

@section('content')
    <div class="formCenter col-5 container-fluid">
        <form action="{{ route('users.store') }}" method="post">
            @csrf()
            <div class="mb-3 form-group">
                <label for="name" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3 form-group">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3 form-group">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" name="password" required>
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
