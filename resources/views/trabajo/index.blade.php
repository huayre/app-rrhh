<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chamba</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
@include('trabajo.create_modal')
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #48C9B0">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('chamba')}}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">La Colpa</a>
                <a class="nav-link" href="#">Nosotros</a>
            </div>
        </div>
    </div>
</nav>
<div class="container-fluid" style="margin-left: 70px;margin-top: 5px">
    <img src="{{asset('logo.jpg')}}" alt="logo" style="width: 300px;height:130px;display: block;margin: auto auto">
    <div class="row">
        @foreach($vacantes as $vacante)
            <div class="card col-md-4" style="width: 18rem;margin-top: 10px;margin-right: 10px;border: solid 1px #48C9B0">
                <img src="{{asset('log1.jpg')}}" style="margin-top: 3px">
                <div class="card-body">
                    <h5 class="card-title">{{$vacante->nombre }}</h5>
                    <p class="card-text">{{$vacante->requisitos}}</p>
                    <a onclick="abrirModalEmpleado('{{$vacante}}')" class="btn btn-primary">Inscribirse</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="{{asset('js/trabajo.js')}}"></script>
</body>
</html>
