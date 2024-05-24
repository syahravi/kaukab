@extends('layouts.auth')

@section('app')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-6 rounded shadow-md w-full max-w-sm">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="text-2xl font-bold mb-4 text-center">Sign in to your account</h1>
            @if (session('status'))
                <div class="mb-4 text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input id="email" type="email" name="email" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300 @error('email') border-red-500 @enderror" value="{{ old('email') }}" required autofocus>
                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input id="password" type="password" name="password" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300 @error('password') border-red-500 @enderror" required>
                @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4 flex items-center justify-between">
                <label for="remember" class="flex items-center">
                    <input id="remember" type="checkbox" name="remember" class="rounded focus:ring-0">
                    <span class="ml-2 text-gray-700">Remember me</span>
                </label>
            </div>
            <div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
