@extends('layouts.admin')

@section('app')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       <h1>Data Kriteria </h1> 
                        <a href="{{ route('admin.criteria.create') }}" class="btn btn-primary btn-md float-right">Tambah</a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kriteria</th>
                                    <th>Simbol</th>
                                    <th>Bobot</th>
                                    <th>Tipe</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($criteria as $criterion)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $criterion->kriteria }}</td>
                                        <td>{{ $criterion->simbol }}</td>
                                        <td>{{ $criterion->bobot }}</td>
                                        <td>{{ $criterion->type }}</td>
                                        <td>
                                            <a href="{{ route('admin.criteria.edit', $criterion->id) }}" class="btn btn-primary btn-sm">Ubah</a>
                                            <form action="{{ route('admin.criteria.destroy', $criterion->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this criteria?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
