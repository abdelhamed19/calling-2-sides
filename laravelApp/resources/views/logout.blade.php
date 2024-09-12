<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <h3>{{$user->name}}</h3>

    <h3>{{$token}}</h3>



</body>
</html>
