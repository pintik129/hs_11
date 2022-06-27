<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма ввода</title>
</head>
<body>
<h1>Форма ввода</h1>
<form action="{{ route('postCreate') }}" method="POST">
    @csrf
    <input type="text" name="title">
    <br>
    <textarea name="text" id="" cols="30" rows="10"></textarea>
    <br>
    <br>
    <button type="submit"> Отправить </button>
</form>
</body>
</html>
