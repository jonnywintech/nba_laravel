<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">NBA Teams</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">Teams</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/news">News</a>
          </li>
        </ul>
        <span class="navbar-text">
          <ul class="nav justify-content-center">

{{-- // autentikacije korisnika --}}
            @auth
            <li class="nav-item ms-auto">
              <span class=" nav-link text-danger"><span class="text-white me-3" >Welcome</span> {{auth()->user()->first_name}} {{auth()->user()->last_name}}
            </li>
            <li class="nav-item">
              <form method="POST" action="/logout" >
                @csrf
                <button type="submit" class="btn btn-link">Logout</button>
        </form>
          </li>
            @endauth

            {{-- // ruta vidljiva neulogovanom korisnika --}}
            @guest

            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/register">Register</a>
              </li>

              @endguest


          </ul>
        </span>
      </div>
    </div>
  </nav>




