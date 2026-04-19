<nav class="navbar navbar-expand-lg bkgblu">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                </li>
            </ul>
            @guest
            <ul class="navbar-nav d-flex ms-auto ">                    
                <li class="nav-item me-3 ">
                    <a class="nav-link" href="{{route('register')}}">Registrati</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="{{route('login')}}">Accedi</a>
                </li>
            </ul>
            @endguest
        </div>
    </div>
</nav>