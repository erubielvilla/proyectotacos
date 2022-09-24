<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #79E9E2;">
  <div class="container-fluid"> 
    <a class="navbar-brand" href="/"><img src="{{asset('img/logo_tacos.jpg')}}" width="50px" height="50px" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Incio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Acerca de nosotros">Acerda de nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Contactanos">Contactanos</a>
        </li>
        @if(auth()->check())
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><a class="dropdown-item" href="/Pedidos">Pedidos</a></li>
            <li><hr class="dropdown-divider"></li>
            <div>
         <form method="POST" action="{{ route('logout') }}">
           @csrf
                <x-jet-dropdown-link href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   this.closest('form').submit();">
                   <p class="dropdown-item">Cerrar sesión</p>
                   </x-jet-dropdown-link>
            </form>
        </div>
          </ul>
        </li>
        @else

        <li class="mx-6">
          <a class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md" href="/login">Iniciar sesión</a>
        </li>
        <li class="mx-6">
          <a class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md"  href="/register">Registrarse</a>
        </li>

        @endif
      </ul>
      
    </div>
  </div>
</nav>