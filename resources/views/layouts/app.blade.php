<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurman Mitra Sentosa</title>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .sidebar {
            transition: transform 0.3s ease-in-out;
            transform: translateX(-100%);
        }

        .sidebar.open {
            transform: translateX(0);
        }

        .overlay {
            transition: opacity 0.3s ease-in-out;
            opacity: 0;
            pointer-events: none;
        }

        .overlay.active {
            opacity: 1;
            pointer-events: auto;
        }

        /* Scrollbar tipis */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #f97316;
            border-radius: 3px;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <!-- Overlay -->
    <div id="overlay" class="overlay fixed inset-0 bg-black/60 z-40"></div>

    <!-- Sidebar -->
    <div id="sidebar"
        class="sidebar fixed top-0 left-0 h-full w-72 bg-gray-950 text-white z-50 shadow-2xl overflow-y-auto">

        <!-- Header Sidebar -->
        <div class="flex items-center justify-between px-6 py-5 border-b border-white/10">
            <img src="https://pt-nms.co.id/wp-content/uploads/2022/06/Logo-NMS-New-Home.png" alt="NMS Logo"
                class="h-7 w-auto object-contain">
            <button id="closeSidebarBtn"
                class="text-gray-400 hover:text-orange-400 transition p-1 rounded-lg hover:bg-white/10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Menu Items -->
        <nav class="px-4 py-6 space-y-6">

            <!-- Quick Nav -->
            <div>
                <p class="text-xs font-semibold text-gray-500 uppercase tracking-widest px-2 mb-3">Navigasi</p>
                <ul class="space-y-1">
                    <li>
                        <a href="/#profile"
                            class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-300 hover:text-white hover:bg-orange-500/20 hover:border-l-2 hover:border-orange-500 transition-all text-sm font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            Profil Perusahaan
                        </a>
                    </li>
                    <li>
                        <a href="/#visi-misi"
                            class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-300 hover:text-white hover:bg-orange-500/20 transition-all text-sm font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            Visi & Misi
                        </a>
                    </li>
                    <li>
                        <a href="/#produk"
                            class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-300 hover:text-white hover:bg-orange-500/20 transition-all text-sm font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                            Produk & Layanan
                        </a>
                    </li>
                    <li>
                        <a href="/#kontak"
                            class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-300 hover:text-white hover:bg-orange-500/20 transition-all text-sm font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Kontak
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Artikel -->
            <div>
                <div class="flex items-center justify-between px-2 mb-3">
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Artikel</p>
                    <a href="/articles" class="text-xs text-orange-400 hover:text-orange-300 font-medium transition">
                        Semua →
                    </a>
                </div>

                {{-- List artikel dari database (maks 3) --}}
                <ul class="space-y-1">
                    @if (isset($sidebarArticles) && $sidebarArticles->count() > 0)
                        @foreach ($sidebarArticles as $sidebarArticle)
                            <li>
                                <a href="/articles/{{ $sidebarArticle->slug }}"
                                    class="flex items-start gap-3 px-3 py-2.5 rounded-xl text-gray-300 hover:text-white hover:bg-orange-500/20 transition-all group">
                                    {{-- Ikon artikel --}}
                                    <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-gray-500 group-hover:text-orange-400 transition"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <div class="min-w-0">
                                        {{-- Judul artikel, potong jika terlalu panjang --}}
                                        <p class="text-sm font-medium leading-snug line-clamp-2">
                                            {{ $sidebarArticle->title }}
                                        </p>
                                        {{-- Tanggal --}}
                                        <p class="text-xs text-gray-600 mt-0.5">
                                            {{ $sidebarArticle->created_at->format('d M Y') }}
                                        </p>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    @else
                        <li class="px-3 py-3 text-xs text-gray-600 italic">
                            Belum ada artikel tersedia.
                        </li>
                    @endif
                </ul>

                {{-- Tombol lihat semua artikel --}}
                <div class="mt-3 px-2">
                    <a href="/articles"
                        class="flex items-center justify-center gap-2 w-full px-3 py-2 rounded-xl border border-white/10 text-gray-400 hover:text-orange-400 hover:border-orange-500/40 hover:bg-orange-500/10 transition text-xs font-medium">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 10h16M4 14h16M4 18h7" />
                        </svg>
                        Lihat Semua Artikel
                    </a>
                </div>
            </div>

            <!-- Konten Lainnya -->
            <div>
                <p class="text-xs font-semibold text-gray-500 uppercase tracking-widest px-2 mb-3">Lainnya</p>
                <ul class="space-y-1">
                    <li>
                        <a href="/event-gallery"
                            class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-300 hover:text-white hover:bg-orange-500/20 transition-all text-sm font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Event Gallery
                        </a>
                    </li>
                    <li>
                        <a href="/foto-klien"
                            class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-300 hover:text-white hover:bg-orange-500/20 transition-all text-sm font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Foto Klien
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Auth -->
            <div>
                <p class="text-xs font-semibold text-gray-500 uppercase tracking-widest px-2 mb-3">Akun</p>
                <ul class="space-y-2">
                    <li>
                        <a href="/login"
                            class="flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl bg-orange-500 hover:bg-orange-600 text-white transition text-sm font-semibold">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            Sign In
                        </a>
                    </li>
                    <li>
                        <a href="/register"
                            class="flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl border border-orange-500/50 text-orange-400 hover:bg-orange-500/10 transition text-sm font-semibold">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                            Sign Up
                        </a>
                    </li>
                </ul>
            </div>

        </nav>
    </div>

    <!-- Navbar -->
    <nav class="bg-gray-950 text-white sticky top-0 z-30 border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-3.5 flex justify-between items-center">

            <!-- Logo + Burger -->
            <div class="flex items-center gap-3">
                <button id="burgerBtn"
                    class="text-gray-400 hover:text-orange-400 transition p-2 rounded-lg hover:bg-white/10 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <a href="/" class="flex items-center">
                    <img src="https://pt-nms.co.id/wp-content/uploads/2022/06/Logo-NMS-New-Home.png"
                        alt="Nurman Mitra Sentosa" class="h-8 w-auto object-contain">
                </a>
            </div>

            <!-- Desktop Links -->
            <div class="hidden md:flex items-center gap-1">
                <a href="/#profile"
                    class="px-3 py-2 rounded-lg text-sm text-gray-300 hover:text-white hover:bg-white/10 transition font-medium">Profile</a>
                <a href="/#visi-misi"
                    class="px-3 py-2 rounded-lg text-sm text-gray-300 hover:text-white hover:bg-white/10 transition font-medium">Visi
                    Misi</a>
                <a href="/#produk"
                    class="px-3 py-2 rounded-lg text-sm text-gray-300 hover:text-white hover:bg-white/10 transition font-medium">Produk</a>
                <a href="/#kontak"
                    class="px-3 py-2 rounded-lg text-sm text-gray-300 hover:text-white hover:bg-white/10 transition font-medium">Kontak</a>
                <a href="/#about"
                    class="px-3 py-2 rounded-lg text-sm text-gray-300 hover:text-white hover:bg-white/10 transition font-medium">About</a>
            </div>

            <!-- CTA Desktop -->
            <div class="hidden md:flex items-center gap-2">
                <a href="/login"
                    class="px-4 py-2 text-sm text-gray-300 hover:text-white transition font-medium">Masuk</a>
                <a href="/register"
                    class="px-4 py-2 rounded-lg bg-orange-500 hover:bg-orange-600 text-white text-sm font-semibold transition">Daftar</a>
            </div>

        </div>
    </nav>

    <main class="flex-1">
        @yield('content')
    </main>

    <footer class="bg-gray-950 text-gray-500 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6 py-6 flex flex-col sm:flex-row justify-between items-center gap-2 text-sm">
            <span>© {{ date('Y') }} PT Nurman Mitra Sentosa. All rights reserved.</span>
            <span>Design by <span class="text-orange-400 font-medium">Ridho Yudiana</span></span>
        </div>
    </footer>

    <script>
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const burgerBtn = document.getElementById('burgerBtn');
        const closeSidebarBtn = document.getElementById('closeSidebarBtn');

        function openSidebar() {
            sidebar.classList.add('open');
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeSidebar() {
            sidebar.classList.remove('open');
            overlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        burgerBtn.addEventListener('click', openSidebar);
        closeSidebarBtn.addEventListener('click', closeSidebar);
        overlay.addEventListener('click', closeSidebar);

        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768 && sidebar.classList.contains('open')) {
                closeSidebar();
            }
        });
    </script>

    @yield('scripts')
</body>

</html>
