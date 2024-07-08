<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Our First Page</h1>
    <a href="{{ route('post')}}">Post</a>
    <a href="/about">About Page</a>
    <a href="{{route('blog')}}">Blog</a>

    {{5+5}}

    <br><br>

    {{-- {{"<h1> Hello World </h1>"}} --}}

    {{-- {!!  "<h1> Hello Rahul" !!} --}}
{{-- 
    {!! "<script>alert('Hello Rahul')</script>"  !!} --}}

    @php
        $user = "Rahul Durgapal";
        $names = ['rahul','aman','arjun','aniket'];
    @endphp
    {{$user}}

    <ul>
    @foreach ($names as $item)
        
          <li>{{$item}}</li>  
        
    @endforeach
</ul>


</body>
</html>