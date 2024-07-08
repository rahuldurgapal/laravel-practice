<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Login User</h1>


                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
               
                <form action="{{route('loginMatch')}}" method="POST">
                    @csrf

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text"   value="{{old('email')}}" class="form-control @error('email') is-invalid  @enderror" name="email">
                    <span class="text-danger">
                        @error('email')
                         {{$message}}   
                        @enderror
                    </span>
                </div>

                <div class="mb-3">
                    <label class="form-label ">Password</label>
                    <input type="password"  class="form-control @error('password') is-invalid  @enderror" name="password">
                    <span class="text-danger">
                        @error('password')
                         {{$message}}   
                        @enderror
                    </span>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>