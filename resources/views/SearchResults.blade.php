<head>
    <link rel="stylesheet" href="{{ URL::asset('css/MainStyle.css') }}" >
    <link rel="stylesheet" href="{{ URL::asset('css/Results.css') }}" >
</head>
<body>
<div class="pad">
<div class="position">
    <img height=36 width=44 src="{{URl::asset('css/Images/Emblema3.png')}}">
    <form>
        <input type=text class="main" placeholder="Пошук Роботи" required>
        <input type="submit" class="button" value="Пошук">
    </form>
</div>

<h4>Пошук по запиту:</h4>
<table class="tablestyle" >
    <tr>
        <th>Назва Роботи</th>     <th>Виконав</th>     <th>Спец</th>    <th>Оценка</th>    <th>вид</th>
    </tr>
        <td>Система автоматического говна</td>     <td>Вася Пупкин</td>     <td>Говнодав</td>    <td>55555</td>    <td>Диплом</td>
    </tr>
</table>
</div>

</body>