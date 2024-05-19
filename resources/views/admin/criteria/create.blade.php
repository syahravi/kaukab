@extends('layouts.admin')

@section('app')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Add New Criteria
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('admin.criteria.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="kriteria">Kriteria</label>
                                <input type="text" class="form-control" id="kriteria" name="kriteria" value="{{ old('kriteria') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="bobot">Bobot</label>
                                <input type="number" step="any" class="form-control" id="bobot" name="bobot" value="{{ old('bobot') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select class="form-control" id="type" name="type" required>
                                    <option value="benefit" {{ old('type') == 'benefit' ? 'selected' : '' }}>Benefit</option>
                                    <option value="cost" {{ old('type') == 'cost' ? 'selected' : '' }}>Cost</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
