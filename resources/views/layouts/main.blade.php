<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Aplikasi Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fade-in-down {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }

        .animate-fade-in-down {
            animation: fade-in-down 0.8s ease-out forwards;
        }
    </style>
</head>

<body class="bg-gray-900 text-gray-200 font-sans">
    <header class="bg-gray-800 shadow-lg border-b-2 border-sky-500 sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div>
                <a href="{{ route('home') }}" class="text-2xl font-bold text-white hover:text-sky
400">SMK Plus Pelita
                    Nusantara</a>
            </div>
            <div class="hidden md:flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-gray-300 hover:text-white">Beranda</a>
                <a href="{{ route('about') }}" class="text-gray-300 hover:text-white">Tentang</a>
                @guest
                    <a href="{{ route('login') }}"                      
                        class="bg-sky-600 text-white px-4 py-2 rounded
full hover:bg-sky-700">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="bg-sky-600 text-white px-4 py-2
rounded-full hover:bg-sky-700">Register</a>
                    @endif
                @else
                    <a href="{{ route('dashboard') }}" class="text-gray-300 hover:text
white">Dashboard</a>
                    <a href="{{ route('students.index') }}" class="text-gray-300 hover:text
white">Siswa</a>
                    <a href="{{ route('teachers.index') }}" class="text-gray-300 hover:text
white">Guru</a>
                    <a href="{{ route('school-classes.index') }}" class="text-gray-300 hover:text
white">Kelas</a>
                    <span class="text-white font-semibold">{{ Auth::user()->name }}</span>
                    <a href="{{ route('logout') }}" class="bg-red-600 text-white px-4 py-2 rounded-full hover:bg-red-700"
                        onclick="event.preventDefault(); document.getElementById('logout
form').submit();">
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
    <footer class="bg-gray-800 mt-12 pt-12 pb-8 text-center border-t-2 border-sky-500">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8 text-left md:text-center">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-xl font-bold text-white mb-4">SMK Plus Pelita Nusantara</h3>
                    <p class="text-gray-400">Menjadi Sekolah Menengah Kejuruan Unggulan yang
                        menghasilkan sumber daya manusia Terampil, Entrepreneur, dan Religius.</p>
                </div>
                <div class="mb-6 md:mb-0">
                    <h3 class="text-xl font-bold text-white mb-4">Kontak Kami</h3>
                    <ul class="text-gray-400 space-y-2">
                        <li><strong>Alamat:</strong> Jl. Golf Rt06/08 Ciriung, Kec. Cibinong, Kab
                            Bogor</li>
                        <li><strong>No. Telpon:</strong> 021 83713168</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">Let’s Connect!</h3>
                    <div class="flex justify-start md:justify-center space-x-4">
                        <a href="https://www.instagram.com/smkpluspelitanusantara" target="_blank"
                            class="text-gray-400 hover:text-white transition-colors duration-300"><svg class="w-8 h-8"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12.315 2c
4.04.053-4.52 1.543-4.52 4.022v11.956c0 2.478.48 3.968 4.52 4.022h.002c4.04-.054 4.52
1.544 4.52-4.022V6.022c0-2.48-.48-3.97-4.52-4.022h-.002zM12 18.73a6.73 6.73 0 100
13.46 6.73 6.73 0 000 13.46zm4.185-11.83a1.44 1.44 0 100-2.88 1.44 1.44 0 000 2.88z" clip rule="evenodd" />
                            </svg></a>
                        <a href="http://www.youtube.com/@smkpluspelitanusantara9719" target="_blank"
                            class="text-gray-400 hover:text-white transition-colors duration-300"><svg class="w-8 h-8"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.78 22 12 22 12s0 3.22-.42
4.814a2.506 2.506 0 01-1.768 1.768c-1.594.42-7.812.42-7.812.42s-6.218 0-7.812-.42a2.506
2.506 0 01-1.768-1.768C2 15.22 2 12 2 12s0-3.22.42-4.814a2.506 2.506 0 011.768
1.768C5.782 5 12 5 12 5s6.218 0 7.812.418zM9.75 15.25V8.75l6.5 3.25-6.5 3.25z" clip rule="evenodd" />
                            </svg></a>
                        <a href="https://www.tiktok.com/@smkppelitanusantaracbng" target="_blank"
                            class="text-gray-400 hover:text-white transition-colors duration-300"><svg class="w-8 h-8"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.525 3.197a1.69
1.69 0 012.388 1.423v5.698a1.53 1.53 0 01-1.385 1.523 1.53 1.53 0 01-1.666-1.385.765.765
0 00-.765-.765H8.765a.765.765 0 00-.765.765 4.333 4.333 0 004.333 4.333v5.47a.765.765 0
00.765.765 5.82 5.82 0 005.817-5.817V7.636a4.93 4.93 0 00-4.928-4.928.765.765 0 00
.411.109 1.53 1.53 0 01-1.85-1.472A1.69 1.69 0 0112.525 3.197z" />
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-700 pt-6">
                <p class="text-gray-500 text-center">&copy; {{ date('Y') }} SMK Plus Pelita
                    Nusantara – Divisi RPL. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>
