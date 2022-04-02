<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 mb-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Seu<span class="text-success">cliente</span>.com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end container">
                <li class="nav-item">
                    <a class="nav-link {{$pageNumber == 1 ? 'active':''}}" href="{{route('CreateCustomer')}}">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{$pageNumber == 2 ? 'active':''}}" href="{{route('SelectCustomer')}}">Vizualizar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{$pageNumber == 3 ? 'active':''}}" href="{{route('UpdateCustomer')}}">Atualizar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{$pageNumber == 4 ? 'active':''}}" href="{{route('DeleteCustomer')}}">Deletar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>