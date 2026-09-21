<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts & Styles bawaan -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    @filamentStyles
</head>
<body class="font-sans antialiased bg-[#0B0F19] text-slate-100 min-h-screen">
    <!-- Wrapper Utama dengan State Sidebar Alpine.js -->
    <div x-data="{ sidebarOpen: true }" class="min-h-screen flex relative overflow-x-hidden bg-[#0B0F19]">
        
        <!-- SIDEBAR -->
        <aside 
            :class="sidebarOpen ? 'translate-x-0 w-64' : '-translate-x-full w-0 md:w-0'"
            class="fixed inset-y-0 left-0 z-30 bg-slate-900 border-r border-slate-800 transition-all duration-300 ease-in-out flex flex-col justify-between overflow-hidden shadow-lg"
        >
            <div>
                <!-- Header Sidebar & Tombol Close (Mobile) -->
                <div class="h-16 flex items-center justify-between px-6 border-b border-slate-800">
                    <div class="flex items-center space-x-3">
                        <div class="bg-indigo-600 text-white p-2 rounded-lg font-bold">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            </svg>
                        </div>
                        <span class="font-bold text-lg text-slate-100 whitespace-nowrap">PPDB App</span>
                    </div>

                    <!-- Tombol Tutup Sidebar -->
                    <button @click="sidebarOpen = false" class="text-slate-400 hover:text-white focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Navigasi Menu -->
                <nav class="mt-6 px-4 space-y-2">
                    <!-- Dashboard -->
                    <a href="{{ route('dashboard') }}" 
                       class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors whitespace-nowrap {{ request()->routeIs('dashboard') ? 'bg-indigo-600 text-white font-semibold' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }}">
                        <svg class="w-5 h-5 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Dashboard
                    </a>

                    <!-- Pendaftaran Siswa -->
                    <a href="{{ route('siswa.index') }}" 
                       class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors whitespace-nowrap {{ request()->routeIs('siswa.*') ? 'bg-indigo-600 text-white font-semibold' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }}">
                        <svg class="w-5 h-5 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        Pendaftaran Siswa
                    </a>

                    <!-- Panel Admin Filament (Hanya Admin) -->
                    @if(Auth::user()->email === 'admin@gmail.com')
                    <a href="/admin" 
                       target="_blank"
                       class="flex items-center px-4 py-3 text-sm font-medium text-purple-400 hover:bg-purple-900/40 rounded-lg transition-colors whitespace-nowrap">
                        <svg class="w-5 h-5 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Panel Admin (Filament)
                    </a>
                    @endif
                </nav>
            </div>

            <!-- Footer User Profile & Logout -->
            <div class="p-4 border-t border-slate-800">
                <div class="text-sm font-semibold text-slate-300 truncate mb-2">
                    {{ Auth::user()->name }}
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center w-full px-3 py-2 text-sm text-red-400 hover:bg-red-900/30 rounded-lg transition whitespace-nowrap">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        Keluar / Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- KONTEN UTAMA (Kanan) -->
        <div 
            :class="sidebarOpen ? 'md:ml-64' : 'ml-0'" 
            class="flex-1 flex flex-col min-w-0 transition-all duration-300 ease-in-out bg-[#0B0F19]"
        >
            <!-- Topbar Header / Navbar Atas -->
            <header class="h-16 bg-slate-900/80 backdrop-blur-md border-b border-slate-800 flex items-center justify-between px-6 sticky top-0 z-20">
                <!-- Tombol Buka/Tutup Sidebar -->
                <button @click="sidebarOpen = !sidebarOpen" class="text-slate-300 hover:text-white focus:outline-none p-2 rounded-lg hover:bg-slate-800">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <!-- Judul Halaman -->
                @if (isset($header))
                    <div class="font-semibold text-xl text-slate-100 leading-tight">
                        {{ $header }}
                    </div>
                @endif
            </header>

            <!-- Isi Halaman Utama -->
            <main class="p-6 flex-1 bg-[#0B0F19]">
                {{ $slot }}
            </main>
        </div>

    </div>
    
    <!-- Muat Chart.js SEBELUM script Filament -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    @livewireScripts
    @filamentScripts
</body>
</html>