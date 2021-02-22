<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>exercice 1 seeds</h1>
    @foreach ($datayo as $item)
        <ul>
            <li>{{$item->id}}</li>
            <li>{{$item->nom}}</li>
            <li>{{$item->age}}</li>
            <li>{{$item->mail}}</li>
            <li>{{$item->phone}}</li>
            <li><a href="/show/{{$item->id}}">show</a></li>
            
        </ul>
    @endforeach
</body>
</html>