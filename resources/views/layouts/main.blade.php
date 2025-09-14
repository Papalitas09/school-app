<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>@yield('title') - Aplikasi Sekolah</title> 
    <script src="https://cdn.tailwindcss.com"></script> 
    <style> 
        @keyframes fade-in-up { 
            0% { opacity: 0; transform: translateY(20px); } 
            100% { opacity: 1; transform: translateY(0); } 
        } 
        @keyframes fade-in-down { 
            0% { opacity: 0; transform: translateY(-20px); } 
            100% { opacity: 1; transform: translateY(0); } 
        } 
        .animate-fade-in-up { animation: fade-in-up 0.8s ease-out forwards; } 
        .animate-fade-in-down { animation: fade-in-down 0.8s ease-out forwards; } 
    </style> 
</head> 
<body class="bg-gray-900 text-gray-200 font-sans"> 
    <header class="bg-gray-800 shadow-lg border-b-2 border-sky-500"> 
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center"> 
            <div> 
                <a href="/" class="text-2xl font-bold text-white hover:text-sky-400">SMK Plus Pelita Nusantara</a> 
            </div> 
            <div class="hidden md:flex items-center space-x-6"> 
                <a href="/" class="text-gray-300 hover:text-white">Beranda</a> 
                <a href="/about" class="text-gray-300 hover:text-white">Tentang</a> 
                 
                @guest 
                    <a href="{{ route('login') }}" class="bg-sky-600 text-white px-4 py-2 rounded-full hover:bg-sky-700">Login</a> 
                    @if (Route::has('register')) 
                        <a href="{{ route('register') }}" class="bg-sky-600 text-white px-4 py-2 rounded-full hover:bg-sky-700">Register</a> 
                    @endif 
                @else 
                    <a href="{{ route('dashboard') }}" class="text-gray-300 hover:text-white">Dashboard</a> 
                    <a href="{{ route('students.index') }}" class="text-gray-300 hover:text-white">Siswa</a> 
                    <a href="{{ route('teachers.index') }}" class="text-gray-300 hover:text-white">Guru</a> 
                    <a href="{{ route('school-classes.index') }}" class="text-gray-300 hover:text-white">Kelas</a> 
                     
                    <span class="text-white font-semibold">{{ Auth::user()->name }}</span> 
                    <a href="{{ route('logout') }}" 
                       class="bg-red-600 text-white px-4 py-2 rounded-full hover:bg-red-700" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
                        Logout 
                    </a> 
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden"> 
                        @csrf 
                    </form> 
                @endguest 
            </div> 
        </nav> 
    </header> 
 
    <main class="py-10"> 
        @yield('content') 
    </main> 
 
    <footer class="bg-gray-800 mt-12 py-6 text-center border-t-2 border-sky-500"> 
        <p class="text-gray-400">&copy; 2025 SMK Plus Pelita Nusantara – XII RPL</p> 
    </footer> 
</body> 
</html>