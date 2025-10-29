@extends('layouts.app')
@section('title','Tambah Kategori')
@section('content')
<h3 class="mb-4">➕ Tambah Kategori</h3>

<form method="POST" action="{{ route('kategori.store') }}">
    @csrf
    <div class="mb-3">
        <label>Nama Kategori</label>
        <input type="text" name="nama_kategori" class="form-control" required>
  </div>
  <button class="btn btn-primary">Simpan</button>
  <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection