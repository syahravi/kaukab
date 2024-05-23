@extends('layouts.pages')

@section('app')
<div class="container mx-auto pt-7 pb-36 px-4">
    <h1 class="text-4xl font-bold mb-6 text-center">Daftar Penilaian</h1>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full">
            <thead class="bg-blue-100">
                <tr>
                    <th data-aos="fade-right" class="px-6 py-3 text-left text-sm font-medium text-gray-700">#</th>
                    <th data-aos="fade-right" data-aos-delay="50" class="px-6 py-3 text-left text-sm font-medium text-gray-700">Nama Santri</th>
                    <th data-aos="fade-right" data-aos-delay="100" class="px-6 py-3 text-left text-sm font-medium text-gray-700">Nilai Akhir</th>
                    <th data-aos="fade-right" data-aos-delay="150" class="px-6 py-3 text-left text-sm font-medium text-gray-700">Detail</th>
                    <th data-aos="fade-right" data-aos-delay="200" class="px-6 py-3 text-left text-sm font-medium text-gray-700">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($penilaians as $penilaian)
                <tr data-aos="fade-up" class="hover:bg-gray-100">
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $penilaian->santri->nama_santri }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $penilaian->preferensi }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                        <a href="{{ route('penilaian.show', $penilaian->santri->nama_santri) }}" class="text-blue-500 hover:underline mr-2">Lihat Detail</a>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                        <a href="{{ route('penilaian.download', $penilaian->santri->nama_santri) }}" class="inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300">Download</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
