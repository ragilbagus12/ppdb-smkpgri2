<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-slate-100 leading-tight">
            {{ __('Daftar Pendaftaran Siswa') }}
        </h2>
    </x-slot>

    <div class="py-8 bg-[#0B0F19] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Section Chart (Diagram Statistik) -->
            <div class="p-6 bg-slate-900 rounded-2xl border border-slate-800 shadow-lg text-slate-100">
                @livewire(\App\Filament\Resources\Siswas\Widgets\StatsSiswaOverview::class)
            </div>

            <!-- Header Action & Search Bar -->
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4 bg-slate-900 p-4 rounded-2xl border border-slate-800 shadow-lg">
                <div class="relative w-full sm:w-80">
                    <input type="text" placeholder="Cari nama, NISN, atau sekolah..." class="w-full pl-10 pr-4 py-2 text-sm bg-slate-800 border border-slate-700 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-slate-100 placeholder-slate-400">
                    <svg class="w-4 h-4 text-slate-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>

                @if(auth()->check() && auth()->user()->is_admin)
                <a href="{{ route('siswa.create') }}" class="w-full sm:w-auto px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-sm rounded-xl transition shadow-md shadow-indigo-900/40 text-center flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    <span>Tambah Siswa Baru</span>
                </a>
                @endif
            </div>

            <!-- Table Card -->
            <div class="bg-slate-900 rounded-2xl border border-slate-800 shadow-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-800/60 border-b border-slate-800 text-xs font-bold text-slate-400 uppercase tracking-wider">
                                <th class="px-6 py-4">NO</th>
                                <th class="px-6 py-4">FOTO</th>
                                <th class="px-6 py-4">NISN</th>
                                <th class="px-6 py-4">NAMA LENGKAP</th>
                                <th class="px-6 py-4">JK</th>
                                <th class="px-6 py-4">ASAL SEKOLAH</th>
                                <th class="px-6 py-4">ALAMAT</th>
                                <th class="px-6 py-4 text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800 text-sm font-medium text-slate-300">
                            @forelse ($siswa as $item)
                            <tr class="hover:bg-slate-800/40 transition">
                                <td class="px-6 py-4 font-semibold text-slate-400">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4">
                                    @if($item->foto)
                                        <img src="{{ str_contains($item->foto, 'http') ? $item->foto : asset('storage/' . $item->foto) }}" 
                                             alt="Foto" 
                                             class="w-10 h-10 rounded-full object-cover ring-2 ring-indigo-500/30">
                                    @else
                                        <div class="w-10 h-10 rounded-full bg-slate-800 border border-slate-700 flex items-center justify-center text-xs text-slate-400 font-bold">N/A</div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 font-bold text-slate-100">{{ $item->nisn }}</td>
                                <td class="px-6 py-4 font-semibold text-slate-200">{{ $item->nama_lengkap }}</td>
                                <td class="px-6 py-4">
                                    @if(in_array($item->jenis_kelamin, ['Laki-laki', 'L']))
                                        <span class="px-2.5 py-1 rounded-full text-xs font-bold bg-blue-500/10 text-blue-400 border border-blue-500/20">Laki-laki</span>
                                    @else
                                        <span class="px-2.5 py-1 rounded-full text-xs font-bold bg-pink-500/10 text-pink-400 border border-pink-500/20">Perempuan</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-slate-300">{{ $item->asal_sekolah }}</td>
                                <td class="px-6 py-4 text-slate-400 max-w-xs truncate">{{ $item->alamat }}</td>
                                <td class="px-6 py-4 text-center">
                                    @if(auth()->check() && auth()->user()->is_admin)
                                        <div class="flex items-center justify-center gap-2">
                                            <a href="{{ route('siswa.edit', $item->id) }}" class="px-3 py-1.5 text-xs font-bold text-indigo-400 bg-indigo-500/10 hover:bg-indigo-500/20 border border-indigo-500/20 rounded-lg transition">Edit</a>
                                            <form action="{{ route('siswa.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-3 py-1.5 text-xs font-bold text-rose-400 bg-rose-500/10 hover:bg-rose-500/20 border border-rose-500/20 rounded-lg transition">Hapus</button>
                                            </form>
                                        </div>
                                    @else
                                        <span class="px-2.5 py-1 bg-slate-800 text-slate-400 text-xs font-semibold rounded-lg border border-slate-700 italic">Hanya Baca</span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="px-6 py-8 text-center text-slate-500">
                                    Belum ada data pendaftar siswa.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <!-- Script Renderer Chart -->
    @if(isset($chart))
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        {!! $chart->script() !!}
    @endif
</x-app-layout>