@section('title', 'Beranda')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <div class="relative text-center py-20 bg-gray-800 rounded-lg shadow-xl mb-12 overflow
hidden">
            <div class="absolute inset-0">
                <img src="https://images.unsplash.com/photo-1580582932707
520aed93a94d?q=80&w=1932&auto=format&fit=crop"
                    class="w-full h-full object-cover
opacity-20">
                <div class="absolute inset-0 bg-gray-900 bg-opacity-60"></div>
            </div>
            <div class="relative">
                <h1 class="text-4xl md:text-5xl font-extrabold text-white animate-fade-in-down">
                    Sistem Informasi <span class="text-sky-400">SMK Plus Pelita Nusantara</span>
                </h1>
                <p class="mt-4 text-lg text-gray-300 max-w-2xl mx-auto animate-fade-in-up">
                    Platform terintegrasi untuk mengelola semua data akademik sekolah secara efisien
                    dan modern.
                </p>
                <div class="mt-8 flex justify-center gap-8 animate-fade-in-up">
                    <div class="bg-gray-900 bg-opacity-70 p-6 rounded-lg text-center w-48 backdrop
blur-sm">
                        <p class="text-4xl font-bold text-sky-400">{{ $total_students }}</p>
                        <p class="text-gray-400 mt-2">Total Siswa</p>
                    </div>
                    <div class="bg-gray-900 bg-opacity-70 p-6 rounded-lg text-center w-48 backdrop
blur-sm">
                        <p class="text-4xl font-bold text-sky-400">{{ $total_teachers }}</p>
                        <p class="text-gray-400 mt-2">Total Guru & Staf</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div
                class="bg-gray-800 rounded-lg shadow-lg p-6 text-center transform hover:scale
105 transition-transform duration-300">
                <h3 class="text-xl font-bold text-white mb-2">Manajemen Siswa</h3>
                <p class="text-gray-400 mb-4">Kelola semua data siswa, mulai dari pendaftaran, data
                    pribadi, hingga status kelas.</p>
                <a href="{{ route('students.index') }}"
                    class="inline-block bg-sky-600 text-white px
6 py-2 rounded-full hover:bg-sky-700">Lihat Detail</a>
            </div>
            <div
                class="bg-gray-800 rounded-lg shadow-lg p-6 text-center transform hover:scale
105 transition-transform duration-300">
                <h3 class="text-xl font-bold text-white mb-2">Manajemen Guru</h3>
                <p class="text-gray-400 mb-4">Kelola data guru dan staf pengajar, penetapan wali
                    kelas, dan informasi kontak.</p>
                <a href="{{ route('teachers.index') }}"
                    class="inline-block bg-sky-600 text-white px
6 py-2 rounded-full hover:bg-sky-700">Lihat Detail</a>
            </div>
            <div
                class="bg-gray-800 rounded-lg shadow-lg p-6 text-center transform hover:scale
105 transition-transform duration-300">
                <h3 class="text-xl font-bold text-white mb-2">Manajemen Kelas</h3>
                <p class="text-gray-400 mb-4">Kelola data kelas dan jurusan, serta alokasi siswa ke
                    dalam kelas masing-masing.</p>
                <a href="{{ route('school-classes.index') }}"
                    class="inline-block bg-sky-600 text
white px-6 py-2 rounded-full hover:bg-sky-700">Lihat Detail</a>
            </div>
        </div>
    </div>
@endsection
