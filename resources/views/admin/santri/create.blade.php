@extends('layouts.admin')

@section('app')
<div class="container">
    <h1>Tambah Santri</h1>
    <form action="{{ route('admin.santri.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_santri">Nama Santri</label>
            <input type="text" name="nama_santri" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama_asrama">Nama Asrama</label>
            <input type="text" name="nama_asrama" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.santri.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
