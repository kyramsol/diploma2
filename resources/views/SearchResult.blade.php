<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table>
    @foreach($DataSearch as $t)
        <tr>
            <td>{{ $t->id }}</td> <td>{{ $t->Task }}</td> <td>{{ $t->Name  }}</td><td>{{ $t->SecondName  }}</td><td>{{ $t->Post  }}</td><td>{{ $t->Price }}</td>
        </tr>

    @endforeach
</table>
</body>
</html>