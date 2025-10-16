<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8fafc;
            font-family: 'Segoe UI', sans-serif;
        }
        header {
            background: #1f2937;
            color: white;
        }
        footer {
            background: #1f2937;
            color: #9ca3af;
            text-align: center;
            padding: 1rem;
            font-size: 0.9rem;
        }
        .card {
            border: none;
            box-shadow: 0px 2px 6px rgba(0,0,0,0.1);
            transition: 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        a.nav-link {
            color: white !important;
            font-weight: 500;
        }
        a.nav-link.active {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    @include('partials.nav')

    <main class="container py-4">
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
