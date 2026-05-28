@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto py-20 px-6">
        <div class="bg-white rounded-xl shadow p-8">
            <h2 class="text-2xl font-bold mb-6">Login</h2>

            @if ($errors->any())
                <div class="mb-4 text-sm text-red-600">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" required
                        class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <label class="inline-flex items-center text-sm">
                        <input type="checkbox" name="remember" class="mr-2 rounded border-gray-300"> Remember me
                    </label>
                </div>

                <div>
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-md font-semibold">
                        Login
                    </button>
                </div>

                <p class="text-center text-sm text-gray-600">
                    Belum punya akun? <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-700">Daftar di
                        sini</a>
                </p>
            </form>
        </div>
    </div>
@endsection
