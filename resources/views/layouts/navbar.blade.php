<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Biblioteca</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                <a class="nav-link" href="{{ url('carros') }}">Carros</a>
                <a class="nav-link" href="{{ url('clientes') }}">Clientes</a>
            </div>
        </div>
    </div>
</nav>
