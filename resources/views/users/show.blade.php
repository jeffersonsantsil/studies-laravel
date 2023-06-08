<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $user->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <h1>Editando Usuário {{ $user->name }}</h1>

    <form action="" class="form-control">
        <label for="name">Id</label>
        <input type="text" class="text" disabled value="{{ $user->id }}">
        <label for="name">Nome</label>
        <input type="text" class="text" value="{{ $user->name }}">
        <label for="email">E-mail</label>
        <input type="email" class="text" value="{{ $user->email }}">

        <button type="submit">Editar</button>
    </form>
    <a href="{{ route('users.index') }}">Voltar para Listagem</a>

</body>

</html>
