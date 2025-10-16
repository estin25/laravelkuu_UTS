@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="text-center">
    <h1 class="fw-bold mb-3">Selamat Datang di MyLaravel App!</h1>
    <p class="lead">Eksplorasi routing dan Blade template Laravel 🌷</p>
    <a href="{{ route('dashboard') }}" class="btn btn-primary mt-3">Pergi ke Dashboard</a>
</div>
@endsection
