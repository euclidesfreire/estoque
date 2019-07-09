<!doctype html>
<html>
    <head>
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">
        <title>Controle de Estoque</title>
    </head>
    <body>
    <div class="container">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">
                        Estoque Laravel
                    </a>                    
                </div>

                <ul class="nav navbar-nav navbar-right">
                    @guest
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    @else
                        <li><a href="{{route('lista')}}">Listagem</a></li>
                        <li><a href="{{route('novo')}}">Novo</a></li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
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
            <p> @ Study Laravel Tutorial. </p>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    	
    </body>
</html>
