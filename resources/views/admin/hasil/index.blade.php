@extends('layouts.admin')

@section('app')
<div class="container">
    <h1>Nilai Akhir</h1>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
            <th>Nomor</th>
            <th>Nama Santri</th>
            <th>Preferensi</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai_akhir as $item)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $item->santri->nama_santri }}</td>
                    <td>{{ $item->preferensi }}</td>
                </tr>
            @endforeach
            {{-- @foreach ($normalisasi as $item)
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
                    <td>Edit</td>
                </tr>
            @endforeach --}}

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
