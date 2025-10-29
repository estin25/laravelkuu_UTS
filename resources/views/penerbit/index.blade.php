@extends('layouts.app')
@section('title','Penerbit')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>🏢 Daftar Penerbit</h2>
  <a href="{{ route('penerbit.create') }}" class="btn btn-success">+ Tambah Penerbit</a>
</div>

<form method="GET" action="{{ route('penerbit.index') }}" class="mb-3">
  <input type="text" name="search" value="{{ $search }}" class="form-control" placeholder="Cari penerbit...">
</form>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      <th>No</th> {{-- ✅ Ganti dari ID menjadi No --}}
      <th>Nama Penerbit</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    {{-- ✅ Tambahkan index agar nomor berurutan --}}
    @foreach($penerbits as $index => $p)
    <tr>
      {{-- ✅ Ganti ID dengan nomor urut dinamis --}}
      <td>{{ $penerbits->firstItem() + $index }}</td>
      <td>{{ $p->nama_penerbit }}</td>
      <td>{{ $p->alamat }}</td>
      <td width="180">
        <a href="{{ route('penerbit.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('penerbit.destroy', $p->id) }}" method="POST" class="d-inline">
          @csrf @method('DELETE')
          <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus penerbit ini?')">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{-- ✅ Pagination --}}
{{ $penerbits->links() }}
@endsection
