@extends('layouts.app')
@section('title','Edit Buku')
@section('content')
<h3 class="mb-4">✏️ Edit Buku</h3>

<form method="POST" action="{{ route('buku.update',$buku->id) }}">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label>Judul Buku</label>
    <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}" required>
  </div>
  <div class="mb-3">
    <label>Kategori</label>
    <select name="kategori_id" class="form-control" required>
      @foreach($kategoris as $k)
        <option value="{{ $k->id }}" @if($buku->kategori_id==$k->id) selected @endif>
          {{ $k->nama_kategori }}
        </option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label>Penerbit</label>
    <select name="penerbit_id" class="form-control" required>
      @foreach($penerbits as $p)
        <option value="{{ $p->id }}" @if($buku->penerbit_id==$p->id) selected @endif>
          {{ $p->nama_penerbit }}
        </option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label>Tahun Terbit</label>
    <input type="number" name="tahun_terbit" class="form-control" value="{{ $buku->tahun_terbit }}" required>
  </div>
  <button class="btn btn-success">Perbarui</button>
  <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
