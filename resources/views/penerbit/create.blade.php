@extends('layouts.app')
@section('title','Tambah Penerbit')
@section('content')
<h3 class="mb-4">➕ Tambah Penerbit</h3>

<form method="POST" action="{{ route('penerbit.store') }}">
  @csrf
  <div class="mb-3">
    <label>Nama Penerbit</label>
    <input type="text" name="nama_penerbit" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control" required></textarea>
  </div>
  <button class="btn btn-primary">Simpan</button>
  <a href="{{ route('penerbit.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
