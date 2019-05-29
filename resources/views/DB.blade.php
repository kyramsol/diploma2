<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1> Я говорю привет!</h1>
<h1> Привет Андрей!</h1>
<ul>
    @foreach($tasks as $t)

        <li>{{ $t->Name}}</li>
    @endforeach
</ul>

</body>
</html>