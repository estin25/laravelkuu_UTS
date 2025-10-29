@extends('layouts.app')
@section('title','Buku')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>📘 Daftar Buku</h2>
  <a href="{{ route('buku.create') }}" class="btn btn-success">+ Tambah Buku</a>
</div>

<form method="GET" action="{{ route('buku.index') }}" class="mb-3">
  <input type="text" name="search" value="{{ $search }}" class="form-control" placeholder="Cari buku...">
</form>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      <th>No</th> {{-- ✅ Ubah dari "ID" menjadi "No" --}}
      <th>Judul</th>
      <th>Kategori</th>
      <th>Penerbit</th>
      <th>Tahun Terbit</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    {{-- ✅ Tambahkan $index untuk menghitung nomor urut --}}
    @foreach($bukus as $index => $buku)
    <tr>
      {{-- ✅ Ganti $buku->id menjadi nomor urut dinamis --}}
      <td>{{ $bukus->firstItem() + $index }}</td>
      <td>{{ $buku->judul }}</td>
      <td>{{ $buku->kategori->nama_kategori }}</td>
      <td>{{ $buku->penerbit->nama_penerbit }}</td>
      <td>{{ $buku->tahun_terbit }}</td>
      <td width="180">
        <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="d-inline">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus buku ini?')">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{-- Pagination --}}
{{ $bukus->links() }}
@endsection
