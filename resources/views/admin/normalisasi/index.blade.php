@extends('layouts.admin')

@section('app')
    <div class="container">
        <h1>Nilai Normalisasi</h1>
        <a href="{{ route('admin.normalisasi.create') }}" class="btn btn-primary mb-3">Tambah Nilai</a>

        <!-- Tabel Data Asli -->
        <h2>Data Asli</h2>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th></th>
                    <th>Alternatif</th>
                    @foreach ($kriteria as $item)
                        <th>{{ $item->simbol }}</th>
                    @endforeach
                    <th rowspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($penilian as $santriId => $penilianGroup)
                    @php
                        $santri = $santriList->find($santriId);
                    @endphp
                    <tr>
                        <td>A{{ $loop->index + 1 }}</td>
                        <td>{{ $santri->nama_santri }}</td>

                        @foreach ($kriteria as $k)
                            @php
                                $nilai = $penilianGroup->where('criteria_id', $k->id)->first()->nilai ?? 'N/A';
                            @endphp
                            <td>{{ $nilai }}</td>
                        @endforeach
                        <td>
                            <a href="{{ route('admin.normalisasi.edit', $santriId) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.normalisasi.destroy', $santriId) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="{{ count($kriteria) + 2 }}" class="text-center">Tidak ada data asli</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Tabel Data Normalisasi -->
        <h2>Data Normalisasi</h2>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th rowspan="2">Nomor</th>
                    <th rowspan="2">Alternatif</th>
                    <th colspan="{{ count($kriteria) }}">Kriteria</th>
                </tr>
                <tr>
                    @foreach ($kriteria as $item)
                        <th>{{ $item->simbol }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @forelse ($penilian as $santriId => $penilianGroup)
                    @php
                        $santri = $santriList->find($santriId);
                    @endphp
                    <tr>
                        <td>A{{ $loop->index + 1 }}</td>
                        <td>{{ $santri->nama_santri }}</td>
                        @foreach ($kriteria as $k)
                            @php
                                $normalizedValue = $normalizedData[$santriId][$k->id] ?? 'N/A';
                            @endphp
                            <td>{{ is_numeric($normalizedValue) ? number_format($normalizedValue, 2, ',', '') : $normalizedValue }}
                            </td>
                        @endforeach
                    </tr>
                @empty
                    <tr>
                        <td colspan="{{ count($kriteria) + 2 }}" class="text-center">Tidak ada data normalisasi</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
