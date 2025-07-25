<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $fillable = ['mahasiswa_id', 'mata_kuliah_id', 'nilai'];

    public function mahasiswa() {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function mataKuliah() {
        return $this->belongsTo(MataKuliah::class, 'mata_kuliah_id');
    }
}
?>