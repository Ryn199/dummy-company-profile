<!DOCTYPE html>
<html lang="en">

<head>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>
    <link rel="icon" type="image/png" href="{{ asset('logo/NMS.png') }}">

</head>

<body class="bg-gray-100">

    <div class="flex min-h-screen">

        {{-- SIDEBAR --}}
        <aside class="relative w-72 bg-slate-900 text-white p-6">

            <div class="mb-10">

                <h1 class="text-3xl font-bold">
                    NMS Admin
                </h1>

                <p class="text-gray-400 text-sm mt-2">
                    Management Dashboard
                </p>

            </div>

            <nav class="space-y-3">

                <a href="/admin/dashboard" class="block px-4 py-3 rounded-xl hover:bg-slate-800 transition">
                    Dashboard
                </a>

                <a href="/admin/articles" class="block px-4 py-3 rounded-xl hover:bg-slate-800 transition">
                    Articles
                </a>

                <a href="/admin/events" class="block px-4 py-3 rounded-xl hover:bg-slate-800 transition">
                    Events
                </a>

                <a href="/admin/products" class="block px-4 py-3 rounded-xl hover:bg-slate-800 transition">
                    Products
                </a>

                <a href="/admin/galleries" class="block px-4 py-3 rounded-xl hover:bg-slate-800 transition">
                    Galleries
                </a>

                <a href="/admin/clients" class="block px-4 py-3 rounded-xl hover:bg-slate-800 transition">
                    Clients
                </a>

            </nav>

            {{-- USER --}}
            <div class="absolute bottom-6 left-6 right-6">

                <div class="bg-slate-800 rounded-2xl p-4">

                    <div class="mb-4">

                        <div class="font-bold">
                            {{ auth()->user()->name }}
                        </div>

                        <div class="text-sm text-gray-400">
                            Administrator
                        </div>

                    </div>

                    <form method="POST" action="{{ route('logout') }}">

                        @csrf

                        <button class="w-full bg-red-500 hover:bg-red-600 transition rounded-xl py-2">

                            Logout

                        </button>

                    </form>

                </div>

            </div>

        </aside>

        {{-- CONTENT --}}
        <main class="flex-1 p-10">

            @yield('content')

        </main>

    </div>

</body>

</html>
