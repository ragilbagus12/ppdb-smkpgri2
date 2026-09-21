<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between gap-4">
            <h2 class="font-bold text-lg sm:text-xl text-slate-800 dark:text-slate-100 tracking-wide flex items-center gap-2 truncate">
                <span class="inline-block w-2.5 h-2.5 rounded-full bg-indigo-500 shadow-[0_0_10px_#6366f1] shrink-0"></span>
                <span class="truncate">Dashboard Utama</span>
            </h2>
            <div class="text-xs text-indigo-400 font-semibold bg-indigo-500/10 border border-indigo-500/20 px-3 py-1.5 rounded-lg shrink-0 whitespace-nowrap">
                TA {{ $taSekarang ?? date('Y').'/'.(date('Y')+1) }}
            </div>
        </div>
    </x-slot>

    <div class="py-6 sm:py-8 bg-[#0B0F19] text-slate-100 min-h-[calc(100vh-65px)] relative overflow-hidden -m-6 p-6 sm:-m-8 sm:p-8">
        <!-- Ambient Glow Background -->
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-indigo-600/10 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute top-1/2 -right-40 w-96 h-96 bg-blue-600/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto space-y-6 sm:space-y-8 relative z-10">

            <!-- Hero Welcome Banner -->
            <div class="relative overflow-hidden rounded-2xl sm:rounded-3xl bg-slate-900/80 border border-slate-800 p-6 sm:p-8 backdrop-blur-xl shadow-2xl">
                <div class="absolute top-0 right-0 w-80 h-80 bg-gradient-to-br from-indigo-500/20 via-blue-500/10 to-transparent rounded-full blur-3xl pointer-events-none"></div>
                
                <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-6">
                    <div class="max-w-2xl">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/30 text-indigo-300 text-xs font-semibold uppercase tracking-wider mb-3">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse shadow-[0_0_8px_#34d399]"></span>
                            Panel Sistem PPDB
                        </div>
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight text-white">
                            Selamat Datang, <span class="bg-gradient-to-r from-indigo-400 to-blue-400 bg-clip-text text-transparent">{{ auth()->user()->name }}</span>! 👋
                        </h1>
                        <p class="mt-2 text-slate-400 text-xs sm:text-sm leading-relaxed">
                            Sistem Informasi Penerimaan Peserta Didik Baru SMK PGRI 2 Ponorogo. Kelola data pendaftaran dan pantau statistik siswa secara real-time.
                        </p>
                    </div>

                    @if(auth()->user()->is_admin)
                    <div class="flex flex-wrap sm:flex-nowrap gap-3 shrink-0">
                        <a href="{{ route('siswa.index') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-xs transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                            Kelola Data Siswa
                        </a>
                        <a href="{{ route('siswa.create') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-white font-medium text-xs transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                            Tambah Pendaftar
                        </a>
                    </div>
                @endif
                </div>
            </div>

            <!-- Stats Overview Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6">
                
                <!-- Card Total -->
                <div class="relative bg-slate-900/60 rounded-2xl p-5 border border-slate-800/80 backdrop-blur-xl shadow-xl hover:border-indigo-500/50 transition duration-300 group overflow-hidden">
                    <div class="flex items-center justify-between">
                        <div class="space-y-1">
                            <p class="text-[11px] font-semibold uppercase tracking-wider text-slate-400">Total Pendaftar</p>
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-white">
                                {{ $totalSiswa }} 
                                <span class="text-xs sm:text-sm font-normal text-slate-400">Siswa</span>
                            </h3>
                            <p class="text-xs text-emerald-400 font-medium flex items-center gap-1.5 pt-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                Terdaftar di sistem
                            </p>
                        </div>
                        <div class="w-11 h-11 rounded-xl bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 flex items-center justify-center group-hover:scale-110 group-hover:bg-indigo-600 group-hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        </div>
                    </div>
                </div>

                <!-- Card Laki-Laki -->
                <div class="relative bg-slate-900/60 rounded-2xl p-5 border border-slate-800/80 backdrop-blur-xl shadow-xl hover:border-blue-500/50 transition duration-300 group overflow-hidden">
                    <div class="flex items-center justify-between">
                        <div class="space-y-1">
                            <p class="text-[11px] font-semibold uppercase tracking-wider text-slate-400">Pendaftar Laki-Laki</p>
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-white">
                                {{ $totalLaki }} 
                                <span class="text-xs sm:text-sm font-normal text-slate-400">({{ $persenLaki }}%)</span>
                            </h3>
                            <p class="text-xs text-blue-400 font-medium flex items-center gap-1.5 pt-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-400"></span>
                                Siswa Laki-laki
                            </p>
                        </div>
                        <div class="w-11 h-11 rounded-xl bg-blue-500/10 border border-blue-500/20 text-blue-400 flex items-center justify-center group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </div>
                    </div>
                </div>

                <!-- Card Perempuan -->
                <div class="relative bg-slate-900/60 rounded-2xl p-5 border border-slate-800/80 backdrop-blur-xl shadow-xl hover:border-pink-500/50 transition duration-300 group overflow-hidden">
                    <div class="flex items-center justify-between">
                        <div class="space-y-1">
                            <p class="text-[11px] font-semibold uppercase tracking-wider text-slate-400">Pendaftar Perempuan</p>
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-white">
                                {{ $totalPerempuan }} 
                                <span class="text-xs sm:text-sm font-normal text-slate-400">({{ $persenPerempuan }}%)</span>
                            </h3>
                            <p class="text-xs text-pink-400 font-medium flex items-center gap-1.5 pt-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-pink-400"></span>
                                Siswa Perempuan
                            </p>
                        </div>
                        <div class="w-11 h-11 rounded-xl bg-pink-500/10 border border-pink-500/20 text-pink-400 flex items-center justify-center group-hover:scale-110 group-hover:bg-pink-600 group-hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Progress Bar Gender -->
            @if ($totalSiswa > 0)
            <div class="bg-slate-900/60 p-4 rounded-2xl border border-slate-800 backdrop-blur-xl">
                <div class="flex justify-between items-center text-xs text-slate-400 mb-2">
                    <span class="flex items-center gap-1.5 font-medium"><span class="w-2 h-2 rounded-full bg-blue-500"></span> Laki-laki: {{ $totalLaki }} ({{ $persenLaki }}%)</span>
                    <span class="flex items-center gap-1.5 font-medium"><span class="w-2 h-2 rounded-full bg-pink-500"></span> Perempuan: {{ $totalPerempuan }} ({{ $persenPerempuan }}%)</span>
                </div>
                <div class="w-full h-2.5 bg-slate-800 rounded-full overflow-hidden flex p-0.5 border border-slate-700/50">
                    <div class="bg-gradient-to-r from-blue-600 to-blue-400 h-full rounded-l-full transition-all duration-500" style="width: {{ $persenLaki }}%"></div>
                    <div class="bg-gradient-to-r from-pink-500 to-pink-400 h-full rounded-r-full transition-all duration-500" style="width: {{ $persenPerempuan }}%"></div>
                </div>
            </div>
            @endif

            <!-- Table & Menu Akses Cepat -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <!-- Table Pendaftar Terbaru -->
                <div class="lg:col-span-2 bg-slate-900/60 rounded-2xl p-5 sm:p-6 border border-slate-800 backdrop-blur-xl shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <div>
                                <h3 class="text-base font-bold text-white">Pendaftar Terbaru</h3>
                                <p class="text-xs text-slate-400">5 Calon siswa terakhir yang masuk</p>
                            </div>
                            <a href="{{ route('siswa.index') }}" class="text-xs text-indigo-400 hover:text-indigo-300 font-semibold flex items-center gap-1">
                                Lihat Semua
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-xs sm:text-sm text-slate-300">
                                <thead class="text-[11px] text-slate-400 uppercase bg-slate-800/60">
                                    <tr>
                                        <th class="px-3 py-2.5 rounded-l-lg">Nama Siswa</th>
                                        <th class="px-3 py-2.5">JK</th>
                                        <th class="px-3 py-2.5">Asal Sekolah</th>
                                        <th class="px-3 py-2.5 rounded-r-lg text-right">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-800/60">
                                    @forelse ($pendaftarTerbaru as $siswa)
                                    <tr class="hover:bg-slate-800/30 transition">
                                        <td class="px-3 py-3 font-medium text-white flex items-center gap-2.5">
                                            <div class="w-7 h-7 rounded-full bg-slate-800 border border-slate-700 flex items-center justify-center text-xs font-bold text-indigo-400 shrink-0">
                                                {{ strtoupper(substr($siswa->nama_lengkap ?? $siswa->nama ?? 'S', 0, 1)) }}
                                            </div>
                                            <span class="truncate max-w-[150px] sm:max-w-none">{{ $siswa->nama_lengkap ?? $siswa->nama ?? 'N/A' }}</span>
                                        </td>
                                        <td class="px-3 py-3">
                                            @if (in_array($siswa->jenis_kelamin, ['Laki-laki', 'L']))
                                                <span class="px-2 py-0.5 rounded text-[10px] font-semibold bg-blue-500/10 text-blue-400 border border-blue-500/20">L</span>
                                            @else
                                                <span class="px-2 py-0.5 rounded text-[10px] font-semibold bg-pink-500/10 text-pink-400 border border-pink-500/20">P</span>
                                            @endif
                                        </td>
                                        <td class="px-3 py-3 text-slate-400 max-w-[120px] truncate sm:max-w-none">{{ $siswa->asal_sekolah ?? '-' }}</td>
                                        <td class="px-3 py-3 text-right text-xs text-slate-500 whitespace-nowrap">
                                            {{ $siswa->created_at ? $siswa->created_at->format('d M Y') : '-' }}
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="px-4 py-8 text-center text-slate-500 text-xs">
                                            Belum ada data pendaftar.
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Menu Akses Cepat -->
                <div class="space-y-3">
                    <h3 class="text-base font-bold text-white px-1">Menu Akses Cepat</h3>

                    <a href="{{ route('siswa.index') }}" class="group block bg-slate-900/60 p-4 rounded-2xl border border-slate-800 hover:border-indigo-500/50 backdrop-blur-xl shadow-lg transition duration-300">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 flex items-center justify-center group-hover:scale-105 group-hover:bg-indigo-600 group-hover:text-white transition duration-300 shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white text-xs sm:text-sm group-hover:text-indigo-400 transition">Kelola Data Siswa</h4>
                                    <p class="text-[11px] text-slate-400">Lihat, edit, atau hapus pendaftar</p>
                                </div>
                            </div>
                            <svg class="w-4 h-4 text-slate-500 group-hover:text-indigo-400 group-hover:translate-x-1 transition duration-200 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </div>
                    </a>

                    @if(Auth::user()->email === 'admin@gmail.com')
                    <a href="/admin" target="_blank" class="group block bg-slate-900/60 p-4 rounded-2xl border border-slate-800 hover:border-purple-500/50 backdrop-blur-xl shadow-lg transition duration-300">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-purple-500/10 border border-purple-500/20 text-purple-400 flex items-center justify-center group-hover:scale-105 group-hover:bg-purple-600 group-hover:text-white transition duration-300 shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white text-xs sm:text-sm group-hover:text-purple-400 transition">Panel Admin Filament</h4>
                                    <p class="text-[11px] text-slate-400">Akses laporan & ekspor data</p>
                                </div>
                            </div>
                            <svg class="w-4 h-4 text-slate-500 group-hover:text-purple-400 group-hover:translate-x-1 transition duration-200 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </div>
                    </a>
                    @endif

                    <a href="/" target="_blank" class="group block bg-slate-900/60 p-4 rounded-2xl border border-slate-800 hover:border-emerald-500/50 backdrop-blur-xl shadow-lg transition duration-300">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 flex items-center justify-center group-hover:scale-105 group-hover:bg-emerald-600 group-hover:text-white transition duration-300 shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white text-xs sm:text-sm group-hover:text-emerald-400 transition">Lihat Landing Page</h4>
                                    <p class="text-[11px] text-slate-400">Portal informasi utama PPDB</p>
                                </div>
                            </div>
                            <svg class="w-4 h-4 text-slate-500 group-hover:text-emerald-400 group-hover:translate-x-1 transition duration-200 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </div>
                    </a>

                </div>

            </div>

        </div>
    </div>
</x-app-layout>