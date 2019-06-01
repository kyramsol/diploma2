<head>
    <link rel="stylesheet" href="{{ URL::asset('css/AddStudent.css') }}" >
    <link rel="stylesheet" href="{{ URL::asset('css/MainStyle.css') }}" >
</head>
<body >
<div class="border">
    <h3 align="center">Додавання роботи</h3>
<form class="Addform">
        <table>
        <tr>
            <td>Назва</td>   <td><input text class="textfield" placeholder="" required></td>
        </tr>
        <tr>
            <td>Куратор</td>   <td><input text class="textfield" placeholder="" required></td>
        </tr>
        <tr>
            <td>Оцiнка</td>   <td><input text class="textfield" placeholder="" required></td>
        </tr>
        <tr>
            <td>ФАЙЛ??????</td>   <td><input text class="textfield" placeholder="" required></td>
        </tr>
        <tr>
            <td></td>   <td align="right"><input type="submit" class="button" ></td>
        </tr>
        </table>


</form>
</div>
</body>