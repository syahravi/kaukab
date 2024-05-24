<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian - {{ $penilaian->santri->nama_santri }}</title>
    <style>
        /* Styling sesuai kebutuhan untuk tampilan PDF */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Penilaian Santri - {{ $penilaian->santri->nama_santri }}</h1>

    <table>
        <thead>
            <tr>
                <th>Kriteria</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penilian as $pen)
            <tr>
                <td>{{ $pen->criteria->kriteria}}</td>
                <td>{{ $pen->nilai }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p>Nilai Akhir: {{ number_format($penilaian->nilai_akhir, 2) }}</p>
</body>
</html>
