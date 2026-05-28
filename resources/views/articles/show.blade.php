@extends('layouts.app')

@section('content')

<section class="py-20 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-3 gap-14">

            {{-- MAIN CONTENT --}}
            <div class="lg:col-span-2">

                {{-- Thumbnail --}}
                <img
                    src="{{ asset('storage/' . $article->thumbnail) }}"
                    alt="{{ $article->title }}"
                    class="w-full h-[450px] object-cover rounded-3xl shadow-lg mb-10">

                {{-- Meta --}}
                <div class="text-gray-400 mb-4">
                    {{ $article->created_at->format('d M Y') }}
                </div>

                {{-- Title --}}
                <h1 class="text-5xl font-bold leading-tight mb-8 text-slate-900">
                    {{ $article->title }}
                </h1>

                {{-- Content --}}
                <div class="prose prose-lg max-w-none">

                    {!! nl2br(e($article->content)) !!}

                </div>

            </div>

            {{-- SIDEBAR --}}
            <div>

                <div class="sticky top-28">

                    <div class="bg-gray-100 rounded-2xl p-8">

                        <h3 class="text-2xl font-bold mb-6">
                            Latest Articles
                        </h3>

                        <div class="space-y-6">

                            @foreach ($latestArticles as $item)

                                <a
                                    href="/articles/{{ $item->slug }}"
                                    class="block group">

                                    <div class="flex gap-4">

                                        <img
                                            src="{{ asset('storage/' . $item->thumbnail) }}"
                                            class="w-24 h-24 object-cover rounded-xl">

                                        <div>

                                            <h4 class="font-bold text-slate-800 group-hover:text-blue-600 transition">
                                                {{ $item->title }}
                                            </h4>

                                            <div class="text-sm text-gray-400 mt-2">
                                                {{ $item->created_at->format('d M Y') }}
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
