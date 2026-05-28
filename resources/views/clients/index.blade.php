@extends('layouts.app')

@section('content')

<section class="py-20 bg-gray-100 min-h-screen">

    <div class="max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="text-center mb-16">

            <h1 class="text-5xl font-bold mb-4">
                Our Clients
            </h1>

            <p class="text-gray-600 max-w-2xl mx-auto">
                PT Nurman Mitra Sentosa has collaborated with various
                trusted industrial and energy companies across Indonesia.
            </p>

        </div>

        {{-- CLIENT GRID --}}
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

            @foreach ($clients as $client)

                <div
                    class="bg-white rounded-3xl shadow hover:shadow-xl transition duration-300 p-8 flex flex-col items-center justify-center text-center">

                    {{-- LOGO --}}
                    <div class="h-24 flex items-center justify-center mb-6">

                        <img
                            src="{{ asset('storage/' . $client->logo) }}"
                            alt="{{ $client->name }}"
                            class="max-h-20 object-contain">

                    </div>

                    {{-- NAME --}}
                    <h2 class="text-xl font-bold text-slate-800">
                        {{ $client->name }}
                    </h2>

                </div>

            @endforeach

        </div>

        {{-- PARTNERSHIP SECTION --}}
        <div class="mt-24">

            <div class="bg-slate-900 rounded-3xl p-12 text-center text-white">

                <h2 class="text-4xl font-bold mb-6">
                    Trusted Industrial Partner
                </h2>

                <p class="text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    We are committed to maintaining long-term partnerships
                    through professionalism, quality services, and reliable
                    engineering support for every project.
                </p>

            </div>

        </div>

    </div>

</section>

@endsection
