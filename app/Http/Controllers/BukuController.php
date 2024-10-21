<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return response()->json(Kategori::all(), 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kategori' => 'required|unique:kategoris,nama_kategori|max:255',
        ]);

        $kategori = Kategori::create($validatedData);

        return response()->json($kategori, 201);
    }
}
