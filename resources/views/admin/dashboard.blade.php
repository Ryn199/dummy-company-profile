@extends('layouts.admin')

@section('content')
    <div class="mb-10">

        <h1 class="text-4xl font-bold text-slate-800">
            Dashboard
        </h1>

        <p class="text-gray-500 mt-2">
            Welcome back, {{ auth()->user()->name }}
        </p>

    </div>

    {{-- STATS --}}
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="bg-white rounded-3xl shadow p-8">

            <div class="text-gray-400 mb-2">
                Articles
            </div>

            <div class="text-5xl font-bold text-slate-800">
                {{ \App\Models\Article::count() }}
            </div>

        </div>

        <div class="bg-white rounded-3xl shadow p-8">

            <div class="text-gray-400 mb-2">
                Events
            </div>

            <div class="text-5xl font-bold text-slate-800">
                {{ \App\Models\Event::count() }}
            </div>

        </div>

        <div class="bg-white rounded-3xl shadow p-8">

            <div class="text-gray-400 mb-2">
                Products
            </div>

            <div class="text-5xl font-bold text-slate-800">
                {{ \App\Models\Product::count() }}
            </div>

        </div>

        <div class="bg-white rounded-3xl shadow p-8">

            <div class="text-gray-400 mb-2">
                Clients
            </div>

            <div class="text-5xl font-bold text-slate-800">
                {{ \App\Models\Client::count() }}
            </div>

        </div>

    </div>

    {{-- RECENT --}}
    <div class="mt-12 grid gap-6 lg:grid-cols-2">

        <div class="bg-white rounded-3xl shadow p-8">

            <h2 class="text-2xl font-bold mb-6">
                Recent Articles
            </h2>

            <div class="space-y-4">

                @foreach (\App\Models\Article::latest()->take(4)->get() as $article)
                    <div class="flex justify-between border-b pb-4">

                        <div>

                            <div class="font-semibold">
                                {{ $article->title }}
                            </div>

                            <div class="text-sm text-gray-400">
                                {{ $article->created_at->format('d M Y') }}
                            </div>

                        </div>

                        <a href="/admin/articles" class="text-blue-600 hover:text-blue-800">
                            View
                        </a>

                    </div>
                @endforeach

            </div>

        </div>

        <div class="bg-white rounded-3xl shadow p-8">

            <h2 class="text-2xl font-bold mb-6">
                Recent Events
            </h2>

            <div class="space-y-4">

                @foreach (\App\Models\Event::latest()->take(4)->get() as $event)
                    <div class="flex justify-between border-b pb-4">

                        <div>

                            <div class="font-semibold">
                                {{ $event->title }}
                            </div>

                            <div class="text-sm text-gray-400">
                                {{ $event->created_at->format('d M Y') }}
                            </div>

                        </div>

                        <a href="/admin/events" class="text-blue-600 hover:text-blue-800">
                            View
                        </a>

                    </div>
                @endforeach

            </div>

        </div>

    </div>
@endsection
