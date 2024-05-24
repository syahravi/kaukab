@extends('layouts.pages')

@section('app')
<div class="container mx-auto pt-7 pb-36 px-4">
    <h1 class="text-4xl font-bold mb-6 text-center">Daftar Penilaian</h1>
    
        
    <a href="{{ route('admin.nilai-akhir.downloadPDF') }}" class="btn btn-primary mb-3">Download PDF</a>
      
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full">
            <thead class="bg-blue-100">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">#</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Nama Santri</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Nilai Akhir</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Detail</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($penilaians as $penilaian)
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $penilaian->santri->nama_santri }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ number_format($penilaian->nilai_akhir, 2) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('penilaian.show', $penilaian->santri->nama_santri) }}" class="text-blue-500 hover:underline">Lihat Detail</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('penilaian.download', $penilaian->santri->nama_santri) }}" class="inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300">Download</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
