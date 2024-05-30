@extends('layouts.pages')

@section('app')
<div class="container mx-auto pt-7 pb-36 px-4">
    <h1 class="text-4xl font-bold mb-6 text-center">Nilai Akhir</h1>
    
        
    <a href="{{ route('admin.nilai-akhir.downloadPDF') }}" class="btn btn-primary mb-3">Unduh Data Nilai Akhir </a>
      
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full">
            <thead class="bg-blue-100">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">No</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Nama Santri</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Nilai Akhir</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($penilaians as $penilaian)
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $penilaian->santri->nama_santri }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ number_format($penilaian->nilai_akhir, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
