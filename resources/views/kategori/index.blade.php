@extends('layouts.app')
@section('title','Kategori')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>📂 Daftar Kategori</h2>
  <a href="{{ route('kategori.create') }}" class="btn btn-success">+ Tambah Kategori</a>
</div>

<form method="GET" action="{{ route('kategori.index') }}" class="mb-3">
  <input type="text" name="search" value="{{ $search }}" class="form-control" placeholder="Cari kategori...">
</form>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      <th>No</th> {{-- Ganti dari ID menjadi No --}}
      <th>Nama Kategori</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    {{-- Tambahkan index agar bisa menghitung urutan --}}
    @foreach($kategoris as $index => $kategori)
    <tr>
      <td>{{ $kategoris->firstItem() + $index }}</td>
      <td>{{ $kategori->nama_kategori }}</td>
      <td width="180">
        <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" class="d-inline">
          @csrf @method('DELETE')
          <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus kategori ini?')">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{-- Pagination --}}
{{ $kategoris->links() }}
@endsection