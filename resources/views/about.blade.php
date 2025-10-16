@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="text-center">
    <h2>Tentang Aplikasi</h2>
    <p class="lead mt-3">
        Aplikasi ini merupakan sistem manajemen sederhana untuk mengelola data buku, pengguna, dan kategori.
        Dibangun menggunakan <strong>Laravel</strong> dengan tampilan yang ringan dan mudah digunakan.
    </p>
    <p>
        Tujuannya adalah memberikan pengalaman belajar sekaligus contoh aplikasi berbasis web yang dinamis dan terstruktur.
    </p>
    <p class="mt-3">Dikembangkan oleh <strong>{{ env('APP_AUTHOR', 'Estin') }}</strong> 💕</p>
</div>
@endsection
