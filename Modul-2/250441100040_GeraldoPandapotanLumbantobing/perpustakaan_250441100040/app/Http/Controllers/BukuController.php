<?php

namespace App\Http\Controllers;

use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();

        return view('buku.index', compact('buku'));
    }

    public function show($id)
    {
        $detailBuku = Buku::findOrFail($id);

        return view('buku.show', compact('detailBuku'));
    }
}