@extends('layouts.app')

@section('content')

<section class="py-20 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-3 gap-14">

            {{-- MAIN --}}
            <div class="lg:col-span-2">

                {{-- IMAGE --}}
                <img
                    src="{{ asset('storage/' . $event->image) }}"
                    alt="{{ $event->title }}"
                    class="w-full h-[500px] object-cover rounded-3xl shadow-lg mb-10">

                {{-- DATE --}}
                <div class="text-gray-400 mb-4">
                    {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}
                </div>

                {{-- TITLE --}}
                <h1 class="text-5xl font-bold leading-tight mb-8 text-slate-900">
                    {{ $event->title }}
                </h1>

                {{-- CONTENT --}}
                <div class="prose prose-lg max-w-none text-gray-700">

                    <p>
                        {{ $event->description }}
                    </p>

                    <p>
                        PT Nurman Mitra Sentosa continuously organizes industrial,
                        engineering and operational activities to improve service
                        quality and strengthen teamwork professionalism.
                    </p>

                </div>

            </div>

            {{-- SIDEBAR --}}
            <div>

                <div class="sticky top-28">

                    <div class="bg-gray-100 rounded-2xl p-8">

                        <h3 class="text-2xl font-bold mb-6">
                            Latest Events
                        </h3>

                        <div class="space-y-6">

                            @foreach ($latestEvents as $item)

                                <a
                                    href="/event-gallery/{{ $item->id }}"
                                    class="block group">

                                    <div class="flex gap-4">

                                        <img
                                            src="{{ asset('storage/' . $item->image) }}"
                                            class="w-24 h-24 object-cover rounded-xl">

                                        <div>

                                            <h4 class="font-bold text-slate-800 group-hover:text-blue-600 transition">
                                                {{ $item->title }}
                                            </h4>

                                            <div class="text-sm text-gray-400 mt-2">
                                                {{ \Carbon\Carbon::parse($item->event_date)->format('d M Y') }}
                                            </div>

                                        </div>

                                    </div>

                                </a>

                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
