<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Usuários</title>
</head>
<body>
    <h1>Cheguei aqui!</h1>

   @foreach ($users as $user)

   {{ $user->name }} - {{ $user->email }} ({{ $user->password}})
       
   @endforeach
</body>
</html>