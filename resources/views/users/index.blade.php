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
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalDelete">
                            <i class="fa-solid fa-user-xmark"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

{{-- MODAL DELETE --}}
<div class="modal" id="modalDelete" tabindex="1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Remover de usuário ID: {{ $user->id }}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Deseja mesmo remover o usuário {{ $user->name }}?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-Warning" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-danger"><a href="{{route('users.delete', $user->id) }}">Deletar</a></button>
            </div>
        </div>
    </div>
</div>





