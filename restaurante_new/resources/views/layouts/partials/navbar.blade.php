<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Restaurante ES</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/dish">Pratos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/reservations">Reservas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/categories">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/messages">Mensagens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/images">Imagens</a>
                </li>
            </ul>
        </div>
        @guest
            <div class="text-end">
                <a href="{{route('logout.perform')}}" class="btn btn-outline-danger">Logout</a>
            </div>
        @endguest
    </div>
</nav>
