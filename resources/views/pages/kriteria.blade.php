@extends('layouts.pages')

@section('app')
<div class="container mx-auto py-8 px-4">
    <h1 class="text-4xl font-bold mb-6 text-center">Daftar Kriteria</h1>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg" data-aos="fade-up" data-aos-duration="1000">
        <table class="min-w-full">
            <thead class="bg-blue-100">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">#</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Kriteria</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Bobot</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Tipe</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($criteria as $c)
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900 font-semibold">{{ $c->kriteria }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $c->bobot }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $c->type }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
