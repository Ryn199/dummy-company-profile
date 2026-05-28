@extends('layouts.app')

@section('content')

<section class="py-20 bg-gray-100 min-h-screen">

    <div class="max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="mb-14">

            <h1 class="text-5xl font-bold mb-4">
                Event Gallery
            </h1>

            <p class="text-gray-600">
                Documentation of company activities, meetings and industrial projects.
            </p>

        </div>

        {{-- EVENTS GRID --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach ($events as $event)

                <div class="bg-white rounded-3xl overflow-hidden shadow hover:shadow-xl transition duration-300">

                    {{-- IMAGE --}}
                    <div class="overflow-hidden">

                        <img
                            src="{{ asset('storage/' . $event->image) }}"
                            alt="{{ $event->title }}"
                            class="w-full h-64 object-cover hover:scale-105 transition duration-500">

                    </div>

                    {{-- CONTENT --}}
                    <div class="p-6">

                        <div class="text-sm text-gray-400 mb-3">
                            {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}
                        </div>

                        <h2 class="text-2xl font-bold mb-4 text-slate-800">
                            {{ $event->title }}
                        </h2>

                        <p class="text-gray-600 mb-6 line-clamp-3">
                            {{ $event->description }}
                        </p>

                        <a
                            href="/event-gallery/{{ $event->id }}"
                            class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800">

                            View Event →

                        </a>

                    </div>

                </div>

            @endforeach

        </div>

        {{-- PAGINATION --}}
        <div class="mt-14">

            {{ $events->links() }}

        </div>

    </div>

</section>

@endsection
