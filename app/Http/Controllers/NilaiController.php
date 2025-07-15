<?php

namespace App\Http\Controllers;
use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilais = Nilai::with(['mahasiswa', 'mataKuliah'])->get();
        return view('nilai.index', compact('nilais'));
    }

    public function create()
    {
        $mahasiswas = Mahasiswa::all();
        $matakuliahs = MataKuliah::all();
        return view('nilai.create', compact('mahasiswas', 'matakuliahs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_id' => 'required|exists:mahasiswas,id',
            'mata_kuliah_id' => 'required|exists:mata_kuliahs,id',
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        Nilai::create($request->all());

        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil disimpan.');
    }

    public function khs($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $nilai = Nilai::where('mahasiswa_id', $id)->with('mataKuliah')->get();

        return view('nilai.khs', compact('mahasiswa', 'nilai'));
    }

    public function cetak($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $nilai = Nilai::where('mahasiswa_id', $id)->with('mataKuliah')->get();

        return view('nilai.khs_cetak', compact('mahasiswa', 'nilai'));
    }
}

