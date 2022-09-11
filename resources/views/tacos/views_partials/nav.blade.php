<nav class="navbar" style="background-color: #e3f2fd;" >
      <div class="container-md">
        <a class="navbar-brand" href="#">Logo</a>

        <a class="nav-link" href="#">Inicio</a>
        <a class="nav-link" href="#">Acerca de</a>
        <a class="nav-link" href="#">Contactanos</a>
       
        @if(auth()->check())

          <a class="nav-link" href="/perfil">{{auth()->user()->name}}</a>
    
        @else

        <button class="btn btn-primary">
          <a class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md" href="/login">Iniciar sesión</a>
        </button>
        <button class="btn btn-secondary">
          <a class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md"  href="/register">Registrarse</a>
        </button>
        @endif

      </div>
    </nav>
