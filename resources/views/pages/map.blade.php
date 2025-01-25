@extends('layouts.app') 

@section('title', 'Map | Peta Sebaran Himada')

@section('styles')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        #map { height: 600px; }
        .custom-popup .leaflet-popup-content-wrapper {
            background: #fff;
            border-radius: 8px;
            padding: 0;
        }
    </style>
@endsection

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="relative overflow-hidden bg-gradient-to-r rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6 h-60 group mb-4"
        style="background-image: linear-gradient(to left, rgba(128, 90, 213, 0) 0%, rgba(128, 90, 213, 1) 100%), url('{{ asset("images/card-background.jpg") }}'); background-size: cover; background-position: center;">
        <!-- Content container -->
        <div class="relative h-full flex flex-col justify-end z-10">
            <!-- Text content -->
            <div class="space-y-1">
                <h3 class="text-black font-medium text-sm">Total Himada</h3>
                <div class="flex items-center space-x-2">
                    <span class="bg-white/80 backdrop-blur rounded-lg p-2 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"> 
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z" /> 
                        </svg>
                    </span>
                    <span class="text-3xl font-bold text-white/80" 
                        x-data="{ count: 0 }" 
                        x-intersect="$nextTick(() => {
                            let start = 0;
                            const end = {{ $jumlahHimadas }};
                            const steps = 30;
                            const increment = Math.ceil(end / steps);
                            
                            const counter = setInterval(() => {
                                start += increment;
                                if (start >= end) {
                                    start = end;
                                    clearInterval(counter);
                                }
                                $el.textContent = start;
                            }, 50);
                        })">0</span>
                </div>
                <p class="text-black text-sm">Himada</p>
            </div>
        </div>

        <!-- Decorative circle -->
        <div class="absolute -bottom-12 -right-12 w-40 h-40 bg-purple-100 rounded-full opacity-50 group-hover:bg-purple-200 transition-colors duration-300 z-0"></div>
        <div class="absolute -bottom-16 -right-16 w-48 h-48 bg-purple-50 rounded-full opacity-30 group-hover:bg-purple-100 transition-colors duration-300 z-0"></div>
    </div>

    <div>
        Map
    </div>
    <hr class="border-t border-gray-300 dark:border-gray-700 my-4 opacity-50">
    <div class="mb-4 text-end text-sm italic">
        Special Honor : Maps & Ilmu by pak @Rindang
    </div>
    <div class="relative rounded-xl overflow-hidden border-2 border-purple-100 hover:border-purple-200 transition-colors">
        <div class="absolute inset-0 bg-gradient-to-r from-purple-400/10 to-pink-400/10 animate-pulse"></div>
        <div id="map" class="w-full h-[60vh] relative z-10"></div>
    </div>

    <div class="mt-4">
        Statistic
    </div>
    <hr class="border-t border-gray-300 dark:border-gray-700 my-4 opacity-50">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
        <div class="lg:col-span-1 space-y-8">
            <!-- Total Members Card -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 border border-gray-100 relative overflow-hidden group">
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-gray-500 font-medium text-sm">Total Anggota Askara</h3>
                        <div class="p-2 bg-indigo-100 rounded-lg group-hover:bg-indigo-200 transition-colors duration-300">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-bold text-gray-800" x-data="{ count: 0 }" x-intersect="$nextTick(() => {
                            let start = 0;
                            const end = {{ $total }};
                            const duration = 4000;
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
                    <p class="text-gray-400 text-sm mt-2">Mahasiswa/i</p>
                </div>
                <div class="absolute bottom-0 right-0 w-32 h-32 -m-6 bg-indigo-100 rounded-full opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
            </div>

            <!-- Gender Chart Card -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 border border-gray-100 flex flex-col items-center">
                <h3 class="text-gray-500 font-medium text-sm mb-6">Rasio Gender</h3>
                <div class="w-full max-w-xs">
                    <canvas id="genderChart" width="100" height="100"></canvas>
                </div>
            </div>
        </div>

        <!-- Right Column (2/3) -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 border border-gray-100 h-full">
                <h3 class="text-gray-500 font-medium text-sm mb-8">Jumlah Mahasiswa per Pulau</h3>
                <canvas id="pulauChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <!-- Leaflet and Turf.js Scripts -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <!-- JS untuk statistik -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('genderChart').getContext('2d');
            const totalPria = {{ $totalPria }};
            const totalWanita = {{ $totalWanita }};
            const total = {{ $total }};

            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Laki-laki', 'Perempuan'],
                    datasets: [{
                        data: [totalPria, totalWanita],
                        backgroundColor: ['#3B82F6', '#F472B6'],
                        hoverBackgroundColor: ['#2563EB', '#EC4899']
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom'
                        }
                    }
                }
            });
        });
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('pulauChart').getContext('2d');
            const islandNames = @json($islandNames); // Nama-nama pulau
            const studentCounts = @json($studentCounts); // Jumlah mahasiswa

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: islandNames,
                    datasets: [{
                        label: 'Jumlah Mahasiswa',
                        data: studentCounts,
                        backgroundColor: 'rgba(128, 90, 213, 0.5)',
                        borderColor: 'rgba(128, 90, 213, 1)',   
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Pulau'
                            }
                        },
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Jumlah Mahasiswa'
                            }
                        }
                    }
                }
            });
        });
    </script>
    <!-- JS untuk map  -->
    <script>
        // Inisialisasi layer pertama peta
        const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });
        // Inisialisasi layer kedua
        const Stadia_AlidadeSatellite = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_satellite/{z}/{x}/{y}{r}.{ext}', {
            minZoom: 0,
            maxZoom: 20,
            attribution: '&copy; <a href="https://www.stadiamaps.com/">Stadia Maps</a>',
            ext: 'jpg'
        });

        // Data json dari laravel
        const users = @json($users);

        // Inisialisasi peta
        const map = L.map("map", {
            center: [-2.5, 118], // Centered di Indonesia
            zoom: 5,
            layers: [osm]
        });

        // Kontrol layer yang ingin digunakan
        const baseMaps = {
            "OpenStreetMap": osm,
            "Satellite": Stadia_AlidadeSatellite
        };
        L.control.layers(baseMaps).addTo(map);

        // Utilities map
        const mapUtils = {
            // Fungsi untuk mendapatkan breaks menggunakan metode quantile
            getQuantileBreaks: (data, numClasses = 5) => {
                const sortedData = data.slice().sort((a, b) => a - b);
                const quantileBreaks = [];

                // Hitung indeks setiap quantile dan tambahkan nilai
                for (let i = 0; i <= numClasses; i++) {
                    const quantileIndex = Math.floor((sortedData.length * i) / numClasses);
                    quantileBreaks.push(sortedData[quantileIndex]);
                }

                // Hapus duplikasi jika data memiliki nilai yang sama
                return [...new Set(quantileBreaks)];
            },

            // Fungsi untuk mendapatkan warna berdasarkan quantile breaks
            getColor: (value, breaks) => {
                const colors = [
                    '#FFEDA0', 
                    '#FEB24C', 
                    '#FD8D3C', 
                    '#FC4E2A', 
                    '#E31A1C'
                ];

                for (let i = breaks.length - 1; i >= 1; i--) {
                    if (value > breaks[i - 1]) {
                        return colors[i - 1];
                    }
                }
                return colors[0];
            },

            // Hitung jumlah user untuk sebuah himada
            countUsersInRegion: (feature) => {
                return users.filter(user => 
                    user.himada.toUpperCase() === feature.properties.Himada
                ).length;
            },

            // Stylle map per himada
            getDefaultStyle: (feature, breaks) => {
                const density = mapUtils.countUsersInRegion(feature);
                return {
                    fillColor: mapUtils.getColor(density, breaks),
                    weight: 1,
                    opacity: 1,
                    color: '#666',
                    fillOpacity: 0.7,
                    dashArray: '3'
                };
            },

            // Style himada yang terpilih
            getSelectedStyle: () => ({
                fillColor: '#FFFF00',
                weight: 2,
                opacity: 1,
                color: '#000',
                fillOpacity: 0.7,
                dashArray: '3'
            }),

            // Style popup saat memilih himada
            createPopupContent: (feature, userCount) => {
                const himadaImagePath = `${window.location.origin}/images/logo_himada/${feature.properties.Himada.toLowerCase()}.jpg`;

                return `
                    <div class="text-center p-4" style="max-width: 250px;">
                        <img src="${himadaImagePath}" 
                            alt="${feature.properties.Himada}" 
                            class="mx-auto mb-3 h-16 w-auto object-contain"/>
                        <div class="font-bold text-lg mb-2">${feature.properties.Himada}</div>
                        <div class="mb-4">Jumlah Anggota ${feature.properties.Himada} : ${userCount}</div>
                        <a href="/map/${feature.properties.Himada.toLowerCase()}" 
                        class="border-2 border-blue-500 text-blue-500 hover:text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors">
                            Lihat Detail Himada
                        </a>
                    </div>
                `;
            },

            // Legend klasifikasi himada berdasarkan jumlah
            createLegend: (breaks) => {
                const legend = L.control({ position: 'bottomright' });

                legend.onAdd = (map) => {
                    const div = L.DomUtil.create('div', 'info legend');
                    const labels = [];
                    const colors = [
                        '#FFEDA0', 
                        '#FEB24C', 
                        '#FD8D3C', 
                        '#FC4E2A', 
                        '#E31A1C'
                    ]; // Warna disesuaikan dengan 5 kelas

                    div.style.backgroundColor = 'white';
                    div.style.padding = '6px 8px';
                    div.style.border = '1px solid rgba(0,0,0,0.2)';
                    div.style.borderRadius = '4px';
                    div.style.lineHeight = '18px';
                    div.style.color = '#555';

                    labels.push('<h4 style="margin:0 0 5px 0">Jumlah Anggota</h4>');

                    for (let i = 0; i < breaks.length - 1; i++) {
                        labels.push(
                            `<i style="background:${colors[i]}; width: 18px; height: 18px; float: left; margin-right: 8px; opacity: 0.7"></i>` +
                            ((i === breaks.length - 2) ? `≥ ${breaks[i]}` : `${breaks[i]} &ndash; ${breaks[i + 1]}`) + "<br>"
                        );

                    }

                    div.innerHTML = labels.join('');
                    return div;
                };

                return legend;
            }
        };

        // Inisialisasi map dari geojson himada 
        fetch("/geojson/HIMADA_STIS.geojson")
            .then(response => response.json())
            .then(data => {
                let selectedLayer = null;

                // Hitung jumlah anggota untuk setiap wilayah
                const userCounts = data.features.map(feature => 
                    mapUtils.countUsersInRegion(feature)
                );

                // Dapatkan Quantile breaks
                const breaks = mapUtils.getQuantileBreaks(userCounts);

                const geoJsonLayer = L.geoJSON(data, {
                    style: (feature) => mapUtils.getDefaultStyle(feature, breaks),
                    onEachFeature: (feature, layer) => {
                        const userCount = mapUtils.countUsersInRegion(feature);
                        
                        layer.on({
                            click: (e) => {
                                if (selectedLayer) {
                                    selectedLayer.setStyle(mapUtils.getDefaultStyle(selectedLayer.feature, breaks));
                                }
                                
                                layer.setStyle(mapUtils.getSelectedStyle());
                                selectedLayer = layer;

                                L.popup({
                                    className: 'custom-popup',
                                    minWidth: 250
                                })
                                    .setLatLng(e.latlng)
                                    .setContent(mapUtils.createPopupContent(feature, userCount))
                                    .openOn(map);

                                L.DomEvent.stopPropagation(e);
                            },
                            mouseover: (e) => {
                                if (layer !== selectedLayer) {
                                    layer.setStyle({
                                        weight: 2,
                                        fillOpacity: 0.85
                                    });
                                }
                            },
                            mouseout: (e) => {
                                if (layer !== selectedLayer) {
                                    layer.setStyle(mapUtils.getDefaultStyle(feature, breaks));
                                }
                            }
                        });
                    }
                }).addTo(map);

                // Add legend to map
                mapUtils.createLegend(breaks).addTo(map);

                map.on('click', (e) => {
                    if (selectedLayer && !e.originalEvent.path?.includes(selectedLayer._path)) {
                        selectedLayer.setStyle(mapUtils.getDefaultStyle(selectedLayer.feature, breaks));
                        selectedLayer = null;
                    }
                });

                map.fitBounds(geoJsonLayer.getBounds());
            })
            .catch(error => console.error('Error loading GeoJSON:', error));

        // Function for handling detail view (implement as needed)
        function showHimadaDetail(himadaId) {
            window.location.href = `/statistics/users-himada-map/${himadaId.toLowerCase()}`;
        }
    </script>
@endsection