<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is user page</h1>
    {{-- <h3> Hello {{$user}}</h3>
    <h3>City: {{$city}}</h3> --}}

    @foreach ($user as $id=>$u)
    <h3>{{$id}} | {{$u['name']}} |  {{$u['phone']}} | {{$u['city']}}</h3>
| <a href="{{route('view.user',$id)}}">show</a>
        
    @endforeach
</body>
</html>