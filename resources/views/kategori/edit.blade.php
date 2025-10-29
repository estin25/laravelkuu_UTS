@extends('layouts.app')
@section('title','Edit Kategori')
@section('content')
<h3 class="mb-4">✏️ Edit Kategori</h3>

<form method="POST" action="{{ route('kategori.update',$kategori->id) }}">
     @csrf
     @method('PUT')
     <div class="mb-3">
        <label>Nama Kategori</label>
        <input type="text" name="nama_kategori" class="form-control" value="{{ $kategori->nama_kategori }}" required>
  </div>
  <button class="btn btn-success">Perbarui</button>
  <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
  </form>
@endsection