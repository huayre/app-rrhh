<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Colpa | Trabjo</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link href="{{asset('web/css/templatemo-style.css')}}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
@include('trabajo.create_modal')
<div class="">
    <div class="placeholder">
    <!-- <video src="{{asset('videos/colpa-video.mp4')}}" width="640" height="480" autoplay controls></video> -->
        <div class="parallax-window" data-parallax="scroll" data-image-src="{{asset('imagenes/image_web3.jpeg')}}">
            <div class="tm-header">
                <div class="row tm-header-inner">
                    <div class="tm-site-text-box">
                        <h1 class="tm-site-title" style="color: #F14D1D; font-size: 80px;font-family: 'Kaushan Script', cursive; -webkit-text-stroke: 2px white;">Recreo Restaurant </h1>
                        <h6 class="tm-site-title" style="color: red; font-size: 100px;font-family: 'Kaushan Script', cursive; -webkit-text-stroke: 4px white;">La Colpa</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #F26C44;">
        <h2 class="col-12 text-center tm-section-title" style="font-family: 'Kaushan Script', cursive; padding: 8px 5px">Bienvenido a la Colpa, Ven y Trabaja con nosotros</h2>
    </div>
    <br>
    <div class="container-fluid" style="margin-top: 5px;">
        <div class="row" style="justify-content: center; ">
            @foreach($vacantes as $vacante)
                <div class="card" style="background-color: #F8DAA2; margin : 8px; width: 250px; border-radius: 20px;padding: 5px;font-family: 'Open Sans', sans-serif;">
                    <img src="{{asset('imagenes/mujer-home-office-1.png')}}" style="padding: 2px; margin-top: 10px;">
                    <div class="card-body">
                        <h5 class="card-title">{{$vacante->nombre }}</h5>
                        <p class="card-text">{{$vacante->requisitos}}</p>
                        <button onclick="abrirModalEmpleado('{{$vacante}}')"  style="border-radius: 10px;cursor: pointer; width: 100%;border: none; background-color: black; padding: 7px; color: white;">POSTULAR</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- <footer class="tm-footer text-center">
        <p>Copyright &copy; 2020 Simple House

            | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
    </footer> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</div>
<script src="{{asset('web/js/jquery.min.js')}}"></script>
<script src="{{asset('web/js/parallax.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    })
</script>
<script src="{{asset('js/trabajo.js')}}"></script>
</body>

</html>
