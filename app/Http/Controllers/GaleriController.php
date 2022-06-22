<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    // Index Function
    public function index()
    {
        $galeris = new Galeri();
        $galeris = $galeris->get();
        return view('pages.galeri.index', ['galeris' => $galeris]);
    }

    // Create Function
    public function create()
    {
        return view('pages.galeri.create');
    }

    // Business logic Create Function
    public function store(Request $request)
    {
        $galeri = new Galeri();
        $galeri->nama = $request->nama;
        $galeri->ukuran = $request->ukuran;
        $galeri->save();
        return redirect('galeri.index')->with('message', 'Data Berhasil Ditambahkan');
    }

    // Edit Function
    public function edit($id)
    {
        $galeri = Galeri::find($id);
        return view('pages.galeri.edit', ['galeri' => $galeri]);
    }

    // Business logic Edit Function
    public function update(Request $request, $id)
    {
        $galeri = Galeri::find($id);
        $galeri->nama = isset($request->nama) ? $request->nama : $galeri->nama;
        $galeri->ukuran = isset($request->ukuran) ? $request->ukuran : $galeri->ukuran;
        $galeri->save();
        return redirect('galeri')->with('message', 'Data Berhasil Diupdate');
    }

    // Delete Function
    public function delete($id)
    {
        $galeri = Galeri::find($id);
        $galeri->delete();
        return redirect('galeri')->with('message', 'Data Berhasil Dihapus');
    }
}