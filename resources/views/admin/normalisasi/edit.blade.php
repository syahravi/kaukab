@extends('layouts.admin')

@section('app')
<div class="container">
    <h1>Edit Normalisasi</h1>
    <form action="{{ route('admin.normalisasi.update', $id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="alternatif">Alternatif</label>
            <select name="alternatif" id="alternatif" class="form-control" disabled>
                @foreach($santri as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $id ? 'selected' : '' }}>{{ $item->nama_santri }}</option>
                @endforeach
            </select>
        </div>
        
        @foreach ($kriteria as $item)
            @php
                $penilianItem = $penilian->where('criteria_id', $item->id)->first();
                $nilai = $penilianItem ? $penilianItem->nilai : '';
            @endphp
            <div class="form-group">
                <label for="nilai[{{ $item->id }}]">{{ $item->simbol }}: (Skala {{ $item->type == 'benefit' ? '0-100' : '0-10' }}) {{ $item->kriteria }}</label>
                <input type="text" name="nilai[{{ $item->id }}]" id="nilai[{{ $item->id }}]" class="form-control" value="{{ old('nilai.'.$item->id, $nilai) }}">
            </div>
        @endforeach

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.normalisasi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
