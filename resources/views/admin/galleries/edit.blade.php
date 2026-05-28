@extends('layouts.admin')

@section('content')
    <div class="max-w-4xl">

        <h1 class="text-4xl font-bold mb-10">
            Edit Gallery Image
        </h1>

        <form action="/admin/galleries/{{ $gallery->id }}" method="POST" enctype="multipart/form-data"
            class="bg-white rounded-3xl shadow p-10 space-y-6">

            @csrf
            @method('PUT')

            <div>

                <label class="font-semibold block mb-2">
                    Image Title (Optional)
                </label>

                <input type="text" name="title" value="{{ $gallery->title }}" class="w-full rounded-xl border-gray-300">

            </div>

            <div>

                <label class="font-semibold block mb-2">
                    Current Image
                </label>

                <img src="{{ asset('storage/' . $gallery->image) }}" class="w-48 h-48 object-cover rounded-xl mb-4">

                <input type="file" name="image" class="w-full">

            </div>

            <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-xl">

                Update Image

            </button>

        </form>

    </div>
@endsection
