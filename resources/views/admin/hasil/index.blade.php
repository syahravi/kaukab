@extends('layouts.admin')

@section('app')
    <div class="container">
        <h1>Nilai Akhir Santri</h1>
        
        <a href="{{ route('admin.nilai-akhir.downloadPDF') }}" class="btn btn-primary mb-3">Unduh PDF</a>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Santri</th>
                    <th>Nilai Akhir</th>
                    
                </tr>
            </thead>
            <tbody>
                @forelse ($nilaiAkhir as $index => $nilai)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $nilai->santri->nama_santri }}</td>
                        <td>{{ number_format($nilai->nilai_akhir, 3, ',', '') }}</td>
                        
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Tidak ada nilai akhir yang tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
