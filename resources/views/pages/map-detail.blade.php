@extends('layouts.app') 

@section('title', 'Map Detail | Peta Sebaran Himada')

@section('styles')
    <style>
        .floating-circle-1 {
            animation: float1 7s ease-in-out infinite;
        }
        .floating-circle-2 {
            animation: float2 8s ease-in-out infinite;
        }
        .floating-circle-3 {
            animation: float3 9s ease-in-out infinite;
        }
        .floating-circle-4 {
            animation: float4 10s ease-in-out infinite;
        }
        .floating-circle-5 {
            animation: float5 11s ease-in-out infinite;
        }

        @keyframes float1 {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(10px, 15px) rotate(5deg); }
            50% { transform: translate(-5px, 10px) rotate(-5deg); }
            75% { transform: translate(-15px, -10px) rotate(3deg); }
        }

        @keyframes float2 {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(-15px, 10px) rotate(-3deg); }
            66% { transform: translate(10px, -15px) rotate(5deg); }
        }

        @keyframes float3 {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            50% { transform: translate(15px, 8px) rotate(-4deg); }
        }

        @keyframes float4 {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(-8px, -12px) rotate(3deg); }
            66% { transform: translate(12px, 8px) rotate(-3deg); }
        }

        @keyframes float5 {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(12px, -10px) rotate(-2deg); }
            75% { transform: translate(-12px, 10px) rotate(2deg); }
        }
    </style>
@endsection

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-4 ">
            <div class="flex items-center space-x-2 px-4 py-2 text-sm text-gray-600">
                <a href="{{ route('map') }}" class="hover:text-purple-700"><u>map</u></a>
                <span>></span>
                <span class="text-purple-700"><u>{{ strtolower($himada->name) }}</u></span>
            </div>
        </div>
        <!-- Card Utama -->
        <div class="relative bg-gradient-to-r from-purple-600 to-purple-700 rounded-xl shadow-lg h-36">
            <!-- Animated Floating Circles -->
            <div class="absolute top-4 right-8 w-32 h-32 bg-purple-500/20 rounded-full floating-circle-1"></div>
            <div class="absolute bottom-2 left-12 w-24 h-24 bg-purple-400/15 rounded-full floating-circle-2"></div>
            <div class="absolute top-1/4 left-1/4 w-20 h-20 bg-purple-300/20 rounded-full floating-circle-3"></div>
            <div class="absolute bottom-1/3 right-1/4 w-28 h-28 bg-purple-200/10 rounded-full floating-circle-4"></div>
            <div class="absolute top-1/2 left-1/3 w-16 h-16 bg-purple-100/15 rounded-full floating-circle-5"></div>
            
            <div class="relative p-6 md:p-8">
                <div class="flex items-center justify-between">
                    <div class="z-10 relative">
                        <h1 class="text-2xl md:text-3xl font-bold text-white mb-1">
                            HIMADA {{ strtoupper($himada->name) }} 
                        </h1>
                        <p class="text-purple-100 text-base md:text-lg">
                            Himpunan Mahasiswa Daerah {{ $himada->daerah }}
                        </p>
                    </div>
                    
                    <!-- Logo with negative margin to lift it up -->
                    <div class="hidden md:block -mt-12 z-10 relative">
                        <img src="{{ asset('images/logo_himada/' . strtolower($himada->name) . '.jpg') }}" 
                                alt="Logo {{ $himada->name }}" 
                                class="w-32 h-32 object-contain "
                        >
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="mt-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Total Users Card with Instagram -->
                <div class="space-y-4">
                    <!-- Instagram Card -->
                    <a href="{{ $himada->instagram }}" target="_blank" class="block transform transition-all duration-300 hover:scale-105">
                        <div class="text-gray-500 font-medium text-sm w-full flex items-center justify-between bg-gradient-to-r from-purple-500 via-pink-500 to-orange-500 p-4 rounded-lg shadow-md hover:shadow-lg">
                            <div class="flex items-center space-x-3 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-transform duration-300 hover:rotate-12" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                                <span class="font-semibold">Instagram</span>
                            </div>
                            <?php $account = str_replace('https://instagram.com/', '', $himada->instagram); ?>
                            <span class="text-white">&#64;{{ $account }}</span>
                        </div>
                    </a>

                    <!-- Users Statistics Card -->
                    <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 p-6 border border-gray-100 relative overflow-hidden group">
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-gray-500 font-medium text-sm">Total Anggota Himada</h3>
                                <div class="p-2 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex items-baseline">
                                <span class="text-2xl font-bold text-gray-800" x-data="{ count: 0 }" x-intersect="$nextTick(() => {
                                    let start = 0;
                                    const end = {{ $total }};
                                    const duration = 2000;
                                    const step = Math.floor(duration / end);
                                    const increment = Math.ceil(end / step);
                                    const counter = setInterval(() => {
                                        start += increment;
                                        if (start > end) {
                                            start = end;
                                            clearInterval(counter);
                                        } 
                                        $el.textContent = start.toLocaleString();
                                    }, step);
                                    
                                })">0</span>
                            </div>
                            <p class="text-gray-400 text-sm mt-1">Mahasiswa/i</p>
                        </div>
                        <div class="absolute bottom-0 right-0 w-32 h-32 -m-6 bg-indigo-50 rounded-full opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
                    </div>
                </div>
                
                <!-- Gender Ratio Card -->
                <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 p-6 border border-gray-100">
                    <h3 class="text-gray-500 font-medium text-sm mb-4">Rasio Gender</h3>
                    
                    <div class="grid grid-cols-2 gap-8">
                        <!-- Pria -->
                        <div class="text-center">
                            <div class="text-2xl font-bold text-black mb-1" 
                                x-data="{ count: 0 }" 
                                x-intersect="$nextTick(() => {
                                    let start = 0;
                                    const end = {{ $totalPria }};
                                    console.log(end);
                                    const duration = 2000; 
                                    const step = Math.floor(duration / end);
                                    const increment = Math.ceil(end / step);
                                    const counter = setInterval(() => {
                                        start += increment;
                                        if (start > end) {
                                            start = end;
                                            clearInterval(counter);
                                        }
                                        $el.textContent = start.toLocaleString();
                                    }, step);
                                })">0
                            </div>
                            <svg class="w-12 h-12 mx-auto mb-2 text-blue-700" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 4a4 4 0 100 8 4 4 0 000-8zM6 8a6 6 0 1112 0A6 6 0 016 8zm2 10a3 3 0 00-3 3v1h14v-1a3 3 0 00-3-3H8z"/>
                            </svg>
                            <h3 class="text-sm font-medium text-blue-700">{{$total == 0 ? 0 : number_format(($totalPria/$total) * 100, 2) }}%</h3>
                            <div class="text-blue-700 mt-1">Pria</div>
                        </div>

                        <!-- Wanita -->
                        <div class="text-center">
                            <div class="text-2xl font-bold text-black mb-1"
                                x-data="{ count: 0 }" 
                                x-intersect="$nextTick(() => {
                                    let start = 0;
                                    const end = {{ $totalWanita }};
                                    const duration = 2000;
                                    const step = Math.floor(duration / end);
                                    const increment = Math.ceil(end / step);
                                    const counter = setInterval(() => {
                                        start += increment;
                                        if (start > end) {
                                            start = end;
                                            clearInterval(counter);
                                        }
                                        $el.textContent = start.toLocaleString();
                                    }, step);
                                })">0
                            </div>
                            <svg class="w-12 h-12 mx-auto mb-2 text-pink-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 4a4 4 0 100 8 4 4 0 000-8zM6 8a6 6 0 1112 0A6 6 0 016 8zm2 10a3 3 0 00-3 3v1h14v-1a3 3 0 00-3-3H8z"/>
                            </svg>
                            <h3 class="text-sm font-medium text-pink-400">{{ $total == 0 ? 0 : number_format(($totalWanita/$total) * 100, 2) }}%</h3>
                            <div class="text-pink-400 mt-1">Wanita</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Members Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden mt-4">
            <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                <h2 class="text-lg font-semibold text-gray-800">Daftar Anggota Askara {{ strtoupper($himada->name) }}</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                No
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nama Lengkap
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Jenis Kelamin
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($users as $index => $user)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $index + 1 }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">{{ $user->nama }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    {{ $user->jenis_kelamin === 'Pria' ? 'bg-blue-100 text-blue-800' : 'bg-pink-100 text-pink-800' }}">
                                    {{ $user->jenis_kelamin === 'Pria' ? 'Pria' : 'Wanita' }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection