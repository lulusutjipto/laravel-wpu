<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Aplikasi Pergudangan</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Inter font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f7f6; /* Light gray background */
        }
        /* Custom scrollbar for sidebar */
        .sidebar-scroll {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
        .sidebar-scroll::-webkit-scrollbar {
            display: none; /* Chrome, Safari, Opera */
        }
    </style>
</head>
<body class="flex h-screen overflow-hidden">


    <!-- Sidebar -->
    <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-gray-800 text-gray-100 transform -translate-x-full md:relative md:translate-x-0 transition-transform duration-300 ease-in-out flex flex-col rounded-r-lg shadow-lg">
        <div class="flex items-center justify-center h-16 bg-gray-900 rounded-tr-lg">
            <h1 class="text-2xl font-bold text-white">Gudang App</h1>
        </div>
        <nav class="flex-grow p-4 sidebar-scroll overflow-y-auto">
            <ul class="space-y-2">
                <li>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200">
                        <i class="fas fa-tachometer-alt mr-3"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#produk.blade.php" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200">
                        <i class="fas fa-box-open mr-3"></i>
                        Produk
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200">
                        <i class="fas fa-truck mr-3"></i>
                        Pengiriman
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200">
                        <i class="fas fa-file-invoice mr-3"></i>
                        Pesanan
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200">
                        <i class="fas fa-warehouse mr-3"></i>
                        Lokasi Gudang
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200">
                        <i class="fas fa-users mr-3"></i>
                        Pengguna
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200">
                        <i class="fas fa-chart-line mr-3"></i>
                        Laporan
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200">
                        <i class="fas fa-cog mr-3"></i>
                        Pengaturan
                    </a>
                </li>
            </ul>
        </nav>
        <div class="p-4 border-t border-gray-700">
            <a href="#" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200">
                <i class="fas fa-sign-out-alt mr-3"></i>
                Keluar
            </a>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Bar / Header -->
        <header class="flex items-center justify-between h-16 bg-white border-b border-gray-200 px-6 shadow-sm">
            <button id="sidebar-toggle" class="text-gray-600 focus:outline-none md:hidden">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <h2 class="text-2xl font-semibold text-gray-800">Dashboard</h2>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <button class="flex items-center text-gray-600 focus:outline-none">
                        <img class="h-8 w-8 rounded-full object-cover" src="https://placehold.co/40x40/cccccc/333333?text=JD" alt="User Avatar">
                        <span class="ml-2 text-sm font-medium hidden md:block">John Doe</span>
                    </button>
                    <!-- Dropdown menu (hidden by default) -->
                    <!-- <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengaturan</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Keluar</a>
                    </div> -->
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
            <div class="container mx-auto">
                <!-- Overview Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow-md p-6 flex items-center justify-between transition-transform transform hover:scale-105">
                        <div>
                            <p class="text-gray-500 text-sm">Total Produk</p>
                            <h3 class="text-3xl font-bold text-gray-800">1,234</h3>
                        </div>
                        <div class="p-3 bg-blue-100 text-blue-600 rounded-full">
                            <i class="fas fa-box-open text-2xl"></i>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6 flex items-center justify-between transition-transform transform hover:scale-105">
                        <div>
                            <p class="text-gray-500 text-sm">Total Pesanan</p>
                            <h3 class="text-3xl font-bold text-gray-800">567</h3>
                        </div>
                        <div class="p-3 bg-green-100 text-green-600 rounded-full">
                            <i class="fas fa-file-invoice text-2xl"></i>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6 flex items-center justify-between transition-transform transform hover:scale-105">
                        <div>
                            <p class="text-gray-500 text-sm">Produk Stok Rendah</p>
                            <h3 class="text-3xl font-bold text-gray-800">23</h3>
                        </div>
                        <div class="p-3 bg-red-100 text-red-600 rounded-full">
                            <i class="fas fa-exclamation-triangle text-2xl"></i>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6 flex items-center justify-between transition-transform transform hover:scale-105">
                        <div>
                            <p class="text-gray-500 text-sm">Pengiriman Hari Ini</p>
                            <h3 class="text-3xl font-bold text-gray-800">12</h3>
                        </div>
                        <div class="p-3 bg-yellow-100 text-yellow-600 rounded-full">
                            <i class="fas fa-truck-loading text-2xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Charts and Recent Activity -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Sales/Order Chart (Placeholder) -->
                    <div class="lg:col-span-2 bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Grafik Pesanan Bulanan</h3>
                        <div class="h-64 bg-gray-50 flex items-center justify-center text-gray-400 rounded-md border border-dashed border-gray-300">
                            <!-- Placeholder for chart library (e.g., Chart.js, ApexCharts) -->
                            Grafik akan ditampilkan di sini
                        </div>
                    </div>

                    <!-- Recent Activities -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Aktivitas Terbaru</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <div class="flex-shrink-0 p-2 bg-blue-500 text-white rounded-full mr-3">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div>
                                    <p class="text-gray-800">Produk baru <span class="font-medium">"Laptop Gaming X"</span> ditambahkan.</p>
                                    <p class="text-gray-500 text-sm">2 menit yang lalu</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 p-2 bg-green-500 text-white rounded-full mr-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <p class="text-gray-800">Pesanan <span class="font-medium">#ORD2023001</span> berhasil dikirim.</p>
                                    <p class="text-gray-500 text-sm">1 jam yang lalu</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 p-2 bg-red-500 text-white rounded-full mr-3">
                                    <i class="fas fa-minus"></i>
                                </div>
                                <div>
                                    <p class="text-gray-800">Stok <span class="font-medium">"Keyboard Mekanik"</span> rendah.</p>
                                    <p class="text-gray-500 text-sm">3 jam yang lalu</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 p-2 bg-yellow-500 text-white rounded-full mr-3">
                                    <i class="fas fa-truck"></i>
                                </div>
                                <div>
                                    <p class="text-gray-800">Pengiriman masuk dari <span class="font-medium">Supplier A</span> diterima.</p>
                                    <p class="text-gray-500 text-sm">Kemarin</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Low Stock Products Table -->
                <div class="bg-white rounded-lg shadow-md p-6 mt-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Produk Stok Rendah</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tl-lg">
                                        Nama Produk
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        SKU
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Stok
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tr-lg">
                                        Lokasi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        Mouse Gaming RGB
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        MG-001
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 font-semibold">
                                        5
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        A1-B2
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        Webcam HD
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        WC-003
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 font-semibold">
                                        8
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        C3-D4
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        Headset Nirkabel
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        HW-005
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 font-semibold">
                                        10
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        E5-F6
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <script>
        // JavaScript for sidebar toggle on mobile
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebar = document.getElementById('sidebar');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (event) => {
            // Check if the click is outside the sidebar and not on the toggle button
            if (!sidebar.contains(event.target) && !sidebarToggle.contains(event.target) && window.innerWidth < 768) {
                sidebar.classList.add('-translate-x-full');
            }
        });

        // Optional: Close sidebar on resize if it's open and becomes desktop view
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                sidebar.classList.remove('-translate-x-full');
            }
        });
    </script>
</body>
</html>
</x-layout>