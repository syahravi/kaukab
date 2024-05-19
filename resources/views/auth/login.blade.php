@extends('layouts.auth')

@section('app')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-6 rounded shadow-md w-full max-w-sm">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="text-2xl font-bold mb-4 text-center">Login</h1>
            @if (session('status'))
                <div class="mb-4 text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required autofocus>
                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4 flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" name="remember">
                    <span class="ml-2 text-gray-700">Remember me</span>
                </label>
                <a href="{{ route('password.request') }}" class="text-blue-600 hover:underline">Forgot password?</a>
            </div>
            <div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
