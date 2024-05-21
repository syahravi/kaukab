@extends('layouts.admin')

@section('app')
<div class="container">
    <h1>Nilai Normalisasi</h1>
    <a href="{{ route('admin.santri.create') }}" class="btn btn-primary">Tambah Nilai</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Alternatif</th>
                <th colspan="7">Kriteria</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ravi</td>
                <td>1saaaa</td>
                <td>2saaaa</td>
                <td>3saaaa</td>
                <td>4saaaa</td>
                <td>5saaaa</td>
                <td>6saaaa</td>
                <td>7saaaa</td>
                <td>Edit</td>
            </tr>

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
