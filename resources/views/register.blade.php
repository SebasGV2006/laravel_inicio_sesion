<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('register')}}" method="post">
        @csrf
        <label for="email">Correo:</label>
        <input type="text" name="email">
        <label for="password">Contraseña:</label>
        <input type="password" name="password">
        {{-- <label for="password_confirmation">Confirmar Contraseña:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required> --}}
        <input type="submit">
    </form>
</body>
</html>