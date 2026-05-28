@extends('layouts.admin')

@section('content')

<div class="max-w-4xl">

    <h1 class="text-4xl font-bold mb-10">
        Edit Product
    </h1>

    <form
        action="/admin/products/{{ $product->id }}"
        method="POST"
        enctype="multipart/form-data"
        class="bg-white rounded-3xl shadow p-10 space-y-6">

        @csrf
        @method('PUT')

        <div>

            <label class="font-semibold block mb-2">
                Product Name
            </label>

            <input
                type="text"
                name="name"
                value="{{ $product->name }}"
                class="w-full rounded-xl border-gray-300">

        </div>

        <div>

            <label class="font-semibold block mb-2">
                Description
            </label>

            <textarea
                name="description"
                rows="6"
                class="w-full rounded-xl border-gray-300">{{ $product->description }}</textarea>

        </div>

        <div>

            <label class="font-semibold block mb-2">
                Current Image
            </label>

            <img
                src="{{ asset('storage/' . $product->image) }}"
                class="w-48 rounded-xl mb-4">

            <input
                type="file"
                name="image"
                class="w-full">

        </div>

        <button
            class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-xl">

            Update Product

        </button>

    </form>

</div>

@endsection
