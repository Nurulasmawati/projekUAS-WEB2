@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Daftar Jadwal Kuliah</h4>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('jadwal.create') }}" class="btn btn-primary mb-3">Tambah Jadwal</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Hari</th>
                <th>Jam</th>
                <th>Mata Kuliah</th>
                <th>Dosen</th>
                <th>Ruang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwals as $jadwal)
            <tr>
                <td>{{ $jadwal->hari }}</td>
                <td>{{ $jadwal->jam }}</td>
                <td>{{ $jadwal->matakuliah->nama ?? '-' }}</td>
                <td>{{ $jadwal->dosen->nama ?? '-' }}</td>
                <td>{{ $jadwal->ruang }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
