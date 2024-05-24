@extends('layouts.pages')

@section('app')
<div class="container mx-auto py-8 px-4">
    <h1 class="text-4xl font-bold mb-6 text-center">Daftar Santri</h1>
    
    <!-- Filter and Search -->
    <div class="flex justify-between mb-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="relative">
            <input type="text" placeholder="Cari santri..." class="px-4 py-2 w-72 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
            <span class="absolute right-3 top-2">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M19 19l-6-6m0 0l-6-6m6 6l-6 6m6-6l6 6M5 10h14"></path>
                </svg>
            </span>
        </div>
        <div>
            <select class="px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                <option selected>Pilih Asrama</option>
                @foreach ($uniqueAsramas as $asrama)
                <option>{{ $asrama }}</option>
                @endforeach
            </select>
        </div>
    </div>
    
    <!-- Table -->
    <div class="overflow-x-auto" data-aos="fade-up" data-aos-duration="1000">
        <table class="min-w-full bg-white shadow-md rounded-lg">
            <thead class="bg-blue-100">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">#</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Nama Santri</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Nama Asrama</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($santri as $s)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900 font-semibold">{{ $s->nama_santri }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $s->nama_asrama }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@push('scripts')
<script>
    
    // Filter and search functionality
    const searchInput = document.querySelector('input[type="text"]');
    const selectFilter = document.querySelector('select');

    searchInput.addEventListener('input', function() {
        const searchText = this.value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');

        rows.forEach(row => {
            const namaSantri = row.children[1].textContent.toLowerCase();
            const namaAsrama = row.children[2].textContent.toLowerCase();

            if (namaSantri.includes(searchText) && (selectFilter.value === 'Pilih Asrama' || namaAsrama.includes(selectFilter.value.toLowerCase()))) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

    selectFilter.addEventListener('change', function() {
        const filterValue = this.value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');

        rows.forEach(row => {
            const namaAsrama = row.children[2].textContent.toLowerCase();

            if (filterValue === 'pilih asrama' || namaAsrama.includes(filterValue)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
@endpush

@endsection
