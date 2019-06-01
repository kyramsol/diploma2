<head>
    <link rel="stylesheet" href="{{ URL::asset('css/AddStudent.css') }}" >
    <link rel="stylesheet" href="{{ URL::asset('css/MainStyle.css') }}" >
</head>
<body >
<div class="border">
    <h3 align="center">Додавання даних Студента</h3>
<form class="Addform">
        <table >
        <tr>
    <td>Name:</td><td><input text class="textfield" placeholder="Василий" required></td>
        </tr>
        <tr>
        <td>Second Name:</td><td><input text class="textfield" placeholder="Васильевич" required></td>
        </tr>
        <tr>
        <td>Last Name:</td><td><input text class="textfield" placeholder="Василенко" required></td>
        </tr>
        <tr>
        <td>Year:</td><td><input text class="textfield" placeholder="1986" required></td>
        </tr>
            <tr>
                <td></td><td align="right"><input type="submit" class="button" ></td>
            </tr>
        </table>


</form>
</div>
</body>