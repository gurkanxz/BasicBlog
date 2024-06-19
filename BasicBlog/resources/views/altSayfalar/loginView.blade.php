<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    @extends('tema')
    @section('ustAlan')
    <div class="col-12 mt-2">
    <h3>LOGIN SAYFASI</h3>  
    <h4>
        @if(session()->has('durum'))
            {{session('durum')}}
        @endif
    </h4>  
    <form action="{{route('loginName')}}" method="post">
        @csrf
        <div class="mb-3">
            <input type="email" class="form-control" placeholder="E-Mail" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" placeholder="Parola" name="password" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
        
    </div>    
    @endsection
    @section('altAlan')
    <div class="col-12">
       
    </div>    
    @endsection 
</body>
</html>