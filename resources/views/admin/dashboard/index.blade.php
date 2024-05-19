@extends('layouts.admin')

@section('app')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Sistem Pendukung Keputusan: Prestasi Santri Terbaik</h5>
            <p class="mb-0">
                Simple Additive Weighting (SAW) adalah salah satu metode dalam pengambilan keputusan multi-kriteria yang paling sederhana dan sering digunakan. Metode ini digunakan untuk mengatasi masalah pemilihan alternatif dengan mempertimbangkan beberapa kriteria yang berbeda.
            </p>
            <p>
                Di bawah ini, saya akan menjelaskan konsep SAW dan mengintegrasikannya ke dalam view yang telah Anda berikan:
            </p>
            <ol>
                <li>Pastikan Anda telah mengatur kriteria-kriteria yang akan dinilai dalam sistem keputusan.</li>
                <li>Normalisasikan matriks keputusan berdasarkan nilai-nilai dari setiap alternatif terhadap setiap kriteria.</li>
                <li>Tentukan bobot untuk setiap kriteria yang menunjukkan tingkat pentingnya kriteria tersebut dalam pengambilan keputusan.</li>
                <li>Hitung nilai preferensi untuk setiap alternatif dengan menggunakan rumus SAW.</li>
                <li>Ranking alternatif berdasarkan nilai preferensi yang didapatkan.</li>
            </ol>
        </div>
    </div>
    <hr>
@endsection
