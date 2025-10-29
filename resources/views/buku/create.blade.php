@extends('layouts.app')
@section('title','Tambah Buku')
@section('content')
<h3 class="mb-4">➕ Tambah Buku</h3>

<form method="POST" action="{{ route('buku.store') }}">
  @csrf
  <div class="mb-3">
    <label>Judul Buku</label>
    <input type="text" name="judul" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Kategori</label>
    <select name="kategori_id" class="form-control" required>
      <option value="">-- Pilih Kategori --</option>
      @foreach($kategoris as $k)
        <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label>Penerbit</label>
    <select name="penerbit_id" class="form-control" required>
      <option value="">-- Pilih Penerbit --</option>
      @foreach($penerbits as $p)
        <option value="{{ $p->id }}">{{ $p->nama_penerbit }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label>Tahun Terbit</label>
    <input type="number" name="tahun_terbit" class="form-control" required>
  </div>
  <button class="btn btn-primary">Simpan</button>
  <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
