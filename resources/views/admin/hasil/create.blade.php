@extends('layouts.admin')

@section('app')
    <div class="container">
        <h1>Tambah Normalisasi</h1>
        <form action="{{ route('admin.nilai-akhir.store') }}" method="POST">
            @csrf
            <div class='form-group'>
                <label for="nama_santri">Santri</label>
                <select name="alternatif" id="nama_santri" class="form-control">
                    <option selected disabled>Pilih Santri</option>
                    @foreach($santri as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_santri }}</option>
                    @endforeach
                </select>
            </div>
            {{-- @foreach ($kriteria as $item)
                <div class='form-group'>
                    <label for="kriteria_1">{{ $item->simbol }}: (Skala {{ $item->type == 'Benefit' ? '0-100': '0-10' }}) {{ $item->kriteria }}</label>
                    <input type="number" name="kriteria_{{ $loop->index + 1 }}" class="form-control" required>
                </div>
            @endforeach --}}
            {{-- <div class='form-group'>
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
            </div> --}}
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('admin.normalisasi.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection