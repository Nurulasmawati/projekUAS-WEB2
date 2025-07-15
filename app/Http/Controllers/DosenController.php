<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
            'keahlian' => 'required',
        ]);

        Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'prodi' => $request->prodi, 
            'keahlian' => $request->keahlian,
        ]);

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil disimpan.');
    }

    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nidn' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
            'keahlian' => 'required',
        ]);

        $dosen = Dosen::findOrFail($id);
        $dosen->update([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'keahlian' => $request->keahlian,
        ]);

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil dihapus.');
    }
}
?>
