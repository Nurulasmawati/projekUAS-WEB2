@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Tambah Nilai Mahasiswa</h4>

    <form action="{{ route('nilai.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Mahasiswa</label>
            <select name="mahasiswa_id" class="form-control" required>
                <option value="">-- Pilih Mahasiswa --</option>
                @foreach($mahasiswas as $mhs)
                    <option value="{{ $mhs->id }}">{{ $mhs->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Mata Kuliah</label>
            <select name="mata_kuliah_id" class="form-control" required>
                <option value="">-- Pilih Mata Kuliah --</option>
                @foreach($matakuliahs as $mk)
                    <option value="{{ $mk->id }}">{{ $mk->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Nilai</label>
            <input type="number" name="nilai" class="form-control" required min="0" max="100">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection