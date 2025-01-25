@extends('layouts.app')

@section('title', 'About | Peta Sebaran Himada')

@section('styles')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    .profile-image {
        border-radius: 50%;
        width: 12rem;
        height: 12rem;
        object-fit: cover;
        border: 4px solid #9333ea;
    }

    .section-title {
        font-size: 2rem;
        font-weight: bold;
        color: #1f2937;
        margin-bottom: 1.5rem;
    }

    .section-subtitle {
        font-size: 1.25rem;
        font-weight: semibold;
        color: #7e22ce;
        margin-bottom: 1rem;
    }

    .section-content {
        font-size: 1.125rem;
        color: #4b5563;
    }

    .tech-list li {
        list-style-type: disc;
        margin-left: 1.25rem;
        color: #6b7280;
    }
</style>
@endsection

@section('content')
<div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden" data-aos="fade-up">
        <div class="px-8 py-10">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/3 mb-6 md:mb-0">
                    <img src="{{ asset('images/me/rifqi.jpg') }}" alt="Profile" class="profile-image mx-auto">
                </div>
                <div class="md:w-2/3 md:pl-8">
                    <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-2">
                        Rifqi Muhadzib Ahdan
                    </h1>
                    <p class="section-subtitle">
                        2KS2 | Kajaba
                    </p>
                    <p class="section-content mb-4">
                        Saya adalah seorang mahasiswa di kampus Polstat STIS jurusan DIV Komputasi Statistik. Projek ini merupakan implementasi dari tugas akhir matkul SIG untuk mengeksplorasi sebaran dan informasi anggota Himada berbasis website.
                    </p>
                </div>
            </div>

            <div class="mt-8 border-t dark:border-gray-700 pt-8">
                <h2 class="section-title">
                    Tentang Projek
                </h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div data-aos="fade-up" data-aos-delay="200">
                        <h3 class="section-subtitle">Teknologi</h3>
                        <ul class="tech-list">
                            <li>Laravel (Fullstack)</li>
                            <li>Tailwind CSS (Frontend)</li>
                            <li>Leaflet.js (Backend Map)</li>
                            <li>AOS.js (Frontend)</li>
                            <li>Alpine.js (Frontend)</li>
                            <li>GeoJSON (Map Format)</li>
                        </ul>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="400">
                        <h3 class="section-subtitle">Tujuan</h3>
                        <p class="section-content">
                            Mengembangkan sistem informasi geografis untuk memvisualisasikan dan menganalisis sebaran anggota himada Askara secara interaktif dan informatif sebagai projek akhir matkul <b>SIG</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 50,
            easing: 'ease-out-cubic'
        });
    });
</script>
@endsection