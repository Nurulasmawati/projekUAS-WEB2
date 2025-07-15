@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Edit Dosen</h4>

    {{-- Tampilkan validasi jika ada --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label>NIDN</label>
            <input type="text" name="nidn" class="form-control" value="{{ $dosen->nidn }}" required>
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $dosen->nama }}" required>
        </div>

        <div class="mb-3">
            <label>Prodi</label>
            <input type="text" name="prodi" class="form-control" value="{{ $dosen->prodi }}" required>
        </div>

        <div class="mb-3">
            <label>Keahlian</label>
            <input type="text" name="keahlian" class="form-control" value="{{ $dosen->keahlian }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
