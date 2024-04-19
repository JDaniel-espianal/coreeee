<nav class="navbar navbar-expand-lg text-bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Mi proyecto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('tareas')}}">Tareas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('terminadas')}}">Terminadas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('perfil')}}">perfil</a>
          </li>
        </ul>
        <div class="d-flex">
            <div class="ms-1">
                <a class="btn btn-primary" id="btnregister" href="{{ route('register') }}" role="button">Register</a>
            </div>
            <div class="ms-1">
                <a class="btn btn-primary" id="btnlogin" href="{{ route('login') }}" role="button">Login</a>
            </div>
        </div>
        <div class="ms-1">
                <a class="btn btn-primary" id="btnsalir" href="{{ route('logout') }}" role="button">Logout</a>
        </div>
      </div>
      </div>
    </div>
  </nav>