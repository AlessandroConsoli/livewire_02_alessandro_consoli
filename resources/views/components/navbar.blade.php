<nav class="navbar navbar-expand-lg bg-navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Archivio Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Crea un articolo</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Registrati</a>
                </li>
                <li class="nav-item">
                    <form  
                    action="{{route('logout')}}" 
                    method="POST">
                    @csrf
                    <button class="nav-link" type="submit">Logout</button>
                </form>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>