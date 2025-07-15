<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    // Tampilkan semua data mata kuliah
    public function index()
    {
        $data = MataKuliah::all();
        return view('matakuliah.index', compact('data'));
    }

    // Tampilkan form tambah mata kuliah
    public function create()
    {
        return view('matakuliah.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'sks'  => 'required|numeric'
        ]);

        MataKuliah::create($request->all());
        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $mk = MataKuliah::findOrFail($id);
        return view('matakuliah.edit', compact('mk'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'sks'  => 'required|numeric'
        ]);

        $mk = MataKuliah::findOrFail($id);
        $mk->update($request->all());
        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil diperbarui.');
    }

    // Hapus data
    public function destroy($id)
    {
        $mk = MataKuliah::findOrFail($id);
        $mk->delete();
        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil dihapus.');
    }
}
?>