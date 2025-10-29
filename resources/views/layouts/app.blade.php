<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title','MyLaravel')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: #f8fafc; font-family: 'Segoe UI'; }
    header, footer { background: #1f2937; color:white; }
    footer { text-align:center; padding:1rem; font-size:0.9rem; color:#9ca3af; }
    .card { border:none; box-shadow:0 2px 6px rgba(0,0,0,0.1); }
  </style>
</head>
<body>
  @include('partials.nav')
  <main class="container py-4">@yield('content')</main>
  @include('partials.footer')
</body>
</html>
