@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="text-center mb-4">
  <h2>📊 Dashboard</h2>
</div>

<div class="row justify-content-center">
  {{-- Kartu Total Buku --}}
  <div class="col-md-3">
    <a href="{{ route('buku.index') }}" class="text-decoration-none">
      <div class="card text-white bg-primary mb-3 shadow-sm hover-card">
        <div class="card-body text-center">
          <h5 class="card-title fw-bold">Total Buku</h5>
          <p class="card-text display-6">{{ $totalBuku }}</p>
        </div>
      </div>
    </a>
  </div>

  {{-- Kartu Total Kategori --}}
  <div class="col-md-3">
    <a href="{{ route('kategori.index') }}" class="text-decoration-none">
      <div class="card text-white bg-success mb-3 shadow-sm hover-card">
        <div class="card-body text-center">
          <h5 class="card-title fw-bold">Total Kategori</h5>
          <p class="card-text display-6">{{ $totalKategori }}</p>
        </div>
      </div>
    </a>
  </div>

  {{-- Kartu Total Penerbit --}}
  <div class="col-md-3">
    <a href="{{ route('penerbit.index') }}" class="text-decoration-none">
      <div class="card text-white bg-warning mb-3 shadow-sm hover-card">
        <div class="card-body text-center">
          <h5 class="card-title fw-bold text-dark">Total Penerbit</h5>
          <p class="card-text display-6 text-dark">{{ $totalPenerbit }}</p>
        </div>
      </div>
    </a>
  </div>
</div>

<style>
  /* ✨ Tambahan efek hover biar interaktif */
  .hover-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    cursor: pointer;
  }
  .hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
  }
</style>
@endsection
