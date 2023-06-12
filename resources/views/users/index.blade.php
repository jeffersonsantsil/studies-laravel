@extends('layouts.app')

@section('title', 'Listagem dos usuários')

@section('content')

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td colspan="2">
                        <a href="{{ route('users.show', $user->id) }}"><i class="fa-solid fa-user-pen"></i></a> |
                        <a href=""><i class="fa-solid fa-user-xmark"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
