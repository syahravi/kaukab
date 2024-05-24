@extends('layouts.admin')

@section('app')
<div class="container">
    <h1>Data Santri</h1>
    <a href="{{ route('admin.santri.create') }}" class="btn btn-primary">Tambah Santri</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Simbol</th>
                <th>Nama Santri</th>
                <th>Nama Asrama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($santri as $s)
            <tr>
                <td>A{{ $s->id }}</td>
                <td>{{ $s->nama_santri }}</td>
                <td>{{ $s->nama_asrama }}</td>
                <td>
                    <a href="{{ route('admin.santri.edit', $s->id) }}" class="btn btn-warning">Ubah</a>
                    <form action="{{ route('admin.santri.destroy', $s->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
