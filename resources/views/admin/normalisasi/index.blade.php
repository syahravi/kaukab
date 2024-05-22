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
            @foreach ($normalisasi as $item)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $item->alternatif }}</td>
                    <td>{{ $item->kriteria_1 }}</td>
                    <td>{{ $item->kriteria_2 }}</td>
                    <td>{{ $item->kriteria_3 }}</td>
                    <td>{{ $item->kriteria_4 }}</td>
                    <td>{{ $item->kriteria_5 }}</td>
                    <td>{{ $item->kriteria_6 }}</td>
                    <td>{{ $item->kriteria_7 }}</td>
                    <td>Edit</td>
                </tr>
            @endforeach

            {{-- @foreach($santri as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->nama_santri }}</td>
                <td>{{ $s->nama_asrama }}</td>
                <td>
                    <a href="{{ route('admin.santri.edit', $s->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.santri.destroy', $s->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach --}}
        </tbody>
    </table>
</div>
@endsection
