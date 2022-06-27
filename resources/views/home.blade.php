<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
</head>
<body>

<h1> Форма поста </h1>
<div class="button">
    <a href="{{ route('store') }}"> Добавить запись </a>
</div>
<br>
<br>
<br>
    @foreach($items as $item)
        <span>{{ $item->title }}</span>
        <br>
        <p> {{ $item->text }} </p>
    @endforeach

</body>
</html>
