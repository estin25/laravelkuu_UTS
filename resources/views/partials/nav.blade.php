<header>
<nav class="navbar navbar-expand-lg navbar-dark container">
  <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">📚 MyLaravel</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
      <li class="nav-item"><a href="{{ route('buku.index') }}" class="nav-link">Buku</a></li>
      <li class="nav-item"><a href="{{ route('kategori.index') }}" class="nav-link">Kategori</a></li>
      <li class="nav-item"><a href="{{ route('penerbit.index') }}" class="nav-link">Penerbit</a></li>
      <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
    </ul>
  </div>
</nav>
</header>
