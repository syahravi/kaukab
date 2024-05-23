@extends('layouts.admin')

@section('app')
<div class="container">
    <h1>Nilai Normalisasi</h1>
    <a href="{{ route('admin.normalisasi.create') }}" class="btn btn-primary">Tambah Nilai</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th rowspan="2">Nomor</th>
                <th rowspan="2">Alternatif</th>
                <th colspan="7">Kriteria</th>
                <th rowspan="2">Aksi</th>
            </tr>
            <tr>
                @foreach ($kriteria as $item)
                    <th>{{ $item->simbol }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @forelse ($normalisasi as $item)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $item->santri->nama_santri }}</td>
                    <td>{{ $item->kriteria_1 / $c1 }}</td>
                    <td>{{ $item->kriteria_2 / $c2 }}</td>
                    <td>{{ $item->kriteria_3 / $c3 }}</td>
                    <td>{{ $item->kriteria_4 / $c4 }}</td>
                    <td>{{ $item->kriteria_5 / $c5 }}</td>
                    <td>{{ $item->kriteria_6 / $c6 }}</td>
                    <td>{{ $item->kriteria_7 / $c7 }}</td>
                    <td>
                        <a href="{{ route('admin.normalisasi.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.normalisasi.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="text-center">Tidak ada data normalisasi</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
