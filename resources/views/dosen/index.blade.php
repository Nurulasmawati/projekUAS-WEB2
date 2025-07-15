@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Daftar Dosen</h4>
    <a href="{{ route('dosen.create') }}" class="btn btn-primary mb-3">Tambah Dosen</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dosens as $dosen)
            <tr>
                <td>{{ $dosen->nidn }}</td>
                <td>{{ $dosen->nama }}</td>
                <td>{{ $dosen->prodi }}</td>
                <td>
                    <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
