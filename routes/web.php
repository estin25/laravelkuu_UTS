<?php

use Illuminate\Support\Facades\Route;

// Halaman utama (Home)
Route::get('/', function () {
    return view('home');
})->name('home');

// Halaman About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Halaman Books (dummy data)
Route::get('/books', function () {
    $books = [
        ['title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata'],
        ['title' => 'Negeri 5 Menara', 'author' => 'Ahmad Fuadi'],
        ['title' => 'Bumi Manusia', 'author' => 'Pramoedya Ananta Toer'],
    ];
    return view('books', compact('books'));
})->name('books');

// Halaman Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
