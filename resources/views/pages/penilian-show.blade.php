@extends('layouts.pages')

@section('app')
<div class="container mx-auto py-4">
    <div class="bg-white shadow-md rounded-lg p-6" data-aos="fade-up">
        <h2 class="text-xl font-semibold mb-2">Nama Santri: {{ $penilaian->santri->nama_santri }}</h2>
        <p class="mb-4">Nilai Akhir: {{ number_format($penilaian->nilai_akhir, 2) }}</p>

        @if($penilian->isNotEmpty())
        <h3 class="text-lg font-semibold mb-4">Nilai Kriteria:</h3>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kriteria</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nilai</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($penilian as $item)
                <tr data-aos="fade-up">
                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->criteria->simbol }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->nilai }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="text-red-500">Data penilian tidak ditemukan.</p>
        @endif

        <div class="mt-4 space-x-4" data-aos="fade-up" data-aos-delay="350">
            <a href="{{ route('penilian') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded">Kembali</a>
            <a href="{{ route('penilaian.download', $penilaian->santri->nama_santri) }}" class="inline-block bg-green-500 text-white px-4 py-2 rounded">Download</a>
        </div>
    </div>
</div>
@endsection
