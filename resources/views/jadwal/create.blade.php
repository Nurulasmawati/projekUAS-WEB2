@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Tambah Jadwal Kuliah</h4>

    <form action="{{ route('jadwal.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Jam</label>
            <input type="text" name="jam" class="form-control" required>
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
            <label>Dosen</label>
            <select name="dosen_id" class="form-control" required>
                <option value="">-- Pilih Dosen --</option>
                @foreach($dosens as $dosen)
                    <option value="{{ $dosen->id }}">{{ $dosen->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Ruang</label>
            <input type="text" name="ruang" class="form-control" required> <!-- ✅ ganti dari 'ruangan' ke 'ruang' -->
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
