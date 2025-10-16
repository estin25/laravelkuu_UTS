@extends('layouts.app')

@section('title', 'Books')

@section('content')
<h2 class="mb-3">📚 Daftar Buku Dummy</h2>
<div class="row">
    @foreach($books as $book)
    <div class="col-md-4 mb-3">
        <div class="card p-3">
            <h5>{{ $book['title'] }}</h5>
            <p class="text-muted">Penulis: {{ $book['author'] }}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection
