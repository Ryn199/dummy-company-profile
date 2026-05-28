@extends('layouts.app')

@section('content')
    {{-- HERO --}}
    <section class="bg-slate-900 text-white py-28">

        <div class="max-w-7xl mx-auto px-6">

            <div class="max-w-3xl">

                <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                    PT Nurman Mitra Sentosa
                </h1>

                <p class="text-lg text-gray-300 mb-8">
                    Engineering, Geothermal and Industrial Service Solutions Company.
                </p>

                <a href="#products" class="bg-blue-600 hover:bg-blue-700 transition px-6 py-3 rounded-lg font-semibold">
                    Explore Services
                </a>

            </div>

        </div>

    </section>

{{-- PROFILE --}}
<section id="profile" class="py-20 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="mb-14 text-center">

            <h2 class="text-4xl font-bold mb-4">
                Company Profile
            </h2>

            <p class="text-gray-600 max-w-3xl mx-auto">
                PT Nurman Mitra Sentosa is a professional company engaged in
                engineering, geothermal, industrial maintenance, and energy services
                across Indonesia and Asia.
            </p>

        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-gray-100 rounded-2xl p-8 shadow-sm">

                <h3 class="text-2xl font-bold mb-4 text-slate-800">
                    Company Overview
                </h3>

                <p class="text-gray-600 leading-relaxed">
                    Established in 2002, NMS has continuously expanded its services
                    and engineering capabilities to support industrial operations
                    with high-quality equipment and professional manpower.
                </p>

            </div>

            <div class="bg-gray-100 rounded-2xl p-8 shadow-sm">

                <h3 class="text-2xl font-bold mb-4 text-slate-800">
                    Our Experience
                </h3>

                <ul class="space-y-3 text-gray-600">

                    <li>✔ 20+ Years Experience</li>
                    <li>✔ Industrial Engineering Solutions</li>
                    <li>✔ Geothermal Services</li>
                    <li>✔ Maintenance & Project Support</li>

                </ul>

            </div>

            <div class="bg-gray-100 rounded-2xl p-8 shadow-sm">

                <h3 class="text-2xl font-bold mb-4 text-slate-800">
                    Why Choose Us
                </h3>

                <ul class="space-y-3 text-gray-600">

                    <li>✔ Professional Team</li>
                    <li>✔ 24/7 Support</li>
                    <li>✔ Reliable Services</li>
                    <li>✔ Competitive Pricing</li>

                </ul>

            </div>

        </div>

    </div>

</section>

{{-- VISI MISI --}}
<section id="visi-misi" class="py-20 bg-gray-100">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">

            <h2 class="text-4xl font-bold mb-4">
                Vision & Mission
            </h2>

            <p class="text-gray-600">
                Commitment to professionalism and industrial excellence.
            </p>

        </div>

        <div class="grid md:grid-cols-2 gap-10">

            {{-- VISION --}}
            <div class="bg-white rounded-2xl p-10 shadow-md">

                <div class="mb-6">

                    <span class="text-blue-600 text-sm font-semibold uppercase">
                        Our Vision
                    </span>

                    <h3 class="text-3xl font-bold mt-2">
                        Vision
                    </h3>

                </div>

                <p class="text-gray-600 leading-relaxed">
                    To become a trusted and leading engineering,
                    geothermal, and industrial services company
                    that delivers high-quality solutions with
                    professionalism and integrity.
                </p>

            </div>

            {{-- MISSION --}}
            <div class="bg-white rounded-2xl p-10 shadow-md">

                <div class="mb-6">

                    <span class="text-blue-600 text-sm font-semibold uppercase">
                        Our Mission
                    </span>

                    <h3 class="text-3xl font-bold mt-2">
                        Mission
                    </h3>

                </div>

                <ul class="space-y-4 text-gray-600 leading-relaxed">

                    <li>
                        ✔ Deliver professional industrial and engineering services.
                    </li>

                    <li>
                        ✔ Maintain high quality and safety standards.
                    </li>

                    <li>
                        ✔ Build long-term partnerships with clients.
                    </li>

                    <li>
                        ✔ Continuously improve technology and human resources.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

{{-- ABOUT --}}
<section id="about" class="py-20 bg-white">

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-14 items-center">

        <div>

            <img
                src="https://pt-nms.co.id/wp-content/uploads/2022/06/Logo-NMS-New-Home.png"
                class="w-40 mb-8"
                alt="NMS Logo">

            <h2 class="text-5xl font-bold mb-8 text-slate-900">
                About NMS
            </h2>

            <p class="text-gray-600 leading-relaxed mb-6">
                PT. NMS started in 2002 and has constantly grown and expanded
                our business to provide equipment and services to customers
                throughout Indonesia and Asia.
            </p>

            <p class="text-gray-600 leading-relaxed mb-6">
                NMS believes in delivering the best quality equipment and
                reliable services at competitive prices while maintaining
                professionalism and customer trust.
            </p>

            <p class="text-gray-600 leading-relaxed">
                Supported by experienced service personnel and management teams,
                NMS operates with full commitment to quality, safety,
                and customer satisfaction 24 hours a day.
            </p>

        </div>

        <div>

            <div class="bg-slate-200 rounded-3xl h-[500px] overflow-hidden shadow-xl">

                <img
                    src="{{ asset('storage/image') }}"
                    class="w-full h-full object-cover"
                    alt="Industrial">

            </div>

        </div>

    </div>

</section>

    {{-- PRODUCTS --}}
    <section id="produk" class="py-20 bg-gray-100">

        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-14">

                <h2 class="text-4xl font-bold mb-4">
                    Products & Services
                </h2>

                <p class="text-gray-600">
                    Professional industrial and engineering solutions.
                </p>

            </div>

            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ($products as $product)
                    <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">

                        {{-- IMAGE --}}
                        <div class="overflow-hidden">

                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                class="w-full h-56 object-cover hover:scale-105 transition duration-500">

                        </div>

                        {{-- CONTENT --}}
                        <div class="p-6">

                            <h3 class="text-2xl font-bold mb-3 text-slate-800">
                                {{ $product->name }}
                            </h3>

                            <p class="text-gray-600 leading-relaxed line-clamp-3">
                                {{ $product->description }}
                            </p>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </section>



    {{-- GALLERY --}}
    <section class="py-20 bg-white">

        <div class="max-w-7xl mx-auto px-6">

            <div class="mb-12">

                <h2 class="text-4xl font-bold mb-2">
                    Gallery
                </h2>

                <p class="text-gray-600">
                    Company activities documentation.
                </p>

            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">

                @foreach ($galleries as $gallery)
                    <div class="bg-slate-300 rounded-2xl h-64"></div>
                @endforeach

            </div>

        </div>

    </section>

    {{-- CLIENTS --}}
    <section class="py-20 bg-gray-100">

        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-12">

                <h2 class="text-4xl font-bold mb-2">
                    Our Clients
                </h2>

                <p class="text-gray-600">
                    Trusted by various industrial companies.
                </p>

            </div>

            <div class="grid grid-cols-2 md:grid-cols-5 gap-6">

                @foreach ($clients as $client)
                    <div class="bg-white rounded-2xl shadow p-6 flex items-center justify-center h-32">

                        <span class="font-bold text-lg">
                            {{ $client->name }}
                        </span>

                    </div>
                @endforeach

            </div>

        </div>

    </section>

    {{-- CONTACT --}}
    <section id="kontak" class="py-20 bg-slate-900 text-white">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid md:grid-cols-2 gap-10">

                <div>

                    <h2 class="text-4xl font-bold mb-6">
                        Contact Us
                    </h2>

                    <div class="space-y-4 text-gray-300">

                        <p>Email : info@nms-company.com</p>
                        <p>Phone : +62 812 3456 7890</p>
                        <p>Address : Indonesia</p>

                    </div>

                </div>

                <div class="bg-slate-800 rounded-2xl p-8">

                    <form class="space-y-5">

                        <input type="text" placeholder="Your Name" class="w-full rounded-lg bg-slate-700 border-none">

                        <input type="email" placeholder="Your Email" class="w-full rounded-lg bg-slate-700 border-none">

                        <textarea rows="5" placeholder="Message" class="w-full rounded-lg bg-slate-700 border-none"></textarea>

                        <button class="bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg">
                            Send Message
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>
@endsection
