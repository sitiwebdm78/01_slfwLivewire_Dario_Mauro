<nav class="navbar navbar-expand-lg bkgblu">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{-- {{route('articles.create')}} --}}">Crea Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{-- {{route('articles.index')}} --}}">I nostri articoli</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                </li>
            </ul>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            @guest
            <ul class="navbar-nav d-flex ms-auto ">                    
                <li class="nav-item me-3 ">
                    <a class="nav-link" href="{{route('auth.register')}}">Registrati</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="{{route('login')}}">Accedi</a>
                </li>
            </ul>
            @endguest
        </div>
    </div>
</nav>