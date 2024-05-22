@extends('layouts.admin')

@section('app')
    <div class="container">
        <h1>Tambah Normalisasi</h1>
        <form action="{{ route('admin.normalisasi.store') }}" method="POST">
            @csrf
            <div class='form-group'>
                <label for="kriteria_1">Alternatif</label>
                <select name="alternatif" id="kriteria_1" class="form-control">
                    <option selected disabled>Pilih alternatif</option>
                    @foreach($santri as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_santri }}</option>
                    @endforeach
                </select>
            </div>
            <div class='form-group'>
                <label for="kriteria_1">Kriteria 1:</label>
                <select name="kriteria_1" id="kriteria_1" class="form-control">
                    <option selected disabled>Pilih kriteria</option>
                    @foreach($kriteria as $item)
                        <option value="{{ $item->id }}">{{ $item->simbol . ' ' . $item->type . ' - ' . $item->kriteria }}</option>
                    @endforeach
                </select>
            </div>
            <div class='form-group'>
                <label for="kriteria_2">Kriteria 2:</label>
                <select name="kriteria_2" id="kriteria_2" class="form-control">
                    <option selected disabled>Pilih kriteria</option>
                    @foreach($kriteria as $item)
                        <option value="{{ $item->id }}">{{ $item->simbol . ' ' . $item->type . ' - ' . $item->kriteria }}</option>
                    @endforeach
                </select>
            </div>
            <div class='form-group'>
                <label for="kriteria_3">Kriteria 3:</label>
                <select name="kriteria_3" id="kriteria_3" class="form-control">
                    <option selected disabled>Pilih kriteria</option>
                    @foreach($kriteria as $item)
                        <option value="{{ $item->id }}">{{ $item->simbol . ' ' . $item->type . ' - ' . $item->kriteria }}</option>
                    @endforeach
                </select>
            </div>
            <div class='form-group'>
                <label for="kriteria_4">Kriteria 4:</label>
                <select name="kriteria_4" id="kriteria_4" class="form-control">
                    <option selected disabled>Pilih kriteria</option>
                    @foreach($kriteria as $item)
                        <option value="{{ $item->id }}">{{ $item->simbol . ' ' . $item->type . ' - ' . $item->kriteria }}</option>
                    @endforeach
                </select>
            </div>
            <div class='form-group'>
                <label for="kriteria_5">Kriteria 5:</label>
                <select name="kriteria_5" id="kriteria_5" class="form-control">
                    <option selected disabled>Pilih kriteria</option>
                    @foreach($kriteria as $item)
                        <option value="{{ $item->id }}">{{ $item->simbol . ' ' . $item->type . ' - ' . $item->kriteria }}</option>
                    @endforeach
                </select>
            </div>
            <div class='form-group'>
                <label for="kriteria_6">Kriteria 6:</label>
                <select name="kriteria_6" id="kriteria_6" class="form-control">
                    <option selected disabled>Pilih kriteria</option>
                    @foreach($kriteria as $item)
                        <option value="{{ $item->id }}">{{ $item->simbol . ' ' . $item->type . ' - ' . $item->kriteria }}</option>
                    @endforeach
                </select>
            </div>
            <div class='form-group'>
                <label for="kriteria_7">Kriteria 7:</label>
                <select name="kriteria_7" id="kriteria_7" class="form-control">
                    <option selected disabled>Pilih kriteria</option>
                    @foreach($kriteria as $item)
                        <option value="{{ $item->id }}">{{ $item->simbol . ' ' . $item->type . ' - ' . $item->kriteria }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('admin.normalisasi.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
