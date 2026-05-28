@extends('layouts.app')

@section('content')

<section class="py-20 bg-gray-100 min-h-screen">

    <div class="max-w-7xl mx-auto px-6">

        <div class="mb-14">

            <h1 class="text-5xl font-bold mb-4">
                Articles
            </h1>

            <p class="text-gray-600">
                Latest news, engineering insights and industrial technology articles.
            </p>

        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach ($articles as $article)

                <div class="bg-white rounded-2xl overflow-hidden shadow hover:shadow-xl transition">

                    {{-- Thumbnail --}}
                    <img
                        src="{{ asset('storage/' . $article->thumbnail) }}"
                        alt="{{ $article->title }}"
                        class="w-full h-56 object-cover">

                    {{-- Content --}}
                    <div class="p-6">

                        <div class="text-sm text-gray-400 mb-3">
                            {{ $article->created_at->format('d M Y') }}
                        </div>

                        <h2 class="text-2xl font-bold mb-4 text-slate-800">
                            {{ $article->title }}
                        </h2>

                        <p class="text-gray-600 mb-6 line-clamp-3">
                            {{ $article->excerpt }}
                        </p>

                        <a
                            href="/articles/{{ $article->slug }}"
                            class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800">

                            Read More →

                        </a>

                    </div>

                </div>

            @endforeach

        </div>

        {{-- Pagination --}}
        <div class="mt-14">
            {{ $articles->links() }}
        </div>

    </div>

</section>

@endsection
