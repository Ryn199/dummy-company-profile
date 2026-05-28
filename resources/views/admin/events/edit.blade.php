@extends('layouts.admin')

@section('content')

<div class="max-w-4xl">

    <h1 class="text-4xl font-bold mb-10">
        Edit Event
    </h1>

    <form
        action="/admin/events/{{ $event->id }}"
        method="POST"
        enctype="multipart/form-data"
        class="bg-white rounded-3xl shadow p-10 space-y-6">

        @csrf
        @method('PUT')

        <div>

            <label class="font-semibold block mb-2">
                Event Title
            </label>

            <input
                type="text"
                name="title"
                value="{{ $event->title }}"
                class="w-full rounded-xl border-gray-300">

        </div>

        <div>

            <label class="font-semibold block mb-2">
                Event Date
            </label>

            <input
                type="date"
                name="event_date"
                value="{{ $event->event_date }}"
                class="w-full rounded-xl border-gray-300">

        </div>

        <div>

            <label class="font-semibold block mb-2">
                Description
            </label>

            <textarea
                name="description"
                rows="6"
                class="w-full rounded-xl border-gray-300">{{ $event->description }}</textarea>

        </div>

        <div>

            <label class="font-semibold block mb-2">
                Current Image
            </label>

            <img
                src="{{ asset('storage/' . $event->image) }}"
                class="w-48 rounded-xl mb-4">

            <input
                type="file"
                name="image"
                class="w-full">

        </div>

        <button
            class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-xl">

            Update Event

        </button>

    </form>

</div>

@endsection
