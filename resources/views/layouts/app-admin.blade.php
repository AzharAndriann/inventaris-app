<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Data Invetaris</title>


        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- sidebar --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
        {{-- <link rel="stylesheet" href="css/app.css"> --}}
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <script>
            document.getElementById('openModal').addEventListener('click', function() {
                document.getElementById('modal').classList.remove('hidden');
            });
        
            document.querySelectorAll('#closeModal, #closeModalFooter').forEach(button => {
                button.addEventListener('click', function() {
                    document.getElementById('modal').classList.add('hidden');
                });
            });
        </script>
        <script>

            @include('partials.sweetalert')


            
        
        var options = {
        chart: {
            height: "100%",
            maxWidth: "100%",
            type: "area",
            fontFamily: "Inter, sans-serif",
            dropShadow: {
            enabled: false,
            },
            toolbar: {
            show: false,
            },
        },
        tooltip: {
            enabled: true,
            x: {
            show: false,
            },
        },
        fill: {
            type: "gradient",
            gradient: {
            opacityFrom: 0.55,
            opacityTo: 0,
            shade: "#1C64F2",
            gradientToColors: ["#1C64F2"],
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            width: 6,
        },
        grid: {
            show: false,
            strokeDashArray: 4,
            padding: {
            left: 2,
            right: 2,
            top: 0
            },
        },
        series: [
            {
            name: "New users",
            data: [65, 61, 62, 65, 63, 64, 66, 69, 62, 67, 61, 62],
            color: "#d946ef",
            },
        ],
        xaxis: {
            categories: ['January', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'December'],
            labels: {
            show: false,
            },
            axisBorder: {
            show: false,
            },
            axisTicks: {
            show: false,
            },
        },
        yaxis: {
            show: false,
        },
        }

        if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("area-chart"), options);
        chart.render();
        }


        </script>


        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const items = document.querySelectorAll('aside ul li');
                const activeItemId = localStorage.getItem('activeItemId');

                if (activeItemId) {
                    document.querySelector(`aside ul li[data-id="${activeItemId}"]`).classList.add('active');
                }

                items.forEach(item => {
                    item.addEventListener('click', () => {
                        items.forEach(li => li.classList.remove('active'));
                        item.classList.add('active');
                        localStorage.setItem('activeItemId', item.getAttribute('data-id'));
                    });
                });
            });
        </script>
        <style>
            .active {
                background: linear-gradient(to right, #db2777, #c026d3,#9333ea);
                border-radius: 8px;
                color: white !important;
            }
        </style>

        <script>
            // Get elements
            const modal = document.getElementById('modal');
            const openModalButton = document.getElementById('openModal');
            const closeModalButton = document.getElementById('closeModal');
            const closeModalFooterButton = document.getElementById('closeModalFooter');

            // Function to open the modal
            openModalButton.addEventListener('click', () => {
                modal.classList.remove('hidden');
            });

            // Function to close the modal
            closeModalButton.addEventListener('click', () => {
                modal.classList.add('hidden');
            });

            closeModalFooterButton.addEventListener('click', () => {
                modal.classList.add('hidden');
            });
        </script>
        

        {{-- <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div> --}}

        {{-- asli --}}
        {{-- <div class="wrapper d-flex">
            @include('partials.sidebar')
            <div class="main">
                @include('partials.navbar')
                @yield('content')
                <h1>Jika ini muncul, berarti masalahnya bukan di layout ini</h1>
           </div>
        </div> --}}
        
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/app.js"></script> --}}

    </body>
</html>
