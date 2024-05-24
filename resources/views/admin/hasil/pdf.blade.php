<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Akhir Santri</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Nilai Akhir Santri</h1>
    <table>
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama Santri</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilaiAkhir as $nilai)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $nilai->santri->nama_santri }}</td>
                    <td>{{ number_format($nilai->nilai_akhir, 3, ',', '') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
