<nav class="navbar navbar-dark px-5 d-flex justify-content-between">
    <div>
        <span data-feather="user"></span>
        @auth
        <span class="text-white me-3">Selamat datang, {{ auth()->user()->name }}</span>
    
      <button id="darkModeToggle" class="btn btn-outline-light btn-sm">
  <span id="toggleIcon">🌙</span>
</button>
    </div>
    <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="nav-link px-3 border-0">
        <span data-feather="log-out"></span>logout
    </button>
  </form>
      @endauth
  </nav>