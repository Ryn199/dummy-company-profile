<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurman Mitra Sentosa</title>
    <style>
        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }

        /* Sidebar transition */
        .sidebar {
            transition: transform 0.3s ease-in-out;
            transform: translateX(-100%);
        }

        .sidebar.open {
            transform: translateX(0);
        }

        /* Overlay */
        .overlay {
            transition: opacity 0.3s ease-in-out;
            pointer-events: none;
        }

        .overlay.active {
            pointer-events: auto;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Overlay untuk menutup sidebar saat klik di luar -->
    <div id="overlay" class="overlay fixed inset-0 bg-black bg-opacity-50 z-40 opacity-0 active:opacity-100"></div>

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar fixed top-0 left-0 h-full w-64 bg-slate-900 text-white z-50 shadow-lg p-6">
        <div class="flex justify-end mb-8">
            <button id="closeSidebarBtn" class="text-white hover:text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="space-y-4">
            <h3 class="text-lg font-semibold border-b border-gray-600 pb-2">Artikel</h3>
            <ul class="space-y-2 pl-2">
                <li><a href="/artikel/konsep" class="hover:text-gray-300 block py-1">Konsep</a></li>
                <li><a href="/artikel/teknologi-informasi" class="hover:text-gray-300 block py-1">Teknologi
                        Informasi</a></li>
                <li>
                    <a href="/articles" class="hover:text-gray-300 block py-1">
                        All Articles
                    </a>
                </li>
            </ul>
            <h3 class="text-lg font-semibold border-b border-gray-600 pb-2 pt-4">Event Gallery</h3>
            <ul class="space-y-2 pl-2">
                <li><a href="/event-gallery" class="hover:text-gray-300 block py-1">Event Gallery</a></li>
            </ul>
            <h3 class="text-lg font-semibold border-b border-gray-600 pb-2 pt-4">Foto Klien</h3>
            <ul class="space-y-2 pl-2">
                <li><a href="/foto-klien" class="hover:text-gray-300 block py-1">Foto Klien</a></li>
            </ul>
            <h3 class="text-lg font-semibold border-b border-gray-600 pb-2 pt-4">Login</h3>
            <ul class="space-y-2 pl-2">
                <li><a href="/login" class="hover:text-gray-300 block py-1">Sign In</a></li>
                <li><a href="/register" class="hover:text-gray-300 block py-1">Sign Up</a></li>
            </ul>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="bg-slate-900 text-white sticky top-0 z-30">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo dan Tombol Burger -->
            <div class="flex items-center gap-4">
                <button id="burgerBtn" class="text-white focus:outline-none hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <!-- Placeholder Logo Perusahaan -->
                <div class="flex items-center" onclick="window.location.href='/';" style="cursor: pointer;">
                    <img src="https://pt-nms.co.id/wp-content/uploads/2022/06/Logo-NMS-New-Home.png"
                        alt="Nurman Mitra Sentosa" class="h-8 w-auto object-contain">
                </div>
            </div>

            <!-- Navbar Links - Scroll ke konten -->
            <div class="hidden md:flex gap-6">
                <a href="#profile" class="hover:text-gray-300 transition">Profile</a>
                <a href="#visi-misi" class="hover:text-gray-300 transition">Visi Misi</a>
                <a href="#produk" class="hover:text-gray-300 transition">Produk</a>
                <a href="#kontak" class="hover:text-gray-300 transition">Kontak</a>
                <a href="#about" class="hover:text-gray-300 transition">About</a>
            </div>

            <!-- Mobile menu (optional, bisa tambahkan dropdown) -->
            <div class="md:hidden">
                <!-- placeholder untuk mobile jika diperlukan -->
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-slate-900 text-white text-center py-4 mt-10">
        Design by : Ridho Yudiana
    </footer>

    <script>
        // Sidebar functionality
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const burgerBtn = document.getElementById('burgerBtn');
        const closeSidebarBtn = document.getElementById('closeSidebarBtn');

        function openSidebar() {
            sidebar.classList.add('open');
            overlay.classList.add('active');
            overlay.style.opacity = '1';
            document.body.style.overflow = 'hidden';
        }

        function closeSidebar() {
            sidebar.classList.remove('open');
            overlay.classList.remove('active');
            overlay.style.opacity = '0';
            document.body.style.overflow = '';
        }

        burgerBtn.addEventListener('click', openSidebar);
        closeSidebarBtn.addEventListener('click', closeSidebar);
        overlay.addEventListener('click', closeSidebar);

        // Close sidebar on window resize if open (optional)
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768 && sidebar.classList.contains('open')) {
                closeSidebar();
            }
        });
    </script>

    <!-- Konten dari halaman anak harus menyediakan elemen dengan ID yang sesuai untuk scroll -->
    @yield('scripts')
</body>

</html>
