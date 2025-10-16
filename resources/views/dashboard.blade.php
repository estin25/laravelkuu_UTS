@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h2 class="text-center mb-4">📊 Dashboard</h2>
<div class="row text-center">
    <div class="col-md-4 mb-3">
        <div class="card p-4">
            <h3>👤 User</h3>
            <p>Kelola data akun user sistem.</p>
            <a href="#" class="btn btn-info text-white">Lihat User</a>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card p-4">
            <h3>📖 Buku</h3>
            <p>Kelola data buku dan penulis.</p>
            <a href="{{ route('books') }}" class="btn btn-primary">Lihat Buku</a>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card p-4">
            <h3>📂 Kategori</h3>
            <p>Atur kategori buku dengan mudah.</p>
            <a href="#" class="btn btn-success">Lihat Kategori</a>
        </div>
    </div>
</div>
@endsection
