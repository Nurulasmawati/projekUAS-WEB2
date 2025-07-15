@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Tambah Mata Kuliah</h4>

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Kode Mata Kuliah</label>
            <input type="text" name="kode" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama Mata Kuliah</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control" required>
        </div>
        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection