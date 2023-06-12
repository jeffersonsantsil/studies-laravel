@extends('layouts.app')

@yield('title', Cadastro de usuários)

@section('content')
    <div class="formCenter col-5 container-fluid">
        <form action="#" method="post">
            <div class="mb-3 form-group">
                <label for="name" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
            </div>
            <div class="mb-3 form-group">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
            </div>
            <div class="mb-3 form-group">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" name="password" disabled>
            </div>
            <div class="mb-3 form-group">
                <label for="confirmPassword" class="form-label">Confirme sua senha</label>
                <input type="password" class="form-control" name="confirmPassword" disabled>
            </div>

            <?php
            if (!$user) {
                echo '<button type="submit" class="btn btn-success">Cadastrar';
            } else {
                echo '<button type="submit" class="btn btn-primary">Editar';
            }
            ?>
            </button>
        </form>

    </div>
@endsection
