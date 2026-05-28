@extends('layouts.admin')

@section('content')

<div class="max-w-4xl">

    <h1 class="text-4xl font-bold mb-10">
        Edit Article
    </h1>

    <form
        action="/admin/articles/{{ $article->id }}"
        method="POST"
        enctype="multipart/form-data"
        class="bg-white rounded-3xl shadow p-10 space-y-6">

        @csrf
        @method('PUT')

        <div>

            <label class="font-semibold block mb-2">
                Title
            </label>

            <input
                type="text"
                name="title"
                value="{{ $article->title }}"
                class="w-full rounded-xl border-gray-300">

        </div>

        <div>

            <label class="font-semibold block mb-2">
                Excerpt
            </label>

            <textarea
                name="excerpt"
                rows="3"
                class="w-full rounded-xl border-gray-300">{{ $article->excerpt }}</textarea>

        </div>

        <div>

            <label class="font-semibold block mb-2">
                Content
            </label>

            <textarea
                name="content"
                rows="10"
                class="w-full rounded-xl border-gray-300">{{ $article->content }}</textarea>

        </div>

        <div>

            <label class="font-semibold block mb-2">
                Current Thumbnail
            </label>

            <img
                src="{{ asset('storage/' . $article->thumbnail) }}"
                class="w-48 rounded-xl mb-4">

            <input
                type="file"
                name="thumbnail"
                class="w-full">

        </div>

        <button
            class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-xl">

            Update Article

        </button>

    </form>

</div>

@endsection
