<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $bukus = Buku::with(['kategori','penerbit'])
                    ->where('judul','like',"%$search%")
                    ->paginate(5);
        return view('buku.index', compact('bukus','search'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        $penerbits = Penerbit::all();
        return view('buku.create', compact('kategoris','penerbits'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'kategori_id'=>'required',
            'penerbit_id'=>'required',
            'tahun_terbit'=>'required|integer'
        ]);
        Buku::create($request->all());
        return redirect()->route('buku.index')->with('success','Buku berhasil ditambahkan');
    }

    public function edit(Buku $buku)
    {
        $kategoris = Kategori::all();
        $penerbits = Penerbit::all();
        return view('buku.edit', compact('buku','kategoris','penerbits'));
    }

    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'judul'=>'required',
            'kategori_id'=>'required',
            'penerbit_id'=>'required',
            'tahun_terbit'=>'required|integer'
        ]);
        $buku->update($request->all());
        return redirect()->route('buku.index')->with('success','Buku diperbarui');
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')->with('success','Buku dihapus');
    }
}
