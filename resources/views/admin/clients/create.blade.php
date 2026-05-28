@extends('layouts.admin')

@section('content')
    <div class="max-w-4xl">

        <h1 class="text-4xl font-bold mb-10">
            Create Client
        </h1>

        <form action="/admin/clients" method="POST" enctype="multipart/form-data"
            class="bg-white rounded-3xl shadow p-10 space-y-6">

            @csrf

            <div>

                <label class="font-semibold block mb-2">
                    Client Name
                </label>

                <input type="text" name="name" class="w-full rounded-xl border-gray-300">

            </div>

            <div>

                <label class="font-semibold block mb-2">
                    Client Logo
                </label>

                <input type="file" name="logo" class="w-full">

            </div>

            <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-xl">

                Save Client

            </button>

        </form>

    </div>
@endsection
