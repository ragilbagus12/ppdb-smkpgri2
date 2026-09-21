<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SMK PGRI 2 Ponorogo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <!-- Navbar -->
<nav class="sticky top-0 z-50 bg-slate-950/70 backdrop-blur-xl border-b border-slate-800/80 transition-all">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo & School Name -->
            <a href="#" class="flex items-center gap-3.5 group">
                <img src="{{ asset('images/SMKPGRI2.png') }}" alt="Logo SMK PGRI 2 Ponorogo" class="w-12 h-12 object-contain group-hover:scale-105 transition-all duration-300">
                <div>
                    <span class="block text-lg font-extrabold text-white leading-none tracking-tight">SMK PGRI 2</span>
                    <span class="text-[10px] font-bold text-indigo-400 tracking-widest uppercase">Ponorogo</span>
                </div>
            </a>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center space-x-8 font-medium text-sm text-slate-300">
                <a href="#beranda" class="hover:text-indigo-400 transition-colors duration-200">Beranda</a>
                <a href="#galeri" class="hover:text-indigo-400 transition-colors duration-200">Galeri</a>
                <a href="#jurusan" class="hover:text-indigo-400 transition-colors duration-200">Jurusan</a>
                <a href="#alur" class="hover:text-indigo-400 transition-colors duration-200">Alur Pendaftaran</a>
                <a href="{{ route('siswa.index') }}" class="hover:text-indigo-400 transition-colors duration-200">Data Pendaftar</a>
            </div>

            <!-- CTA Buttons -->
            <div class="flex items-center gap-3">
                <a href="{{ route('login') }}" class="hidden sm:inline-flex px-4 py-2.5 text-sm font-semibold text-slate-300 hover:text-white bg-slate-900/80 hover:bg-slate-800 border border-slate-800 rounded-xl transition duration-200">
                    Login
                </a>
                <a href="/daftar" class="inline-flex px-5 py-2.5 text-sm font-bold text-white bg-indigo-600 hover:bg-indigo-500 rounded-xl shadow-lg shadow-indigo-600/30 transition-all duration-200 hover:-translate-y-0.5">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
</nav>

        <!-- Hero Section with Modern Futuristic Background & School Photo -->
        <section id="beranda" class="relative overflow-hidden pt-12 pb-24 lg:pt-20 lg:pb-36 bg-slate-950">
            <!-- Glow Elements -->
            <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-tr from-indigo-600/20 via-blue-600/20 to-purple-600/10 rounded-full blur-[140px] pointer-events-none"></div>
            <div class="absolute -top-20 left-10 w-80 h-80 bg-indigo-500/15 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-blue-500/15 rounded-full blur-[120px] pointer-events-none"></div>
            
            <!-- Grid Pattern -->
            <div class="absolute inset-0 bg-grid-pattern opacity-60 pointer-events-none"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                    
                    <!-- Left Content -->
                    <div class="lg:col-span-7 text-center lg:text-left">
                        <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-slate-900/90 text-indigo-300 text-xs font-bold uppercase tracking-wider mb-8 border border-indigo-500/30 shadow-inner backdrop-blur-md">
                            <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                            </span>
                            PPDB Tahun Ajaran 2026/2027 Resmi Dibuka
                        </div>

                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-[1.15] mb-6">
                            Selamat Datang di <br class="hidden sm:block">
                            <span class="bg-gradient-to-r from-indigo-400 via-blue-400 to-cyan-400 bg-clip-text text-transparent">PPDB SMK PGRI 2</span> Ponorogo
                        </h1>

                        <p class="text-base sm:text-lg text-slate-400 mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed font-normal">
                            Wujudkan masa depan cemerlang, unggul, dan siap kerja bersama sekolah pusat keunggulan terdepan di Ponorogo. Bergabunglah menjadi generasi terampil berkarakter!
                        </p>

                        <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                            <a href="/daftar" class="w-full sm:w-auto px-8 py-4 bg-indigo-600 hover:bg-indigo-500 text-white font-bold rounded-2xl shadow-xl shadow-indigo-600/30 transition-all hover:-translate-y-0.5 text-center flex items-center justify-center gap-2">
                                <span>Isi Formulir Pendaftaran</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                            <a href="{{ route('siswa.index') }}" class="w-full sm:w-auto px-8 py-4 bg-slate-900/80 hover:bg-slate-800 text-slate-200 border border-slate-800 font-bold rounded-2xl transition duration-200 text-center backdrop-blur-md">
                                Lihat Data Pendaftar
                            </a>
                        </div>

                        <!-- Statistics Bar -->
                        <div class="mt-14 pt-8 border-t border-slate-800/80 grid grid-cols-3 gap-6 text-center lg:text-left">
                            <div>
                                <span class="block text-3xl sm:text-4xl font-extrabold text-white tracking-tight">9</span>
                                <span class="text-xs sm:text-sm font-medium text-slate-400 mt-1 block">Program Keahlian</span>
                            </div>
                            <div>
                                <span class="block text-3xl sm:text-4xl font-extrabold text-white tracking-tight">100+</span>
                                <span class="text-xs sm:text-sm font-medium text-slate-400 mt-1 block">Mitra Industri</span>
                            </div>
                            <div>
                                <span class="block text-3xl sm:text-4xl font-extrabold text-white tracking-tight">95%</span>
                                <span class="text-xs sm:text-sm font-medium text-slate-400 mt-1 block">Terserap Kerja</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Visual Hero Card with Photo -->
                    <div class="lg:col-span-5 relative">
                        <div class="relative bg-gradient-to-tr from-indigo-500 via-blue-600 to-cyan-500 rounded-3xl p-[1px] shadow-2xl shadow-indigo-500/20 group">
                            <div class="bg-slate-900/90 backdrop-blur-2xl rounded-[23px] overflow-hidden border border-slate-800/80">
                                
                                <!-- Foto Utama Sekolah / Gedung -->
                                <div class="relative h-64 sm:h-72 overflow-hidden">
                                    <!-- Ganti URL gambar di bawah dengan: {{ asset('images/gedung-sekolah.jpg') }} -->
                                    <img 
                                        src="{{ asset('images/gedung.jpg') }}"
                                        alt="Gedung SMK PGRI 2 Ponorogo"     
                                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    >
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                                    
                                    <div class="absolute top-4 left-4">
                                        <span class="px-3 py-1.5 bg-slate-900/80 backdrop-blur-md border border-slate-700 text-indigo-400 text-xs font-bold rounded-xl shadow-lg flex items-center gap-2">
                                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                                            Sekolah Pusat Keunggulan
                                        </span>
                                    </div>

                                    <div class="absolute bottom-4 left-4 right-4">
                                        <h3 class="text-xl font-bold text-white leading-tight">Gedung Kampus Utama</h3>
                                        <p class="text-xs text-slate-300 mt-0.5">SMK PGRI 2 Ponorogo</p>
                                    </div>
                                </div>

                                <!-- Details Content -->
                                <div class="p-6 space-y-4">
                                    <div class="space-y-3 bg-slate-950/60 p-4 rounded-2xl border border-slate-800/80 text-sm">
                                        <div class="flex items-center justify-between">
                                            <span class="text-slate-400">Status Pendaftaran</span>
                                            <span class="px-3 py-1 bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-bold rounded-full">Buka Gelombang 1</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span class="text-slate-400">Metode Seleksi</span>
                                            <span class="font-semibold text-slate-200">Administrasi & Raport</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span class="text-slate-400">Biaya Pendaftaran</span>
                                            <span class="font-semibold text-emerald-400">Gratis (Online)</span>
                                        </div>
                                    </div>

                                    <a href="/daftar" class="block w-full py-3.5 text-center font-bold text-white bg-indigo-600 hover:bg-indigo-500 rounded-xl transition duration-200 shadow-lg shadow-indigo-600/30">
                                        Mulai Pendaftaran Online
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Galeri Fasilitas Sekolah Section -->
        <section id="galeri" class="py-20 bg-slate-950 border-t border-slate-900 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="text-xs font-bold text-indigo-400 uppercase tracking-widest mb-3 block">Lingkungan BelajarModern</span>
                    <h2 class="text-3xl font-extrabold text-white sm:text-4xl">Fasilitas & Suasana Sekolah</h2>
                    <p class="mt-4 text-slate-400">Dukungan sarana dan prasarana industri berteknologi tinggi untuk kenyamanan belajar siswa.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Photo 1 -->
                    <div class="group relative rounded-2xl overflow-hidden border border-slate-800 bg-slate-900 h-64">
                        <!-- Ganti {{ asset('images/bengkel.jpg') }} -->
                        <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&q=80&w=800" alt="Bengkel Otomotif" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent opacity-80 group-hover:opacity-90 transition"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="text-xs font-bold text-indigo-400 uppercase tracking-wider">Praktik Praktis</span>
                            <h3 class="text-lg font-bold text-white">Bengkel Standard Industri</h3>
                        </div>
                    </div>

                    <!-- Photo 2 -->
                    <div class="group relative rounded-2xl overflow-hidden border border-slate-800 bg-slate-900 h-64">
                        <!-- Ganti {{ asset('images/lab-komputer.jpg') }} -->
                        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80&w=800" alt="Laboratorium Komputer" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent opacity-80 group-hover:opacity-90 transition"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="text-xs font-bold text-indigo-400 uppercase tracking-wider">Teknologi</span>
                            <h3 class="text-lg font-bold text-white">Laboratorium Komputer High-Spec</h3>
                        </div>
                    </div>

                    <!-- Photo 3 -->
                    <div class="group relative rounded-2xl overflow-hidden border border-slate-800 bg-slate-900 h-64">
                        <!-- Ganti {{ asset('images/kegiatan.jpg') }} -->
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800" alt="Siswa Berprestasi" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent opacity-80 group-hover:opacity-90 transition"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="text-xs font-bold text-indigo-400 uppercase tracking-wider">Karakter</span>
                            <h3 class="text-lg font-bold text-white">Kegiatan Ekstrakulikuler & Prestasi</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Jurusan / Program Keahlian Section -->
        <section id="jurusan" class="py-24 bg-slate-900 border-t border-slate-800/80 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-xs font-bold text-indigo-400 uppercase tracking-widest mb-3 block">Pilihan Masa Depan</span>
                    <h2 class="text-3xl font-extrabold text-white sm:text-4xl tracking-tight">Program Keahlian Unggulan</h2>
                    <p class="mt-4 text-slate-400">Pilih konsentrasi keahlian yang sesuai dengan minat dan bakatmu untuk meraih karir impian.</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Card 1: TKR -->
                    <div class="p-6 bg-slate-950/80 hover:bg-slate-950 rounded-2xl border border-slate-800 hover:border-blue-500/50 hover:shadow-2xl hover:shadow-blue-500/10 transition duration-300">
                        <div class="w-12 h-12 bg-blue-600/20 border border-blue-500/30 text-blue-400 rounded-xl flex items-center justify-center font-black mb-4">
                            TKR
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Teknik Kendaraan Ringan</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">Mempelajari perawatan dan perbaikan mesin otomotif mobil modern berbasis otomasi digital.</p>
                    </div>

                    <!-- Card 2: TBSM -->
                    <div class="p-6 bg-slate-950/80 hover:bg-slate-950 rounded-2xl border border-slate-800 hover:border-indigo-500/50 hover:shadow-2xl hover:shadow-indigo-500/10 transition duration-300">
                        <div class="w-12 h-12 bg-indigo-600/20 border border-indigo-500/30 text-indigo-400 rounded-xl flex items-center justify-center font-black mb-4">
                            TBSM
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Teknik Sepeda Motor</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">Spesialisasi perawatan sistem injeksi sepeda motor berstandar bengkel resmi industri terkemuka.</p>
                    </div>

                    <!-- Card 3: TAB -->
                    <div class="p-6 bg-slate-950/80 hover:bg-slate-950 rounded-2xl border border-slate-800 hover:border-amber-500/50 hover:shadow-2xl hover:shadow-amber-500/10 transition duration-300">
                        <div class="w-12 h-12 bg-amber-600/20 border border-amber-500/30 text-amber-400 rounded-xl flex items-center justify-center font-black mb-4">
                            TAB
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Teknik Alat Berat</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">Penguasaan pemeliharaan, perawatan, dan perbaikan mesin-mesin unit berat pertambangan dan konstruksi.</p>
                    </div>

                    <!-- Card 4: TBKR -->
                    <div class="p-6 bg-slate-950/80 hover:bg-slate-950 rounded-2xl border border-slate-800 hover:border-cyan-500/50 hover:shadow-2xl hover:shadow-cyan-500/10 transition duration-300">
                        <div class="w-12 h-12 bg-cyan-600/20 border border-cyan-500/30 text-cyan-400 rounded-xl flex items-center justify-center font-black mb-4">
                            TBKR
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Teknik Bodi Kendaraan Ringan</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">Mempelajari perbaikan struktur bodi kendaraan, ketok magic, pengecatan profesional, dan detailing otomotif.</p>
                    </div>

                    <!-- Card 5: TP -->
                    <div class="p-6 bg-slate-950/80 hover:bg-slate-950 rounded-2xl border border-slate-800 hover:border-slate-500/50 hover:shadow-2xl hover:shadow-slate-500/10 transition duration-300">
                        <div class="w-12 h-12 bg-slate-700/30 border border-slate-600/40 text-slate-300 rounded-xl flex items-center justify-center font-black mb-4">
                            TP
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Teknik Pemesinan</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">Mata pelajaran bubut, freis, serta pengoperasian mesin CNC presisi tinggi berstandar manufaktur.</p>
                    </div>

                    <!-- Card 6: LAS -->
                    <div class="p-6 bg-slate-950/80 hover:bg-slate-950 rounded-2xl border border-slate-800 hover:border-orange-500/50 hover:shadow-2xl hover:shadow-orange-500/10 transition duration-300">
                        <div class="w-12 h-12 bg-orange-600/20 border border-orange-500/30 text-orange-400 rounded-xl flex items-center justify-center font-black mb-4">
                            TPL
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Teknik Pengelasan</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">Spesialisasi teknik pengelasan industri (SMAW, GMAW, TIG) untuk kebutuhan manufaktur dan fabrikasi baja.</p>
                    </div>

                    <!-- Card 7: RPL -->
                    <div class="p-6 bg-slate-950/80 hover:bg-slate-950 rounded-2xl border border-slate-800 hover:border-emerald-500/50 hover:shadow-2xl hover:shadow-emerald-500/10 transition duration-300">
                        <div class="w-12 h-12 bg-emerald-600/20 border border-emerald-500/30 text-emerald-400 rounded-xl flex items-center justify-center font-black mb-4">
                            RPL
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Rekayasa Perangkat Lunak</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">Fokus pada pembuatan web, aplikasi mobile, database, dan pemrograman software profesional.</p>
                    </div>

                    <!-- Card 8: TKJ -->
                    <div class="p-6 bg-slate-950/80 hover:bg-slate-950 rounded-2xl border border-slate-800 hover:border-purple-500/50 hover:shadow-2xl hover:shadow-purple-500/10 transition duration-300">
                        <div class="w-12 h-12 bg-purple-600/20 border border-purple-500/30 text-purple-400 rounded-xl flex items-center justify-center font-black mb-4">
                            TKJ
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Teknik Komputer & Jaringan</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">Penguasaan infrastruktur jaringan komputer, mikrotik, server, dan keamanan siber.</p>
                    </div>

                    <!-- Card 9: DKV -->
                    <div class="p-6 bg-slate-950/80 hover:bg-slate-950 rounded-2xl border border-slate-800 hover:border-pink-500/50 hover:shadow-2xl hover:shadow-pink-500/10 transition duration-300">
                        <div class="w-12 h-12 bg-pink-600/20 border border-pink-500/30 text-pink-400 rounded-xl flex items-center justify-center font-black mb-4">
                            DKV
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Desain Komunikasi Visual</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">Pengembangan kreativitas multimedia, desain grafis, fotografi, videografi, dan animasi 2D/3D.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Alur Pendaftaran Section -->
        <section id="alur" class="py-24 bg-slate-950 border-t border-slate-900 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-xs font-bold text-indigo-400 uppercase tracking-widest mb-3 block">Langkah Mudah</span>
                    <h2 class="text-3xl font-extrabold text-white sm:text-4xl">Alur Pendaftaran Online</h2>
                    <p class="mt-4 text-slate-400">Proses pendaftaran cepat dan praktis dapat dilakukan kapan saja.</p>
                </div>

                <div class="grid md:grid-cols-4 gap-8 relative">
                    <!-- Step 1 -->
                    <div class="text-center bg-slate-900/60 p-6 rounded-2xl border border-slate-800/80">
                        <div class="w-16 h-16 bg-gradient-to-tr from-indigo-600 to-blue-600 text-white rounded-2xl flex items-center justify-center font-black text-2xl mx-auto mb-5 shadow-lg shadow-indigo-600/30">
                            1
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Isi Form Online</h3>
                        <p class="text-slate-400 text-sm">Lengkapi biodata diri dan upload foto terbaru melalui formulir website.</p>
                    </div>

                    <!-- Step 2 -->
                    <div class="text-center bg-slate-900/60 p-6 rounded-2xl border border-slate-800/80">
                        <div class="w-16 h-16 bg-gradient-to-tr from-indigo-600 to-blue-600 text-white rounded-2xl flex items-center justify-center font-black text-2xl mx-auto mb-5 shadow-lg shadow-indigo-600/30">
                            2
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Verifikasi Data</h3>
                        <p class="text-slate-400 text-sm">Panitia PPDB memeriksa kelengkapan administrasi yang diinputkan.</p>
                    </div>

                    <!-- Step 3 -->
                    <div class="text-center bg-slate-900/60 p-6 rounded-2xl border border-slate-800/80">
                        <div class="w-16 h-16 bg-gradient-to-tr from-indigo-600 to-blue-600 text-white rounded-2xl flex items-center justify-center font-black text-2xl mx-auto mb-5 shadow-lg shadow-indigo-600/30">
                            3
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Cek Data Siswa</h3>
                        <p class="text-slate-400 text-sm">Nama siswa terdaftar langsung di halaman Data Pendaftar publik.</p>
                    </div>

                    <!-- Step 4 -->
                    <div class="text-center bg-slate-900/60 p-6 rounded-2xl border border-slate-800/80">
                        <div class="w-16 h-16 bg-gradient-to-tr from-emerald-500 to-teal-600 text-white rounded-2xl flex items-center justify-center font-black text-2xl mx-auto mb-5 shadow-lg shadow-emerald-500/30">
                            4
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Daftar Ulang</h3>
                        <p class="text-slate-400 text-sm">Datang ke sekolah untuk penyerahan berkas fisik & pengambilan seragam.</p>
                    </div>
                </div>

                <div class="mt-16 text-center">
                    <a href="/daftar" class="inline-flex items-center gap-2 px-8 py-4 bg-indigo-600 hover:bg-indigo-500 text-white font-bold rounded-2xl shadow-xl shadow-indigo-600/30 transition duration-200">
                        Mulai Daftar Sekarang
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-slate-950 text-slate-500 py-10 border-t border-slate-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                    <div>
                        <span class="text-xl font-black text-white tracking-tight">SMK PGRI 2 Ponorogo</span>
                        <p class="text-xs mt-1 text-slate-400">Jl. Soekarno - Hatta No.156, Ponorogo, Jawa Timur</p>
                    </div>
                    <div class="text-xs text-center md:text-right text-slate-500">
                        <p>&copy; {{ date('Y') }} PPDB SMK PGRI 2 Ponorogo. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>

</body>
</html>