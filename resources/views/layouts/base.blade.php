<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!!Html::style("css/base_styles.css")!!}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    @yield('css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {!!Html::script("js/script.js")!!}
    <title>@yield('titulo')</title>
</head>
<body>
    <div class="contenedor">
        <div class="navegacion" >
            <div class="header" >
                {!! Html::image("images/image001.png") !!}
            </div>
            <nav>
                <ul>
                    @if (Auth::user())
                        @if (Auth::user()->rol==0)
                            <li><a class="user" href="/user"><i class="fas fa-users"></i>  </i>Usuarios</a></li>
                        @endif
                        <li><a class="client" href="/client"><i class="far fa-address-book"></i>  Clientes</a></li>
                        <li><a class="" href="/logout"><i class="fas fa-times-circle"></i>  Log Out</a></li>
                    @endif
                </ul>
            </nav>
            <div class="usuario">
                @if (Auth::user())
                    <p>
                        <i class="fas fa-user"></i> {{Auth::user()->name}}
                    </p>
                    <p>
                        <i class="fas fa-address-card"></i>
                        @if (Auth::user()->rol=="0")
                            Administrador
                        @elseif(Auth::user()->rol=="1")
                            Vendedor
                        @endif
                    </p>
                @endif
            </div>
        </div>
        <div class="contenido" >
            <label for="">@yield('label')</label>
            @yield('accion')
            <hr>
            @yield('content')
        </div>
    </div>
</body>
</html>
