@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Daftar Nilai</h4>

    <a href="{{ route('nilai.create') }}" class="btn btn-primary mb-3">Tambah Nilai</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilais as $nilai)
            <tr>
                <td>{{ $nilai->mahasiswa->nama ?? '-' }}</td>
                <td>{{ $nilai->mataKuliah->nama ?? '-' }}</td>
                <td>{{ $nilai->nilai }}</td>
                <td>
                    <a href="{{ route('nilai.khs', $nilai->mahasiswa_id) }}" class="btn btn-sm btn-info">Lihat KHS</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
