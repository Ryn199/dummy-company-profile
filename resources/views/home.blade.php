@extends('layouts.app')

@section('content')
    {{-- HERO --}}
    <section class="bg-gray-950 text-white relative overflow-hidden">

        {{-- Aksen dekoratif --}}
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-40 -right-40 w-96 h-96 rounded-full bg-orange-500/10 blur-3xl"></div>
            <div class="absolute bottom-0 -left-20 w-72 h-72 rounded-full bg-orange-400/5 blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 py-28 md:py-36">
            <div class="max-w-3xl">

                <span
                    class="inline-block bg-orange-500/15 text-orange-400 text-xs font-semibold uppercase tracking-widest px-3 py-1.5 rounded-full mb-6">
                    Engineering & Industrial Services
                </span>

                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold leading-tight mb-6">
                    PT Nurman <br class="hidden sm:block">
                    <span class="text-orange-400">Mitra Sentosa</span>
                </h1>

                <p class="text-lg text-gray-400 mb-10 max-w-xl leading-relaxed">
                    Engineering, Geothermal and Industrial Service Solutions Company trusted across Indonesia and Asia.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#produk"
                        class="bg-orange-500 hover:bg-orange-600 transition px-6 py-3 rounded-xl font-semibold text-white inline-flex items-center gap-2">
                        Explore Services
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="#kontak"
                        class="border border-white/20 hover:bg-white/10 transition px-6 py-3 rounded-xl font-semibold text-white">
                        Hubungi Kami
                    </a>
                </div>

            </div>
        </div>

        {{-- Stats bar --}}
        <div class="relative border-t border-white/10 bg-white/5 backdrop-blur-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 py-6 grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <p class="text-2xl font-bold text-orange-400">20+</p>
                    <p class="text-xs text-gray-500 mt-1">Tahun Pengalaman</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-orange-400">500+</p>
                    <p class="text-xs text-gray-500 mt-1">Proyek Selesai</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-orange-400">50+</p>
                    <p class="text-xs text-gray-500 mt-1">Klien Aktif</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-orange-400">24/7</p>
                    <p class="text-xs text-gray-500 mt-1">Support</p>
                </div>
            </div>
        </div>

    </section>

    {{-- PROFILE --}}
    <section id="profile" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <div class="mb-14 text-center">
                <span class="text-orange-500 text-sm font-semibold uppercase tracking-widest">Tentang Kami</span>
                <h2 class="text-3xl sm:text-4xl font-bold mt-2 mb-4 text-gray-900">Company Profile</h2>
                <p class="text-gray-500 max-w-2xl mx-auto leading-relaxed">
                    PT Nurman Mitra Sentosa adalah perusahaan profesional di bidang engineering, geothermal,
                    industrial maintenance, dan energy services di seluruh Indonesia dan Asia.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <div
                    class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:border-orange-200 hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Company Overview</h3>
                    <p class="text-gray-500 leading-relaxed text-sm">
                        Berdiri sejak 2002, NMS terus berkembang dalam menyediakan layanan dan peralatan engineering
                        berkualitas tinggi untuk mendukung operasi industri.
                    </p>
                </div>

                <div
                    class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:border-orange-200 hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Our Experience</h3>
                    <ul class="space-y-2 text-gray-500 text-sm">
                        <li class="flex items-center gap-2"><span
                                class="w-1.5 h-1.5 rounded-full bg-orange-400 flex-shrink-0"></span>20+ Tahun Pengalaman
                        </li>
                        <li class="flex items-center gap-2"><span
                                class="w-1.5 h-1.5 rounded-full bg-orange-400 flex-shrink-0"></span>Industrial Engineering
                            Solutions</li>
                        <li class="flex items-center gap-2"><span
                                class="w-1.5 h-1.5 rounded-full bg-orange-400 flex-shrink-0"></span>Geothermal Services</li>
                        <li class="flex items-center gap-2"><span
                                class="w-1.5 h-1.5 rounded-full bg-orange-400 flex-shrink-0"></span>Maintenance & Project
                            Support</li>
                    </ul>
                </div>

                <div
                    class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:border-orange-200 hover:shadow-lg transition-all duration-300 sm:col-span-2 lg:col-span-1">
                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Why Choose Us</h3>
                    <ul class="space-y-2 text-gray-500 text-sm">
                        <li class="flex items-center gap-2"><span
                                class="w-1.5 h-1.5 rounded-full bg-orange-400 flex-shrink-0"></span>Tim Profesional
                            Berpengalaman</li>
                        <li class="flex items-center gap-2"><span
                                class="w-1.5 h-1.5 rounded-full bg-orange-400 flex-shrink-0"></span>Dukungan 24/7</li>
                        <li class="flex items-center gap-2"><span
                                class="w-1.5 h-1.5 rounded-full bg-orange-400 flex-shrink-0"></span>Layanan Terpercaya</li>
                        <li class="flex items-center gap-2"><span
                                class="w-1.5 h-1.5 rounded-full bg-orange-400 flex-shrink-0"></span>Harga Kompetitif</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    {{-- VISI MISI --}}
    <section id="visi-misi" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <div class="text-center mb-14">
                <span class="text-orange-500 text-sm font-semibold uppercase tracking-widest">Komitmen Kami</span>
                <h2 class="text-3xl sm:text-4xl font-bold mt-2 mb-3 text-gray-900">Vision & Mission</h2>
                <p class="text-gray-500">Profesionalisme dan keunggulan industri sebagai landasan kerja kami.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">

                {{-- VISION --}}
                <div class="bg-white rounded-2xl p-10 border border-gray-100 shadow-sm relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-orange-50 rounded-bl-full"></div>
                    <div class="relative">
                        <div class="w-14 h-14 bg-orange-500 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <span class="text-orange-500 text-xs font-semibold uppercase tracking-widest">Our Vision</span>
                        <h3 class="text-2xl font-bold mt-2 mb-4 text-gray-900">Visi</h3>
                        <p class="text-gray-500 leading-relaxed">
                            Menjadi perusahaan engineering, geothermal, dan industrial services yang terpercaya
                            dan terdepan, menghadirkan solusi berkualitas tinggi dengan profesionalisme dan integritas.
                        </p>
                    </div>
                </div>

                {{-- MISSION --}}
                <div class="bg-white rounded-2xl p-10 border border-gray-100 shadow-sm relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-orange-50 rounded-bl-full"></div>
                    <div class="relative">
                        <div class="w-14 h-14 bg-orange-500 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                        </div>
                        <span class="text-orange-500 text-xs font-semibold uppercase tracking-widest">Our Mission</span>
                        <h3 class="text-2xl font-bold mt-2 mb-4 text-gray-900">Misi</h3>
                        <ul class="space-y-3 text-gray-500 leading-relaxed text-sm">
                            <li class="flex items-start gap-3">
                                <span
                                    class="mt-1 w-5 h-5 rounded-full bg-orange-100 flex items-center justify-center flex-shrink-0">
                                    <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                                </span>
                                Memberikan layanan industrial dan engineering yang profesional.
                            </li>
                            <li class="flex items-start gap-3">
                                <span
                                    class="mt-1 w-5 h-5 rounded-full bg-orange-100 flex items-center justify-center flex-shrink-0">
                                    <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                                </span>
                                Menjaga standar kualitas dan keselamatan yang tinggi.
                            </li>
                            <li class="flex items-start gap-3">
                                <span
                                    class="mt-1 w-5 h-5 rounded-full bg-orange-100 flex items-center justify-center flex-shrink-0">
                                    <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                                </span>
                                Membangun kemitraan jangka panjang dengan klien.
                            </li>
                            <li class="flex items-start gap-3">
                                <span
                                    class="mt-1 w-5 h-5 rounded-full bg-orange-100 flex items-center justify-center flex-shrink-0">
                                    <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                                </span>
                                Terus meningkatkan teknologi dan sumber daya manusia.
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ABOUT --}}
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid md:grid-cols-2 gap-12 lg:gap-20 items-center">

                <div>

                    <video class="w-72 mb-8 rounded-lg shadow-lg" controls
                        poster="https://pt-nms.co.id/wp-content/uploads/2022/06/Logo-NMS-New-Home.png">
                        <source src="{{ asset('video/PT-NMS.mp4') }}" type="video/mp4">
                        Browser Anda tidak mendukung video.
                    </video>

                    <span class="text-orange-500 text-sm font-semibold uppercase tracking-widest">Our Story</span>
                    <h2 class="text-3xl sm:text-4xl font-bold mt-2 mb-6 text-gray-900">About NMS</h2>

                    <div class="space-y-4 text-gray-500 leading-relaxed text-sm">
                        <p>
                            PT. NMS berdiri sejak 2002 dan terus berkembang dalam menyediakan peralatan dan
                            layanan kepada pelanggan di seluruh Indonesia dan Asia.
                        </p>
                        <p>
                            NMS percaya pada pengiriman peralatan berkualitas terbaik dan layanan terpercaya
                            dengan harga kompetitif, sambil mempertahankan profesionalisme dan kepercayaan pelanggan.
                        </p>
                        <p>
                            Didukung oleh personel layanan dan tim manajemen berpengalaman, NMS beroperasi dengan
                            komitmen penuh terhadap kualitas, keselamatan, dan kepuasan pelanggan 24 jam sehari.
                        </p>
                    </div>

                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="#kontak"
                            class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-xl font-semibold transition text-sm">
                            Hubungi Kami
                        </a>
                        <a href="#produk"
                            class="border border-gray-200 hover:border-orange-300 hover:text-orange-500 text-gray-600 px-6 py-3 rounded-xl font-semibold transition text-sm">
                            Lihat Produk
                        </a>
                    </div>
                </div>

                <div>
                    <div class="rounded-3xl overflow-hidden aspect-[4/5] shadow-xl bg-gray-100">
                        <img src="{{ asset('storage/image') }}" class="w-full h-full object-cover"
                            alt="Industrial Operations"
                            onerror="this.parentElement.classList.add('flex','items-center','justify-center'); this.style.display='none'; this.insertAdjacentHTML('afterend', '<span class=\'text-gray-400 text-sm\'>Foto tidak tersedia</span>')">
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- PRODUCTS --}}
    <section id="produk" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <div class="text-center mb-14">
                <span class="text-orange-500 text-sm font-semibold uppercase tracking-widest">Layanan Kami</span>
                <h2 class="text-3xl sm:text-4xl font-bold mt-2 mb-3 text-gray-900">Products & Services</h2>
                <p class="text-gray-500">Solusi industrial dan engineering profesional untuk kebutuhan Anda.</p>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($products as $product)
                    <div
                        class="bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl hover:border-orange-200 hover:-translate-y-1 transition-all duration-300 group">

                        <div class="overflow-hidden h-52 bg-gray-100">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>

                        <div class="p-6">
                            <h3 class="text-lg font-bold mb-2 text-gray-900">{{ $product->name }}</h3>
                            <p class="text-gray-500 leading-relaxed text-sm line-clamp-3">
                                {{ $product->description }}
                            </p>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <a href="#kontak"
                                    class="text-orange-500 hover:text-orange-600 text-sm font-semibold inline-flex items-center gap-1 transition">
                                    Pelajari lebih lanjut
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- GALLERY --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4">
                <div>
                    <span class="text-orange-500 text-sm font-semibold uppercase tracking-widest">Dokumentasi</span>
                    <h2 class="text-3xl sm:text-4xl font-bold mt-2 text-gray-900">Gallery</h2>
                    <p class="text-gray-500 mt-1">Dokumentasi kegiatan dan proyek perusahaan.</p>
                </div>
                <a href="/event-gallery"
                    class="text-sm text-orange-500 hover:text-orange-600 font-semibold transition whitespace-nowrap">
                    Lihat Semua →
                </a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($galleries as $gallery)
                    <div class="bg-gray-100 rounded-2xl aspect-square overflow-hidden hover:opacity-90 transition">
                        {{-- Tambahkan <img> jika ada property image di model --}}
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- CLIENTS --}}
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <div class="text-center mb-12">
                <span class="text-orange-500 text-sm font-semibold uppercase tracking-widest">Dipercaya Oleh</span>
                <h2 class="text-3xl sm:text-4xl font-bold mt-2 mb-3 text-gray-900">Our Clients</h2>
                <p class="text-gray-500">Dipercaya oleh berbagai perusahaan industri terkemuka.</p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4">
                @foreach ($clients as $client)
                    <div
                        class="bg-white rounded-2xl border border-gray-100 p-5 flex items-center justify-center h-24 hover:border-orange-200 hover:shadow-sm transition-all duration-200">
                        <span class="font-bold text-sm text-gray-700 text-center">{{ $client->name }}</span>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- CONTACT --}}
    <section id="kontak" class="py-20 bg-gray-950 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <div class="grid md:grid-cols-2 gap-12 items-start">

                <div>
                    <span class="text-orange-400 text-sm font-semibold uppercase tracking-widest">Get In Touch</span>
                    <h2 class="text-3xl sm:text-4xl font-bold mt-2 mb-6">Hubungi Kami</h2>

                    <p class="text-gray-400 mb-8 leading-relaxed text-sm">
                        Kami siap membantu Anda dengan solusi engineering dan industrial terbaik.
                        Tim kami tersedia 24/7 untuk mendukung kebutuhan Anda.
                    </p>

                    <div class="space-y-5">
                        <div class="flex items-center gap-4 group">
                            <div
                                class="w-10 h-10 rounded-xl bg-orange-500/15 flex items-center justify-center flex-shrink-0 group-hover:bg-orange-500/25 transition">
                                <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 uppercase tracking-wider">Email</p>
                                <p class="text-gray-300 text-sm">info@nms-company.com</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 group">
                            <div
                                class="w-10 h-10 rounded-xl bg-orange-500/15 flex items-center justify-center flex-shrink-0 group-hover:bg-orange-500/25 transition">
                                <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 uppercase tracking-wider">Telepon</p>
                                <p class="text-gray-300 text-sm">+62 812 3456 7890</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 group">
                            <div
                                class="w-10 h-10 rounded-xl bg-orange-500/15 flex items-center justify-center flex-shrink-0 group-hover:bg-orange-500/25 transition">
                                <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 uppercase tracking-wider">Alamat</p>
                                <p class="text-gray-300 text-sm">Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 sm:p-8">
                    <h3 class="text-lg font-semibold mb-6">Kirim Pesan</h3>
                    <form class="space-y-4">

                        <div>
                            <label class="block text-xs text-gray-400 mb-1.5 font-medium">Nama Anda</label>
                            <input type="text" placeholder="Masukkan nama Anda"
                                class="w-full bg-white/10 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-gray-600 text-sm focus:outline-none focus:border-orange-500 focus:ring-1 focus:ring-orange-500 transition">
                        </div>

                        <div>
                            <label class="block text-xs text-gray-400 mb-1.5 font-medium">Email</label>
                            <input type="email" placeholder="email@contoh.com"
                                class="w-full bg-white/10 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-gray-600 text-sm focus:outline-none focus:border-orange-500 focus:ring-1 focus:ring-orange-500 transition">
                        </div>

                        <div>
                            <label class="block text-xs text-gray-400 mb-1.5 font-medium">Pesan</label>
                            <textarea rows="5" placeholder="Tuliskan pesan Anda..."
                                class="w-full bg-white/10 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-gray-600 text-sm focus:outline-none focus:border-orange-500 focus:ring-1 focus:ring-orange-500 transition resize-none"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-xl font-semibold transition text-sm flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            Kirim Pesan
                        </button>

                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
