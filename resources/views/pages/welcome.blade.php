@extends('layouts.app')

@section('title', 'Home | Peta Sebaran Himada')

@section('styles')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    @keyframes blob {
        0% {
            transform: translate(0px, 0px) scale(1);
        }

        33% {
            transform: translate(30px, -50px) scale(1.1);
        }

        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }

        100% {
            transform: translate(0px, 0px) scale(1);
        }
    }

    .animate-blob {
        animation: blob 7s infinite;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    .animation-delay-4000 {
        animation-delay: 4s;
    }

    .welcome-curve::before,
    .welcome-curve::after {
        content: '';
        position: absolute;
        bottom: 0;
        width: 32px;
        height: 32px;
        background-color: var(--curve-bg-color, white);
        overflow: visible;
    }

    :root.dark .welcome-curve::before,
    :root.dark .welcome-curve::after {
        --curve-bg-color: #1f2937;
    }

    .welcome-curve::before {
        left: -32px;
        border-top-right-radius: 100%;
        overflow: visible;
    }

    .welcome-curve::after {
        right: -32px;
        border-top-left-radius: 100%;
        overflow: visible;
    }

    .blob {
        transition: all 0.3s ease;
    }

    @keyframes float {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .float-animation {
        animation: float 3s ease-in-out infinite;
    }

    @keyframes button-hover {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .map-button {
        background: linear-gradient(45deg, #e1306c, #c13584);
        transition: all 0.3s ease;
    }

    .map-button:hover {
        background: linear-gradient(45deg, #c13584, #e1306c);
        transform: scale(1.05);
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05);
    }
</style>
@endsection

@section('content')
<div class="flex px-4 mt-12 md:px-16 justify-center items-center min-h-[calc(100vh-20rem)] transition-colors duration-300 z-10">
    <div class="relative w-full bg-white dark:bg-gray-800 rounded-[40px] overflow-hidden transition-colors duration-300"
        data-aos="fade-up">
        <!-- Blobs dengan efek yang ditingkatkan -->
        <div class="absolute inset-0 overflow-hidden">
            <div
                class="blob absolute top-1/4 -right-20 w-72 h-72 bg-purple-200/40 dark:bg-purple-900/30 rounded-full mix-blend-multiply dark:mix-blend-soft-light blur-xl animate-blob">
            </div>
            <div
                class="blob absolute bottom-1/4 -left-20 w-72 h-72 bg-yellow-200/40 dark:bg-yellow-900/30 rounded-full mix-blend-multiply dark:mix-blend-soft-light blur-xl animate-blob animation-delay-2000">
            </div>
            <div
                class="blob absolute top-3/4 left-1/3 w-72 h-72 bg-pink-200/40 dark:bg-pink-900/30 rounded-full mix-blend-multiply dark:mix-blend-soft-light blur-xl animate-blob animation-delay-4000">
            </div>
        </div>

        <!-- Curve Welcome Dashboard -->
        <div class="flex justify-center relative z-99 overflow-visible">
            <span
                class="welcome-curve w-[50%] h-20 bg-gray-100 dark:bg-gray-900 rounded-b-[30px] flex items-start justify-between relative transition-colors duration-300 absoulte overflow-visible">
                <div class="relative">
                    <span class="absolute -left-8 top-0 w-8 h-8 bg-gray-100 dark:bg-gray-900"></span>
                    <span class="absolute -left-8 top-0 w-8 h-8 bg-white dark:bg-gray-800 rounded-tr-full"></span>
                </div>
                <img src="{{ asset('images/logo/map-tag.png') }}" alt="Logo Askara"
                    class="h-16 w-16 mx-auto float-animation z-99">
                <div class="relative">
                    <span class="absolute -right-8 top-0 w-8 h-8 bg-gray-100 dark:bg-gray-900"></span>
                    <span class="absolute -right-8 top-0 w-8 h-8 bg-white dark:bg-gray-800 rounded-tl-full"></span>
                </div>
            </span>
        </div>

        <!-- Konten Utama -->
        <div class="px-4 my-8 md:px-8 py-10 flex flex-col items-center justify-center text-center min-h-[calc(100vh-30rem)]">
            <!-- Header Welcome -->
            <div data-aos="fade-up">
                <h1 class="text-6xl md:text-7xl font-bold text-gray-900 dark:text-white mb-6 transition-colors duration-300">
                    Welcome to <br>
                    <span class="bg-gradient-to-r from-purple-600 to-pink-600 text-transparent bg-clip-text">
                        Web GIS Himada
                    </span>
                </h1>
                <p class="text-2xl text-gray-600 dark:text-gray-300 mb-8 transition-colors duration-300">
                    Peta sebaran himada anggota angkatan STIS 65
                </p>

                <!-- Tombol Go to Map -->
                <a href="{{ route('map') }}" class="inline-block">
                    <button class="map-button px-8 py-4 text-white rounded-full text-xl font-semibold 
                        bg-gradient-to-r from-purple-600 to-pink-600 
                        shadow-md hover:bg-gradient-to-r hover:from-purple-700 hover:to-pink-700 focus:outline-none 
                        transform transition duration-300 ease-in-out hover:scale-105">
                        Go To Map 
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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