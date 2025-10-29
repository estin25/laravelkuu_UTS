<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung total data di masing-masing tabel
        $totalBuku = Buku::count();
        $totalKategori = Kategori::count();
        $totalPenerbit = Penerbit::count();

        // Kirim ke view
        return view('dashboard', compact('totalBuku', 'totalKategori', 'totalPenerbit'));
    }
}
