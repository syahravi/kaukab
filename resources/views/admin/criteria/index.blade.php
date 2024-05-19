@extends('layouts.admin')

@section('app')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Criteria List
                        <a href="{{ route('admin.criteria.create') }}" class="btn btn-primary btn-sm float-right">Add New Criteria</a>
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
                                    <th>#</th>
                                    <th>Kriteria</th>
                                    <th>Simbol</th>
                                    <th>Bobot</th>
                                    <th>Type</th>
                                    <th>Actions</th>
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
                                            <a href="{{ route('admin.criteria.edit', $criterion->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('admin.criteria.destroy', $criterion->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this criteria?')">Delete</button>
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
