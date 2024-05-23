<!DOCTYPE html>
<html>
<head>
    <title>Penilaian PDF</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            margin: 0;
            padding: 0;
            background: #ffffff;
        }
        .container {
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }
        .section-title {
            font-size: 20px;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .info {
            margin-bottom: 20px;
        }
        .info p {
            margin: 5px 0;
            font-size: 16px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Detail Penilaian</h1>
        </div>

        <div class="info">
            <p><strong>Nama Santri:</strong> {{ $penilaian->santri->nama_santri }}</p>
            <p><strong>Nilai Akhir:</strong> {{ $penilaian->preferensi }}</p>
        </div>

        @if($normalisasi)
        <div class="section-title">Nilai Kriteria</div>
        <table>
            <thead>
                <tr>
                    <th>Kriteria</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Kriteria 1</td>
                    <td>{{ $normalisasi->kriteria_1 }}</td>
                </tr>
                <tr>
                    <td>Kriteria 2</td>
                    <td>{{ $normalisasi->kriteria_2 }}</td>
                </tr>
                <tr>
                    <td>Kriteria 3</td>
                    <td>{{ $normalisasi->kriteria_3 }}</td>
                </tr>
                <tr>
                    <td>Kriteria 4</td>
                    <td>{{ $normalisasi->kriteria_4 }}</td>
                </tr>
                <tr>
                    <td>Kriteria 5</td>
                    <td>{{ $normalisasi->kriteria_5 }}</td>
                </tr>
                <tr>
                    <td>Kriteria 6</td>
                    <td>{{ $normalisasi->kriteria_6 }}</td>
                </tr>
                <tr>
                    <td>Kriteria 7</td>
                    <td>{{ $normalisasi->kriteria_7 }}</td>
                </tr>
            </tbody>
        </table>
        @else
        <p>Data normalisasi tidak ditemukan.</p>
        @endif
    </div>
</body>
</html>
