<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House Template</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link href="{{asset('web/css/templatemo-style.css')}}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
<div class="">
    <!-- Top box -->
    <!-- Logo & Site Name -->
    <div class="placeholder">
        <div class="parallax-window" data-parallax="scroll" data-image-src="{{asset('imagenes/image_web3.jpeg')}}">
            <div class="tm-header">
                <div class="row tm-header-inner">
                    <div class="col-md-6 col-12">
{{--                        <img src="{{asset('logo.jpg')}}" alt="Logo" class="tm-site-logo" style="height: 150px;width: 250px;border-radius: 50%;" />--}}
                        <div class="tm-site-text-box">
                            <h1 class="tm-site-title" style="color: #FAFA00; font-size: 60px;font-family: 'Kaushan Script', cursive;">Recreo Restaurant </h1>
                            <h6 class="tm-site-title" style="color: whitesmoke; font-size: 70px;font-family: 'Kaushan Script', cursive;">La Colpa</h6>
                        </div>
                    </div>
                    <nav class="col-md-6 col-12 tm-nav">
                        <ul class="tm-nav-ul">
                            <li class="tm-nav-li"><a style="color: #FAFA00" href="index.html" class="tm-nav-link active">Inicio</a></li>
                            <li class="tm-nav-li"><a style="color: #FAFA00" href="about.html" class="tm-nav-link">Nosotros</a></li>
                            <li class="tm-nav-li"><a style="color: #FAFA00" href="contact.html" class="tm-nav-link">Contactos</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color:black;padding: 5px">
        <h2 class="col-12 text-center tm-section-title" style="font-family: 'Kaushan Script', cursive;color: whitesmoke ">Bienvenido a la Colpa, donde puedes hacer tus pedidos al instante</h2>
    </div>
    <main>
        <div class="tm-paging-links">
            <nav>
                <ul>
                    <li class="tm-paging-item"><a href="#" class="tm-paging-link active">Platos</a></li>
                    <li class="tm-paging-item"><a href="#" class="tm-paging-link">Bebidas</a></li>
                    <li class="tm-paging-item"><a href="#" class="tm-paging-link">Postres</a></li>
                </ul>
            </nav>
        </div>
        <button  style="margin-left:50px;border-radius: 10px;border: 0;background-color: #0c85d0;text-decoration: none;cursor: pointer;padding: 15px 30px 15px 30px;margin-bottom: 20px" onclick="apenCarrito()">CONFIRMAR PEDIDO</button>
        <div class="row">
            @foreach($platos as $plato)
                <article class="col-md-3  tm-gallery-item " style="height:100%;margin-bottom: 20px;">
                    <figure style="border: 1px #0ba1b5 solid;background-color: #D4EFDF;border-radius: 10px;padding-bottom: 10px">
                        <img src="{{asset('imagenes/platanos.jpeg')}}" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption style="text-align: center">
                            <h4 class="tm-gallery-title">{{$plato->nombre}}</h4>
                            <p class="tm-gallery-description">{{$plato->descripcion}}</p>
                            <p class="tm-gallery-price" style="margin-bottom: 10px">{{$plato->precio}}</p>
                             <button class="btn btn-warning"  style="border-radius:15px;cursor:pointer;color:black;margin-bottom:5px;outline:none;border: 0;text-decoration:none;background-color: #FAFA00;padding: 10px 40px 10px 40px" onclick="seleccionarPlato({{$plato->id}})">Seleccionar</button>
                            <br>
                            <input type="number" style="margin: auto auto;width: 50px;display: none" id="cajaCantidad{{$plato->id}}">
                        </figcaption>
                    </figure>
                </article>
            @endforeach
        </div>

    </main>

    <footer class="tm-footer text-center">
        <p>Copyright &copy; 2020 Simple House

            | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
    </footer>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @include('web.create')
    <input type="hidden" id="platos" value="{{json_encode($platos)}}">
</div>
<script src="{{asset('web/js/jquery.min.js')}}"></script>
<script src="{{asset('web/js/parallax.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        // Handle click on paging links
        $('.tm-paging-link').click(function(e){
            e.preventDefault();

            var page = $(this).text().toLowerCase();
            $('.tm-gallery-page').addClass('hidden');
            $('#tm-gallery-page-' + page).removeClass('hidden');
            $('.tm-paging-link').removeClass('active');
            $(this).addClass("active");
        });
    });

    function seleccionarPlato(idplato) {
        cajaCantidad = document.getElementById('cajaCantidad' + idplato);
        cajaCantidad.style.display = 'block';
    }
    function apenCarrito() {
        let cantidadPlatos = JSON.parse(document.getElementById('platos').value);
        let tabla = document.getElementById('cuerpo-resumen');
        let htmlHr = '';
        cantidadPlatos.forEach(function (data) {
            let cajaCantidad = document.getElementById('cajaCantidad' + data.id).value;
            if(cajaCantidad > 0 && cajaCantidad != "" && cajaCantidad != null){
                htmlHr += "<tr><td>"+data.nombre+"</td><td>"+data.precio+"</td><td>"+cajaCantidad+"</td><td>"+ (cajaCantidad *data.precio) +"</td></tr>";
            }
        });
        tabla.innerHTML =  htmlHr;
        $('#modalcliente').modal('show');
    }
    function  continuarPedido(){
        $('#modalcliente').modal('hide');
        alert('EL PEDIDO FUE ENVIADO CORRECTAMENTE ...')
    }

</script>
</body>

</html>
