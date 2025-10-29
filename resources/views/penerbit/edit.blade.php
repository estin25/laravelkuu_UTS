@extends('layouts.app')
@section('title','Edit Penerbit')
@section('content')
<h3 class="mb-4">✏️ Edit Penerbit</h3>

<form method="POST" action="{{ route('penerbit.update',$penerbit->id) }}">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label>Nama Penerbit</label>
    <input type="text" name="nama_penerbit" value="{{ $penerbit->nama_penerbit }}" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control" required>{{ $penerbit->alamat }}</textarea>
  </div>
  <button class="btn btn-success">Perbarui</button>
  <a href="{{ route('penerbit.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
