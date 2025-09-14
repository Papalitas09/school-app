@extends('layouts.main') 
@section('title', 'Login') 
@section('content') 
<div class="container mx-auto"> 
    <div class="flex justify-center"> 
        <div class="w-full max-w-md"> 
            <div class="bg-gray-800 shadow-md rounded-2xl p-8 border border-gray-700"> 
                @if (session('success')) 
                    <div class="bg-green-500 bg-opacity-20 border border-green-500 text-green 300 px-4 py-3 rounded-md relative text-center mb-6" role="alert"> 
                        {{ session('success') }} 
                    </div> 
                @endif 
                <h1 class="text-2xl font-bold text-white text-center mb-6">{{ __('Login') }}</h1> 
                <form method="POST" action="{{ route('login') }}" class="space-y-6"> 
                    @csrf 
                    <div> 
                        <label for="email" class="block text-sm font-medium text-gray-300">{{ __('Alamat Email') }}</label> 
                        <div class="mt-1"> 
                            <input id="email" type="email" class="w-full p-3 rounded-md bg-gray-700 border text-white focus:ring-sky-500 focus:border-sky-500 {{ $errors->has('email') ? 'border-red-500' : 'border-gray-600' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> 
                        </div> 
                        @error('email') 
                            <p class="mt-2 text-sm text-red-500" role="alert">{{ $message }}</p> 
                        @enderror 
                    </div> 
                    <div> 
                        <label for="password" class="block text-sm font-medium text-gray-300">{{ __('Password') }}</label> 
                        <div class="mt-1"> 
                            <input id="password" type="password" class="w-full p-3 rounded-md bg-gray-700 border text-white focus:ring-sky-500 focus:border-sky-500 {{ $errors->has('password') ? 'border-red-500' : 'border-gray-600' }}" name="password" required autocomplete="current-password"> 
                        </div> 
                         @error('password') 
                            <p class="mt-2 text-sm text-red-500" role="alert">{{ $message }}</p> 
                        @enderror 
                    </div> 
                    <div class="flex items-center justify-between"> 
                        <div class="flex items-center"> 
                            <input class="h-4 w-4 bg-gray-700 border-gray-600 text-sky-600 focus:ring-sky-500 rounded" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> 
                            <label class="ml-2 block text-sm text-gray-300" for="remember">{{ __('Ingat Saya') }}</label> 
                        </div> 
                        @if (Route::has('password.request')) 
                            <a class="text-sm text-sky-500 hover:text-sky-400" href="{{ route('password.request') }}">{{ __('Lupa Password?') }}</a> 
                        @endif 
                    </div> 
                    <div> 
                        <button type="submit" class="w-full bg-sky-600 text-white py-3 px-4 rounded-md font-semibold hover:bg-sky-700 transition-colors duration-300">{{ __('Login') }}</button> 
                    </div> 
                </form> 
            </div> 
        </div> 
    </div> 
</div> 
@endsection 