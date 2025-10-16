<header>
    <nav class="navbar navbar-expand-lg navbar-dark container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">📚 MyLaravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                <li class="nav-item"><a href="{{ route('books') }}" class="nav-link {{ request()->is('books') ? 'active' : '' }}">Books</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a></li>
                <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">Dashboard</a></li>
            </ul>
        </div>
    </nav>
</header>
