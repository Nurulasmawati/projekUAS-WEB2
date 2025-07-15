<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = ['mata_kuliah_id', 'dosen_id', 'hari', 'jam', 'ruang'];

    public function mataKuliah()
{
    return $this->belongsTo(\App\Models\MataKuliah::class);
}

public function dosen()
{
    return $this->belongsTo(\App\Models\Dosen::class);
}
}
?>
