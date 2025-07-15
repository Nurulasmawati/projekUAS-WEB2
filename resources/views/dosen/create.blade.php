@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Tambah Dosen</h4>

    <form action="{{ route('dosen.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>NIDN</label>
            <input type="text" name="nidn" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Prodi</label>
            <input type="text" name="prodi" class="form-control" required>
        </div>
        <div class="form-group">
    <label for="keahlian">Keahlian</label>
    <input type="text" name="keahlian" id="keahlian" class="form-control" required>
</div>

        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
