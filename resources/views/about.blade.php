@extends('layouts.main')

@section('title', 'Tentang Kami')

@section('content')
    <div class="container mx-auto px-6 py-12 space-y-16">

        <div class="text-center animate-fade-in-up">
            <h1 class="text-3xl md:text-4xl font-extrabold text-white">
                Menjadi Sekolah Menengah Kejuruan Unggulan yang menghasilkan sumber daya
                manusia
            </h1>
            <h2 class="text-4xl md:text-5xl font-extrabold text-sky-400 mt-2">
                Terampil, Entrepreneur, dan Religius.
            </h2>
            <div class="mt-6 flex justify-center items-center flex-wrap gap-x-4 gap-y-2 text-gray
400">
                <span class="font-semibold">"Successed By Character!"</span>
                <span class="text-sky-500 hidden md:block">•</span>
                <span class="font-semibold">"We Are Different!"</span>
                <span class="text-sky-500 hidden md:block">•</span>
                <span class="font-semibold">"The Future is Ours!"</span>
            </div>
        </div>

        <div class="bg-gray-800 rounded-lg shadow-lg p-8 animate-fade-in-up">
            <h2 class="text-3xl font-bold text-white text-center mb-6">Sejarah Singkat</h2>
            <p class="text-gray-300 text-center max-w-3xl mx-auto">
                Didirikan pada tahun [...], SMK Plus Pelita Nusantara berawal dari sebuah visi untuk
                menciptakan lembaga pendidikan yang relevan dengan kebutuhan industri. Melalui
                perjalanan panjang yang penuh dedikasi, sekolah kami terus berkembang dan berinovasi
                untuk mencetak lulusan-lulusan terbaik yang siap kerja dan berkarakter.
            </p>
        </div>

        <div class="bg-gray-800 rounded-lg shadow-lg p-8 flex flex-col md:flex-row items-center
gap-8 animate-fade-in-up">
            <div class="flex-shrink-0">
                <img src="https://via.placeholder.com/150" alt="Foto Kepala Sekolah"
                    class="rounded-full w-32 h-32 md:w-40 md:h-40 object-cover border-4 border-sky-500">
            </div>
            <div>
                <h3 class="text-2xl font-bold text-sky-400">Sambutan Kepala Sekolah</h3>
                <p class="mt-4 text-gray-300 italic">
                    "Selamat datang di website resmi SMK Plus Pelita Nusantara. Kami berkomitmen
                    untuk memberikan pendidikan berkualitas yang tidak hanya mengasah keterampilan teknis,
                    tetapi juga membentuk akhlak mulia..."
                </p>
                <p class="mt-4 text-white font-semibold">- Sri Mildawati, S.Pd, M.Pd</p>
            </div>
        </div>

        <div class="bg-gray-800 rounded-lg shadow-lg p-8 animate-fade-in-up">
            <h2 class="text-3xl font-bold text-white text-center mb-8">Kompetensi Keahlian</h2>
            <div class="grid md:grid-cols-3 lg:grid-cols-5 gap-4 text-center">
                <div class="bg-gray-900 p-4 rounded-lg">
                    <h3 class="font-bold text-sky
400">Rekayasa Perangkat Lunak (RPL)</h3>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg">
                    <h3 class="font-bold text-sky
400">Desain Komunikasi Visual (DKV)</h3>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg">
                    <h3 class="font-bold text-sky
400">Teknik Komputer dan Jaringan (TKJ)</h3>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg">
                    <h3 class="font-bold text-sky
400">Teknik Otomasi Industri (TOI)</h3>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg">
                    <h3 class="font-bold text-sky
400">Layanan Perbankan (LPB)</h3>
                </div>
            </div>
        </div>

        <div class="animate-fade-in-up">
            <h2 class="text-3xl font-bold text-white text-center mb-8">Jajaran Pimpinan</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="bg-gray-800 rounded-lg p-6"><img src="https://via.placeholder.com/150" alt="Foto Pimpinan"
                        class="w-32 h-32 rounded-full
mx-auto mb-4 border-4 border-gray-700">
                    <h3 class="text-xl font-semibold text-white">Sri
                        Mildawati, S.Pd, M.Pd</h3>
                    <p class="text-sky-400">Kepala Sekolah</p>
                </div>
                <div class="bg-gray-800 rounded-lg p-6"><img src="https://via.placeholder.com/150" alt="Foto Pimpinan"
                        class="w-32 h-32 rounded-full
mx-auto mb-4 border-4 border-gray-700">
                    <h3 class="text-xl font-semibold text
white">(Nama Pimpinan)</h3>
                    <p class="text-sky-400">Waka. Kurikulum</p>
                </div>
                <div class="bg-gray-800 rounded-lg p-6"><img src="https://via.placeholder.com/150" alt="Foto Pimpinan"
                        class="w-32 h-32 rounded-full
mx-auto mb-4 border-4 border-gray-700">
                    <h3 class="text-xl font-semibold text
white">(Nama Pimpinan)</h3>
                    <p class="text-sky-400">Waka. Kesiswaan</p>
                </div>
                <div class="bg-gray-800 rounded-lg p-6"><img src="https://via.placeholder.com/150" alt="Foto Pimpinan"
                        class="w-32 h-32 rounded-full
mx-auto mb-4 border-4 border-gray-700">
                    <h3 class="text-xl font-semibold text
white">(Nama Pimpinan)</h3>
                    <p class="text-sky-400">Waka. Humas</p>
                </div>
            </div>
        </div>

        <div class="animate-fade-in-up">
            <h2 class="text-3xl font-bold text-white text-center mb-8">Didukung oleh Mitra
                Industri Terkemuka</h2>
            <div class="bg-gray-800 rounded-lg p-8">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-8 items-center">
                    <img src="https://via.placeholder.com/150x80.png/ffffff/9ca3af?text=LOGO+A" alt="Logo Mitra"
                        class="mx-auto grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="https://via.placeholder.com/150x80.png/ffffff/9ca3af?text=LOGO+B" alt="Logo Mitra"
                        class="mx-auto grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="https://via.placeholder.com/150x80.png/ffffff/9ca3af?text=LOGO+C" alt="Logo Mitra"
                        class="mx-auto grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="https://via.placeholder.com/150x80.png/ffffff/9ca3af?text=LOGO+D" alt="Logo Mitra"
                        class="mx-auto grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="https://via.placeholder.com/150x80.png/ffffff/9ca3af?text=LOGO+E" alt="Logo Mitra"
                        class="mx-auto grayscale hover:grayscale-0 transition-all duration-300">
                </div>
            </div>
        </div>

        <div class="bg-gray-800 rounded-lg shadow-lg p-8 animate-fade-in-up">
            <h2 class="text-3xl font-bold text-white text-center mb-8">Prestasi &
                Penghargaan</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-900 p-6 rounded-lg text-center">
                    <img src="https://via.placeholder.com/400x300.png/1e40af/ffffff?text=LKS+2024" alt="Foto Prestasi"
                        class="w-full h-48 object-cover rounded-lg mb-4">
                    <p class="text-xl font-bold text-sky-400">Juara 1 LKS</p>
                    <p class="text-white mt-2 text-sm">IT/Software tingkat Kabupaten Bogor
                        2024</p>
                </div>
                <div class="bg-gray-900 p-6 rounded-lg text-center">
                    <img src="https://via.placeholder.com/400x300.png/1e40af/ffffff?text=Akreditasi" alt="Foto Prestasi"
                        class="w-full h-48 object-cover rounded-lg mb-4">
                    <p class="text-xl font-bold text-sky-400">Akreditasi "A"</p>
                    <p class="text-white mt-2 text-sm">Penilaian Badan Akreditasi Nasional
                        Sekolah/Madrasah (BAN-S/M)</p>
                </div>
                <div class="bg-gray-900 p-6 rounded-lg text-center">
                    <img src="https://via.placeholder.com/400x300.png/ffffff/9ca3af?text=Serapan+Lulusan"
                        alt="Foto
Prestasi" class="w-full h-48 object-cover rounded-lg mb-4">
                    <p class="text-xl font-bold text-sky-400">95% Serapan Lulusan</p>
                    <p class="text-white mt-2 text-sm">Terserap di DUDI dalam 6 bulan pertama
                        setelah lulus</p>
                </div>
            </div>
        </div>

        <div class="animate-fade-in-up">
            <h2 class="text-3xl font-bold text-white text-center mb-8">Fasilitas Unggulan</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg"><img
                        src="https://via.placeholder.com/400x300.png/1e40af/ffffff?text=Gedung+Sekolah"
                        alt="Foto
Gedung Sekolah" class="w-full h-full object-cover"></div>
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg"><img
                        src="https://via.placeholder.com/400x300.png/1e40af/ffffff?text=Lab+Komputer"
                        alt="Foto
Lab Komputer" class="w-full h-full object-cover"></div>
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg"><img
                        src="https://via.placeholder.com/400x300.png/1e40af/ffffff?text=Perpustakaan"
                        alt="Foto
Perpustakaan" class="w-full h-full object-cover"></div>
            </div>
        </div>
    </div>
@endsection
