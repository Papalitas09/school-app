@extends('layouts.main') 
@section('title', 'Verifikasi Email') 
@section('content') 
<div class=”container mx-auto”> 
    <div class=”flex justify-center”> 
        <div class=”w-full max-w-lg”> 
            <div class=”bg-gray-800 shadow-md rounded-2xl p-8 border border-gray-700 text center”> 
                <h1 class=”text-2xl font-bold text-white mb-4”>{{ __("Verifikasi Alamat Email Anda") }}</h1> 
 
                @if (session("resent")) 
                    <div class=”bg-green-500 bg-opacity-20 border border-green-500 text-green-300 px-4 py-3 rounded-md relative mb-6” role=”alert”> 
                        {{ __("Link verifikasi baru telah dikirim ke 13lamat email Anda.") }} 
                    </div> 
                @endif 
 
                <p class=”text-gray-300 mb-6”> 
                    {{ __("Sebelum melanjutkan, silakan periksa email Anda untuk link verifikasi.") }} 
                    {{ __("Jika Anda tidak menerima email,") }} 
                </p> 
 
                <form class=”inline” method=”POST” action=”{{ route("verification.resend") }}”> 
                    @csrf 
                    <button type=”submit” class=”bg-sky-600 text-white py-2 px-6 rounded-md font-semibold hover:bg-sky-700 transition-colors duration-300”> 
                        {{ __("klik di sini untuk meminta lagi") }} 
                    </button>. 
                </form> 
            </div> 
        </div> 
    </div> 
</div> 
@endsection 