@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Kartu Hasil Studi (KHS)</h4>
    <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
    <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>

    <a href="{{ route('khs.cetak', $mahasiswa->id) }}" class="btn btn-success mb-3" target="_blank">Cetak KHS</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilai as $n)
            <tr>
                <td>{{ $n->mataKuliah->nama ?? '-' }}</td>
                <td>{{ $n->mataKuliah->sks ?? '-' }}</td>
                <td>{{ $n->nilai }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
