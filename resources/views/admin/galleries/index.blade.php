@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-10">

        <div>

            <h1 class="text-4xl font-bold text-slate-800">
                Gallery
            </h1>

            <p class="text-gray-500 mt-2">
                Manage company gallery images
            </p>

        </div>

        <a href="/admin/galleries/create" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl">

            Add Gallery Image

        </a>

    </div>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 px-6 py-4 rounded-xl mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-3xl shadow overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="text-left p-5">Image</th>
                    <th class="text-left p-5">Title</th>
                    <th class="text-left p-5">Action</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($galleries as $gallery)
                    <tr class="border-t">

                        <td class="p-5">

                            <img src="{{ asset('storage/' . $gallery->image) }}" class="w-24 h-24 object-cover rounded-xl">

                        </td>

                        <td class="p-5 font-semibold">
                            {{ $gallery->title ?? 'No Title' }}
                        </td>

                        <td class="p-5">

                            <div class="flex gap-3">

                                <a href="/admin/galleries/{{ $gallery->id }}/edit"
                                    class="bg-yellow-400 px-4 py-2 rounded-lg">

                                    Edit

                                </a>

                                <form action="/admin/galleries/{{ $gallery->id }}" method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button onclick="return confirm('Delete gallery image?')"
                                        class="bg-red-500 text-white px-4 py-2 rounded-lg">

                                        Delete

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>

    <div class="mt-8">
        {{ $galleries->links() }}
    </div>
@endsection
