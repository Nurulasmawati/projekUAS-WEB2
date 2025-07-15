@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Edit Mata Kuliah</h4>

    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Kode Mata Kuliah</label>
            <input type="text" name="kode" class="form-control" value="{{ $mk->kode }}" required>
        </div>
        <div class="mb-3">
            <label>Nama Mata Kuliah</label>
            <input type="text" name="nama" class="form-control" value="{{ $mk->nama }}" required>
        </div>
        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control" value="{{ $mk->sks }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection