<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem e Cadastro de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        h1 {
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
        }

        .geral {
            display: flex;
            margin: 20px 20px;
        }

        .erros {
            width: 80%;
            margin: 20px;
            height: 100px;
            background-color: darkorange;
            border-radius: 2%
        }

        #dados {
            background-color: rgb(208, 236, 236);
            width: 30%;

        }

        #table {
            background-color: rgb(235, 253, 253);
            width: 70%;
            margin-left: 1%;
            border-radius: 1%;

        }
    </style>
</head>

<body>
    <H1>CRUD - em PHP usando Laravel</H1>

    @if ($errors->any())
        <div class="erros">
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </div>
    @endif

    <div class="geral">

        <div class="form-control" id="dados">
            <form action="{{ route('cad.user') }}" id="formCad" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label col-auto">Nome</label>
                    <input type="text" name="name" class="form-control col-auto" id="name"
                        placeholder="Nome Completo" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="userName" class="form-label col-auto">Usuário</label>
                    <input type="text" name="userName" class="form-control col-auto" id="userName"
                        placeholder="username" value="{{ old('userName') }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label col-auto">Email</label>
                    <input type="email" name="email" class="form-control col-auto" id="email"
                        placeholder="name@example.com.br" value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label col-auto">Senha</label>
                    <input type="password" name="password" class="form-control col-auto" id="password"
                        placeholder="Senha">
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                            No minimo 6 caracteres.
                        </span>
                    </div>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-success mb-3">Cadastrar</button>
                </div>
            </form>
        </div>

        <div id="table">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Usuário</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>                    
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">#{{ $user->id }}</th>

                            <td>{{ $user->name }}</td>
                            <td>{{ $user->userName }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <!-- Button trigger modal -->
                                <button class="btn btn-warning" data-bs-target="#editModal"
                                    data-bs-toggle="modal">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="bi bi-person-x-fill"></i>
                                    <!--Excluir User a ideia aqui é que seja aberto um modal-->
                                </button>
                            </td>
                        </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar <strong>{{ $user->name }}</strong>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label col-auto">Nome</label>
                        <input type="text" name="name" class="form-control col-auto" id="name"
                            placeholder="Nome Completo" value="{{ $user->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="userName" class="form-label col-auto">Usuário</label>
                        <input type="text" name="userName" class="form-control col-auto" id="userName"
                            placeholder="username" value="{{ $user->userName }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label col-auto">Email</label>
                        <input type="email" name="email" class="form-control col-auto" id="email"
                            placeholder="name@example.com.br" value="{{ $user->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label col-auto">Senha</label>
                        <input type="password" name="password" class="form-control col-auto" id="password"
                            placeholder="Senha">
                        <div class="col-auto">
                            <span id="passwordHelpInline" class="form-text">
                                No minimo 6 caracteres.
                            </span>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-success">Editar</button>
                    </div>
                </div>
                <form action="{{ route('user.update', $user->id) }}" id="formCad" method="post">
                    @method('PUT')
                    @csrf
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                    </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
