<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return view('kategori');
    }

    public function admin()
    {
        $query = Kategori::all();

        return view('adminkategori', compact('query'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:kategori,slug',
            'deskripsi' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
            'urutan' => 'nullable|integer|min:0',
            'is_active' => 'nullable',
        ]);

        Kategori::create([
            'nama' => $request->nama,
            'slug' => $request->slug,
            'deskripsi' => $request->deskripsi,
            'icon' => $request->icon ?? 'category',
            'urutan' => $request->urutan ?? 0,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil disimpan.');
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:kategori,slug,' . $id,
            'deskripsi' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
            'urutan' => 'nullable|integer|min:0',
            'is_active' => 'nullable',
        ]);

        $kategori->update([
            'nama' => $request->nama,
            'slug' => $request->slug,
            'deskripsi' => $request->deskripsi,
            'icon' => $request->icon ?? 'category',
            'urutan' => $request->urutan ?? 0,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil dihapus.');
    }
}
