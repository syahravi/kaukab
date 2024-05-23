@extends('layouts.pages')

@section('app')

<div class="bg-white">
    <section class="bg-[#FCF8F1] bg-opacity-30 py-10 lg:py-14">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 items-center">
                <div class="text-center lg:text-left" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="mt-4 text-4xl font-bold text-black md:text-5xl lg:mt-8 xl:text-7xl">Sistem pendukung keputusan Santri terbaik</h1>
                    <p class="mt-4 text-base text-black lg:mt-8 md:text-xl">PPTQ AL KAUKAB</p>
                </div>
                <div class="mt-4 lg:mt-0" data-aos="fade-left" data-aos-duration="1000">
                    <img class="w-full" src="{{ asset('images/profile/Desain tanpa judul.svg') }}" alt="" />
                </div>
            </div>
        </div>
    </section>
</div>


<section class="py-10 bg-white sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="mt-8 text-3xl font-bold leading-tight text-black lg:mt-12 sm:text-4xl lg:text-5xl" data-aos="fade-up" data-aos-duration="1000">DENGAN <span class="border-b-8 border-yellow-300">METODE</span> SIMPLE ADDITIVE WEIGHTING </h2>
            <p class="max-w-6xl mx-auto text-justify mt-6 text-base md:text-xl text-gray-600 md:mt-14" data-aos="fade-up" data-aos-duration="1000">Metode Simple Additive Weighting (SAW) sering juga dikenal istilah metode penjumlahan terbobot. Konsep dasar metode SAW adalah mencari penjumlahan terbobot dari kriteria kriteria yang sudah ditentukan sebelumnya. Metode ini membutuhkan proses normalisasi matriks keputusan sesuatu skala yang dapat diperbandingkan dengan semua rating alternatif yang ada. Metode Simple Additive Weighting (SAW) dalam sistem pendukung keputusan penyeleksian peserta program pemberdayaan masyarakat dibuat dengan tujuan untuk merancang dan mengimplementasikan perangkat lunak dengan menentukan pendaftar mana yang diterima dan ditolak dengan menerapkan model Multi-Attribute Decision making (MADM). Multi-Attribute Decision making (MADM) adalah himpunan alternatif-alternatif keputusan dan himpunan tujuan yang akan menentukan berdasarkan alternatif yang memiliki derajat harapan tertinggi terhadap tujuan-tujuan yang relevan. Dalam merancangan sistem ini menggunakan beberapa langkah yaitu database yang digunakan adalah XAMPP dan pengembangan perangkat lunak menggunakan Bahasa Pemrogaman Web dengan PHP dan MYSQL .</p>
        </div>
    </div>
</section>

<section class="bg-white text-gray-900">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-center" data-aos="fade-up" data-aos-duration="1000">Langkah-langkah Metode Simple Additive Weighting (SAW)</h1>
        
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-2xl font-semibold mb-4">1. Menentukan Kriteria</h2>
            <p class="mb-2">
                Tentukan kriteria yang akan digunakan dalam penilaian. Setiap kriteria harus memiliki bobot yang mencerminkan pentingnya kriteria tersebut.
            </p>
            <p class="italic">Contoh: Kriteria biaya, kualitas, dan waktu.</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg mb-6" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-2xl font-semibold mb-4">2. Menentukan Bobot Setiap Kriteria</h2>
            <p class="mb-2">
                Tetapkan bobot untuk setiap kriteria. Bobot biasanya ditentukan berdasarkan kepentingan relatif setiap kriteria.
            </p>
            <p class="italic">Contoh: Biaya (0.4), Kualitas (0.35), Waktu (0.25).</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg mb-6" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-2xl font-semibold mb-4">3. Membuat Matriks Keputusan</h2>
            <p class="mb-2">
                Buat matriks keputusan berdasarkan alternatif yang ada dan nilai dari setiap kriteria untuk setiap alternatif.
            </p>
            <p class="italic">Contoh: Alternatif A, B, dan C dengan nilai kriteria masing-masing.</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg mb-6" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-2xl font-semibold mb-4">4. Menormalkan Matriks Keputusan</h2>
            <p class="mb-2">
                Normalisasi nilai dari setiap kriteria pada matriks keputusan sehingga semua nilai berada dalam skala yang sama.
            </p>
            <p class="italic">Rumus: Rij = Xij / Xij_max (untuk kriteria keuntungan), Rij = Xij_min / Xij (untuk kriteria biaya)</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg mb-6" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-2xl font-semibold mb-4">5. Menghitung Nilai Preferensi</h2>
            <p class="mb-2">
                Hitung nilai preferensi untuk setiap alternatif dengan menjumlahkan hasil perkalian nilai kriteria yang telah dinormalisasi dengan bobot kriteria tersebut.
            </p>
            <p class="italic">Rumus: Vi = Σ (Wj * Rij)</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg mb-6" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-2xl font-semibold mb-4">6. Menentukan Hasil</h2>
            <p class="mb-2">
                Tentukan hasil akhir berdasarkan nilai preferensi tertinggi. Alternatif dengan nilai tertinggi adalah alternatif terbaik.
            </p>
            <p class="italic">Contoh: Alternatif dengan nilai Vi tertinggi adalah yang dipilih.</p>
        </div>
    </div>
</section>

@endsection
