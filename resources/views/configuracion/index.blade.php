<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    .avatar_diseño {
        width: 100px;
        height: 100px;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        background: #5cb85c;
    }
    .swal-height{
        height: 350px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabla_area">
                    <thead>
                    <tr>
                        <th>FORMATO</th>
                        <th>DESCRIPCIÓN</th>
                        <th>ESTADO</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $item=1 @endphp
                    @foreach($money as $value)
                        <tr>
                            <td>{{$item++}}</td>
                            <td>{{$value->description}}</td>
                            <td>
                                @if($value->flag)

                                ACTIVO
                                @else
                                INACTIVO
                                @endif
                            </td>
                            <td>
                                <a href="{{}}">ACTIVAR</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>

