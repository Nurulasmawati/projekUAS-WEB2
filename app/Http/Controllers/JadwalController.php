<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\MataKuliah;
use App\Models\Dosen;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::with('dosen','matakuliah')->get();
        return view('jadwal.index', compact('jadwals'));
    }

    public function create()
    {
        $matakuliahs = MataKuliah::all();
        $dosens = Dosen::all(); // ambil semua dosen
        return view('jadwal.create', compact('matakuliahs','dosens'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'hari' => 'required',
            'jam' => 'required',
            'mata_kuliah_id' => 'required|exists:mata_kuliahs,id',
            'dosen_id' => 'required|exists:dosens,id',
            'ruang' => 'required',
        ]);
        
        Jadwal::create([
        'hari' => $request->hari,
        'jam' => $request->jam,
        'mata_kuliah_id' => $request->mata_kuliah_id,
        'dosen_id' => $request->dosen_id, // ini penting
        'ruang' => $request->ruang,
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }
}
?>
