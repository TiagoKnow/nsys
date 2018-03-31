<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nsys - WEB</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 90vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 15px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 5px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Início</a>
                        <a href="{{ url('/suporte') }}">Suporte</a>
                        <a href="{{ url('/suporte') }}">Manual</a>
                        <a href="{{ url('/suporte') }}">Cobrança</a>
                        <a href="{{ url('/suporte') }}">SAC</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Registrar</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Nsys - WEB
                </div>

                <div>
                    <br>
                    <h3>Gerencie a sua empresa de forma simples e fácil de qualquer lugar.</h3>
                    <br>
                    <br>
                </div>

                <div class="links">
                    <a href="http://ns3info.com.br">NS3 - Soluções em T.I.</a>
                    <a href="https://www.facebook.com/ns3company/">Facebook</a>
                    <a href="#">API</a>
                    <a href="http://www.ns3info.com.br/nsys/nsys-install.exe">Download</a>
                    <a href="#">Documentação</a>
                    <a href="#">Padrões</a>
                    <a href="#">Sobre</a>
                </div>
            </div>
        </div>
        <div>
            <center>
                <h5 href="http://www.ns3info.com.br">NS3 - Soluções em T.I. © 2008 - 2018. Todos os direitos reservados. | ns3info.com.br</h5>
            </center>
        </div>
    </body>
</html>
