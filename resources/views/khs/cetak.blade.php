@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Kartu Hasil Studi (KHS)</h4>
    <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilai as $n)
            <tr>
                <td>{{ $n->matakuliah->nama }}</td>
                <td>{{ $n->nilai }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
