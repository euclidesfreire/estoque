<!doctype html>
<html>
    <head>
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
        </style>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <title>Stock Zeus</title>
    </head>
    <body>
    <div class="container">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">
                    Stock Zeus
                    </a>                    
                </div>

                <ul class="nav navbar-nav navbar-right">
                    @guest
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    @else
                    <li><a href="{{route('home')}}">Home</a></li>
                        <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                Produtos  <span class="caret"></span>
                             </a>    
                             <ul class="dropdown-menu">
                                 <li><a href="{{route('lista')}}" style="color: black">Listagem</a></li>
                                 <li><a href="{{route('novo')}}" style="color: black">Novo</a></li>
                             </ul>
                        </li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                   Vendas  <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="{{route('vendas.lista')}}" style="color: black">Listar Vendas</a></li>
                                    <li><a href="{{route('vendas.novo')}}" style="color: black">Nova Venda</a></li>
                                </ul>
                        </li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                   Compras  <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="{{route('compras.lista')}}" style="color: black">Listar Compras</a></li>
                                    <li><a href="{{route('compras.novo')}}" style="color: black">Nova Compra</a></li>
                                </ul>
                        </li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: black">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    @endguest
                </ul>

            </div>            
        </nav>

        @yield('content')

        <footer class="footer">
            <p> @ Stock Zeus </p>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    	
    </body>
</html>
