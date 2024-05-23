@extends('layouts.admin')

@section('app')
    <div class="container">
        <h1>Edit Normalisasi</h1>
        <form action="{{ route('admin.normalisasi.update', $normalisasi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class='form-group'>
                <label for="alternatif">Alternatif</label>
                <select name="alternatif" id="alternatif" class="form-control" disabled>
                    @foreach($santri as $item)
                        <option value="{{ $item->id }}" {{ $normalisasi->santri_id == $item->id ? 'selected' : '' }}>
                            {{ $item->nama_santri }}
                        </option>
                    @endforeach
                </select>
            </div>
            @foreach ($kriteria as $item)
                <div class='form-group'>
                    <label for="kriteria_{{ $loop->index + 1 }}">{{ $item->simbol }}: (Skala {{ $item->type == 'Benefit' ? '0-100' : '0-10' }}) {{ $item->kriteria }}</label>
                    <input type="number" name="kriteria_{{ $loop->index + 1 }}" id="kriteria_{{ $loop->index + 1 }}" class="form-control" value="{{ $normalisasi->{'kriteria_' . ($loop->index + 1)} }}" required>
                </div>
            @endforeach

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('admin.normalisasi.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
