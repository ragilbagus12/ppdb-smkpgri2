<!DOCTYPE html>
<html lang="id" class="h-full bg-slate-950">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran PPDB Online</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full text-slate-100 antialiased selection:bg-indigo-500 selection:text-white relative overflow-x-hidden py-10 px-4 sm:px-6 lg:px-8 flex items-center justify-center">

    <!-- Efek Lampu Latar Belakang (Glowing Background) -->
    <div class="fixed top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-tr from-indigo-600/20 via-blue-600/15 to-purple-600/10 rounded-full blur-[140px] pointer-events-none"></div>
    <div class="fixed -bottom-20 -right-20 w-96 h-96 bg-blue-600/15 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="w-full max-w-2xl mx-auto relative z-10">
        
        <!-- Header & Top Badge -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/30 text-indigo-300 text-xs font-bold uppercase tracking-wider mb-4 shadow-inner">
                <span class="w-2 h-2 rounded-full bg-indigo-400 animate-pulse"></span>
                PPDB Online {{ date('Y') }}/{{ date('Y') + 1 }}
            </div>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">Formulir Pendaftaran Siswa</h1>
            <p class="text-slate-400 text-sm mt-2 max-w-md mx-auto">Isi data calon peserta didik secara lengkap dan benar sesuai dokumen resmi.</p>
        </div>

        <!-- Card Container Utama -->
        <div class="bg-slate-900/80 backdrop-blur-2xl border border-slate-800 rounded-3xl p-6 sm:p-10 shadow-2xl shadow-indigo-950/50">
            
            <!-- Notifikasi Sukses -->
            @if(session('success'))
                <div class="mb-6 p-4 rounded-2xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-sm flex items-center gap-3">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <!-- Form Pendaftaran -->
            <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- NISN -->
                <div>
                    <label for="nisn" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                        NISN <span class="text-rose-400">*</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0"/></svg>
                        </div>
                        <input 
                            type="text" 
                            name="nisn" 
                            id="nisn" 
                            value="{{ old('nisn') }}" 
                            placeholder="Masukkan 10 digit NISN" 
                            required 
                            maxlength="10"
                            class="w-full pl-11 pr-4 py-3 bg-slate-950/70 border border-slate-800 rounded-xl text-white placeholder-slate-500 text-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition duration-200"
                        >
                    </div>
                    @error('nisn') <p class="mt-1.5 text-xs text-rose-400">{{ $message }}</p> @enderror
                </div>

                <!-- Nama Lengkap -->
                <div>
                    <label for="nama_lengkap" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                        Nama Lengkap <span class="text-rose-400">*</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </div>
                        <input 
                            type="text" 
                            name="nama_lengkap" 
                            id="nama_lengkap" 
                            value="{{ old('nama_lengkap') }}" 
                            placeholder="Nama lengkap sesuai ijazah/akta" 
                            required
                            class="w-full pl-11 pr-4 py-3 bg-slate-950/70 border border-slate-800 rounded-xl text-white placeholder-slate-500 text-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition duration-200"
                        >
                    </div>
                    @error('nama_lengkap') <p class="mt-1.5 text-xs text-rose-400">{{ $message }}</p> @enderror
                </div>

                <!-- Jenis Kelamin -->
                <div>
                    <label for="jenis_kelamin" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                        Jenis Kelamin <span class="text-rose-400">*</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                        </div>
                        <select 
                            name="jenis_kelamin" 
                            id="jenis_kelamin" 
                            required
                            class="w-full pl-11 pr-10 py-3 bg-slate-950/70 border border-slate-800 rounded-xl text-white text-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition duration-200 appearance-none"
                        >
                            <option value="" disabled {{ old('jenis_kelamin') ? '' : 'selected' }} class="bg-slate-900 text-slate-400">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }} class="bg-slate-900 text-white">Laki-laki</option>
                            <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }} class="bg-slate-900 text-white">Perempuan</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none text-slate-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </div>
                    </div>
                    @error('jenis_kelamin') <p class="mt-1.5 text-xs text-rose-400">{{ $message }}</p> @enderror
                </div>

                <!-- Asal Sekolah -->
                <div>
                    <label for="asal_sekolah" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                        Asal Sekolah <span class="text-rose-400">*</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </div>
                        <input 
                            type="text" 
                            name="asal_sekolah" 
                            id="asal_sekolah" 
                            value="{{ old('asal_sekolah') }}" 
                            placeholder="Contoh: SMPN 1 Ponorogo" 
                            required
                            class="w-full pl-11 pr-4 py-3 bg-slate-950/70 border border-slate-800 rounded-xl text-white placeholder-slate-500 text-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition duration-200"
                        >
                    </div>
                    @error('asal_sekolah') <p class="mt-1.5 text-xs text-rose-400">{{ $message }}</p> @enderror
                </div>

                <!-- Alamat Rumah -->
                <div>
                    <label for="alamat" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                        Alamat Rumah <span class="text-rose-400">*</span>
                    </label>
                    <div class="relative">
                        <div class="absolute top-3.5 left-0 pl-3.5 flex items-start pointer-events-none text-slate-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <textarea 
                            name="alamat" 
                            id="alamat" 
                            rows="3" 
                            placeholder="Alamat lengkap (RT/RW, Desa, Kecamatan, Kabupaten)" 
                            required
                            class="w-full pl-11 pr-4 py-3 bg-slate-950/70 border border-slate-800 rounded-xl text-white placeholder-slate-500 text-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition duration-200"
                        >{{ old('alamat') }}</textarea>
                    </div>
                    @error('alamat') <p class="mt-1.5 text-xs text-rose-400">{{ $message }}</p> @enderror
                </div>

                <!-- Upload Foto Siswa (Dropzone Style) -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                        Foto Pas Siswa <span class="text-slate-500 font-normal">(Maks. 2MB, JPG/PNG)</span>
                    </label>
                    
                    <div class="relative border-2 border-dashed border-slate-800 hover:border-indigo-500/60 rounded-2xl p-4 sm:p-6 bg-slate-950/40 text-center transition duration-300 cursor-pointer group">
                        <input 
                            type="file" 
                            name="foto" 
                            id="foto" 
                            accept="image/*"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
                            onchange="previewImage(event)"
                        >
                        
                        <!-- Pratinjau Foto jika terpilih -->
                        <div id="image-preview-wrapper" class="hidden mb-3">
                            <img id="image-preview" class="w-24 h-28 object-cover rounded-xl mx-auto border-2 border-indigo-500 shadow-lg">
                        </div>

                        <!-- Placeholder Tampilan Upload -->
                        <div id="upload-placeholder" class="space-y-2">
                            <div class="w-12 h-12 rounded-2xl bg-indigo-600/10 border border-indigo-500/20 text-indigo-400 flex items-center justify-center mx-auto group-hover:scale-110 transition duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </div>
                            <div class="text-sm font-semibold text-slate-300">
                                <span class="text-indigo-400 group-hover:underline">Klik untuk pilih foto</span> atau tarik file ke sini
                            </div>
                            <p class="text-xs text-slate-500" id="file-name">Format gambar: JPG, JPEG, PNG</p>
                        </div>
                    </div>
                    @error('foto') <p class="mt-1.5 text-xs text-rose-400 block">{{ $message }}</p> @enderror
                </div>

                <!-- Tombol Submit -->
                <div class="pt-2">
                    <button 
                        type="submit" 
                        class="w-full py-4 bg-gradient-to-r from-indigo-600 to-blue-600 hover:from-indigo-500 hover:to-blue-500 text-white font-bold rounded-2xl shadow-xl shadow-indigo-600/30 transition-all duration-200 flex items-center justify-center gap-2 hover:-translate-y-0.5 active:translate-y-0 text-base cursor-pointer"
                    >
                        <span>Kirim Pendaftaran</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <!-- Script Pratinjau Foto -->
    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('image-preview');
            const previewWrapper = document.getElementById('image-preview-wrapper');
            const fileNameText = document.getElementById('file-name');

            if (input.files && input.files[0]) {
                const file = input.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    previewWrapper.classList.remove('hidden');
                    fileNameText.textContent = "File terpilih: " + file.name;
                    fileNameText.classList.add('text-indigo-400', 'font-medium');
                }

                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>