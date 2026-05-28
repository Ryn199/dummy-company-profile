@extends('layouts.admin')

@section('content')

<div class="flex justify-between items-center mb-10">

    <div>

        <h1 class="text-4xl font-bold text-slate-800">
            Products
        </h1>

        <p class="text-gray-500 mt-2">
            Manage all company products
        </p>

    </div>

    <a href="/admin/products/create"
        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl">

        Add Products

    </a>

</div>

@if(session('success'))

    <div class="bg-green-100 text-green-700 px-6 py-4 rounded-xl mb-6">
        {{ session('success') }}
    </div>

@endif

<div class="bg-white rounded-3xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-100">

            <tr>

                <th class="text-left p-5">Image</th>
                <th class="text-left p-5">Name</th>
                <th class="text-left p-5">Description</th>
                <th class="text-left p-5">Action</th>

            </tr>

        </thead>

        <tbody>

            @foreach ($products as $product)

                <tr class="border-t">

                    <td class="p-5">

                        <img
                            src="{{ asset('storage/' . $product->image) }}"
                            class="w-24 h-20 object-cover rounded-xl">

                    </td>

                    <td class="p-5 font-semibold">
                        {{ $product->name }}
                    </td>
                    <td class="p-5 font-semibold">
                        {{ $product->description }}
                    </td>


                    <td class="p-5">

                        <div class="flex gap-3">

                            <a
                                href="/admin/products/{{ $product->id }}/edit"
                                class="bg-yellow-400 px-4 py-2 rounded-lg">

                                Edit

                            </a>

                            <form
                                action="/admin/products/{{ $product->id }}"
                                method="POST">

                                @csrf
                                @method('DELETE')

                                <button
                                    onclick="return confirm('Delete product?')"
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
    {{ $products->links() }}
</div>

@endsection
