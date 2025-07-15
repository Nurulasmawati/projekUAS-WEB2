<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Nilai;

class KHSController extends Controller
{
    public function cetak($mahasiswa_id)
    {
        $mahasiswa = Mahasiswa::findOrFail($mahasiswa_id);
        $nilai = Nilai::where('mahasiswa_id', $mahasiswa_id)->get();

        return view('khs.cetak', compact('mahasiswa', 'nilai'));
    }
}
?>