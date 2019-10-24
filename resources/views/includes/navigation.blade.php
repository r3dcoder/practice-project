<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.html">The ultimate beauty</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" style="background-color: #9b0a0d">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('slidePhoto') }}">Sylhet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> Book</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink1" style=" background-color: #9b0a0d; font-size: 15px;";>
                        <a class="dropdown-item" href="{{ route('roomBook') }}">Hotel Room</a>
                        <a class="dropdown-item" href="{{ route('carRent') }}">Rent a car</a>

                    </div>
                </li>

                @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <form method="post" id="logout-form" action="{{ route('logout') }}">
                          @csrf
                        </form>
                        <a class="nav-link" href="#" onclick="document.getElementById('logout-form').submit();">Logout</a>
                    </li>

                    @else

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false"> Add review</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink1" style=" background-color: #9b0a0d; font-size: 15px;";>
                            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                            <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                        </div>
                    </li>


{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('login') }}">Login</a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('register') }}">Register</a>--}}
{{--                    </li>--}}
                @endif
            </ul>
        </div>
    </div>
</nav>
