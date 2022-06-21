<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/puser-client">Restaurante ES</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/menu-client">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/messages-client">Entrar em Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/reservations-client">Reservas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/aboutus-client">Sobre nós</a>
                </li>
            </ul>
        </div>
        @guest
            <div class="text-end">
                {{--<a href="{{route('logout.perform')}}" class="btn btn-outline-danger">Logout</a>--}}
                <a class="btn btn-outline-danger" aria-current="page" href="/">Logout</a>
            </div>
        @endguest
    </div>
</nav>
