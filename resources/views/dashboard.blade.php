@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="card shadow p-4" style="width: 400%; max-width: 500px;">
    <h3 class="text-center mb-4 text-primary fw-bold">SIAKAD</h3>
        <h3 class="text-center mb-20 text-primary fw-bold">SISTEM INFORMASI AKADEMIK</h3>
        <p class="text-center">Silahkan pilih menu di bawah ini:</p>

        <table class="table table-hover table-bordered text-center">
            <tbody>
                <tr>
                    <td><a href="{{ route('dosen.index') }}" class="btn btn-outline-primary w-100">Dosen</a></td>
                </tr>
                <tr>
                    <td><a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-primary w-100">Mahasiswa</a></td>
                </tr>
                <tr>
                    <td><a href="{{ route('matakuliah.index') }}" class="btn btn-outline-primary w-100">Mata Kuliah</a></td>
                </tr>
                <tr>
                    <td><a href="{{ route('jadwal.index') }}" class="btn btn-outline-primary w-100">Jadwal</a></td>
                </tr>
                <tr>
                    <td><a href="{{ route('nilai.index') }}" class="btn btn-outline-primary">Nilai</a></td>
                </tr>
            
            </tbody>
        </table>

        <form action="{{ route('logout') }}" method="POST" class="text-center mt-3">
            @csrf
            <button class="btn btn-danger w-100">Logout</button>
        </form>
    </div>
</div>
@endsection
