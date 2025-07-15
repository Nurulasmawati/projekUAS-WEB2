<!DOCTYPE html>
<html>
<head>
    <title>Cetak KHS</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid black; padding: 8px; text-align: center; }
    </style>
</head>
<body>
    <h2 align="center">Kartu Hasil Studi (KHS)</h2>
    <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
    <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>

    <table>
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

    <script>
        window.print();
    </script>
</body>
</html>
