@extends('layouts.admin')

@section('app')
    <div class="container">
        <h1>Tambah Normalisasi</h1>
        <form action="{{ route('admin.normalisasi.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="santri_id">Alternatif</label>
                <select name="santri_id" id="santri_id" class="form-control" required>
                    <option selected disabled>Pilih alternatif</option>
                    @foreach($santri as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_santri }}</option>
                    @endforeach
                </select>
                @error('santri_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            @foreach ($kriteria as $item)
                <div class="form-group">
                    <label for="nilai_{{ $item->id }}">{{ $item->simbol }}: (Skala {{ $item->type == 'benefit' ? '0-100': '0-10' }}) {{ $item->kriteria }}</label>
                    <input type="number" name="nilai[{{ $item->id }}]" class="form-control" required>
                    @error('nilai.' . $item->id)
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            @endforeach
           
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('admin.normalisasi.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
