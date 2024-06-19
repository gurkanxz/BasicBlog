<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-3">
        <div class="row">
            <div class="col-12">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">ABC Bilişim</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('indexName')}}">Ana Sayfa</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('cepTelefonlariName')}}">Cep Telefonları</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('notebookName')}}">Notebook</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('masaustuName')}}">Masaüstü</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('registerName')}}">Register</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('loginName')}}">Login</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('logoutName')}}">Logout</a>
                        </li>
                    </ul>    
                    </div>
                </div>
                </nav>

            </div>
            @yield('ustAlan')
            @yield('altAlan')
        </div>
    </div>    
</body>
</html>