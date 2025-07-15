@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Edit Jadwal Kuliah</h4>

    <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control" value="{{ $jadwal->hari }}" required>
        </div>
        <div class="mb-3">
            <label>Jam</label>
            <input type="text" name="jam" class="form-control" value="{{ $jadwal->jam }}" required>
        </div>
        <div class="mb-3">
            <label>Mata Kuliah</label>
            <input type="text" name="mata_kuliah" class="form-control" value="{{ $jadwal->mata_kuliah }}" required>
        </div>
        <div class="mb-3">
            <label>Dosen</label>
            <input type="text" name="dosen" class="form-control" value="{{ $jadwal->dosen }}" required>
        </div>
        <div class="mb-3">
            <label>Ruang</label>
            <input type="text" name="ruang" class="form-control" value="{{ $jadwal->ruan }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection