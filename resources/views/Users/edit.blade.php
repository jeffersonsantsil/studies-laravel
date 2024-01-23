<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edição do Usuário {{ $user->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        h1 {
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
        }

        .geral {
            width: 100vw;
            height: 100vh;
            background: #6C7A89;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;

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
    <div class="geral">
        <div class="form-control" id="dados">
            <form action="{{ route('user.update', $user->id) }}" id="formCad" method="post">
                @method('PUT')
                @csrf
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
                    <button type="submit" class="btn btn-primary mb-3">Editar</button>
                </div>
            </form>
            <a href="{{ route('index') }}"><button class="btn btn-danger mb-3">Cancelar</button></a>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
