<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('template\vendors\font-awesome\css\font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('template\vendors\jquery-bar-rating\fontawesome-stars.css')}}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8" style="background-image:url('/template/images/auth/fondo.jpg')">
            </div>
            <div class="col-md-4" style="background-color: white;height: 100vh;width:100vh">
                <form style="width: 300px;margin: auto auto;margin-top: 210px" method="post" action="{{route('login')}}">
                    @csrf
                    <img src="{{asset('template\images\logo.svg')}}" alt="logo" style="width: 190px;height: 50px;display: block;margin: auto auto">
                    <input type="email" class="form form-control mb-4 mt-4 border-primary" placeholder="Usuario" name="email" required>
                    <input type="password" class="form form-control mb-4 border-primary" placeholder="Contraseña" name="password" required>
                    <p class="text-danger text-center" style="font-weight: bold"> {{$errors->first('error')}}</p>
                    <button  type="submit" class="btn btn-primary btn-block">INGRESAR</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

