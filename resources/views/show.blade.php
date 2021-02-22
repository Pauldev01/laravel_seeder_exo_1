<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
            <li>{{$show->id}}</li>
            <li>{{$show->nom}}</li>
            <li>{{$show->age}}</li>
            <li>{{$show->mail}}</li>
            <li>{{$show->phone}}</li>
            <li><a href="/show/{{$item->id}}">show</a></li>
    </ul>
</body>
</html>