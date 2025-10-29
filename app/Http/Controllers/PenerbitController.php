<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $penerbits = Penerbit::where('nama_penerbit', 'like', "%$search%")->paginate(5);
        return view('penerbit.index', compact('penerbits', 'search'));
    }

    public function create() { return view('penerbit.create'); }

    public function store(Request $request)
    {
        $request->validate(['nama_penerbit' => 'required']);
        Penerbit::create($request->all());
        return redirect()->route('penerbit.index')->with('success', 'Penerbit ditambahkan');
    }

    public function edit(Penerbit $penerbit)
    {
        return view('penerbit.edit', compact('penerbit'));
    }

    public function update(Request $request, Penerbit $penerbit)
    {
        $request->validate(['nama_penerbit' => 'required']);
        $penerbit->update($request->all());
        return redirect()->route('penerbit.index')->with('success', 'Penerbit diperbarui');
    }

    public function destroy(Penerbit $penerbit)
    {
        $penerbit->delete();
        return redirect()->route('penerbit.index')->with('success', 'Penerbit dihapus');
    }
}
