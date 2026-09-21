<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::latest()->get();

        // Hitung data gender
        $lakiLaki = Siswa::whereIn('jenis_kelamin', ['L', 'Laki-laki'])->count();
        $perempuan = Siswa::whereIn('jenis_kelamin', ['P', 'Perempuan'])->count();

        // Buat objek chart sederhana menggunakan LarapexChart / Chartjs
        // Jika tidak menggunakan package khusus, kita oper data jumlah langsung ke view
        return view('siswa.index', compact('siswa', 'lakiLaki', 'perempuan'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nisn'          => 'required|unique:siswas,nisn',
        'nama_lengkap'  => 'required',
        'jenis_kelamin' => 'required',
        'asal_sekolah'  => 'required',
        'alamat'        => 'required',
        'foto'          => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $siswa = new Siswa();
    $siswa->nisn          = $request->nisn;
    $siswa->nama_lengkap  = $request->nama_lengkap;
    $siswa->jenis_kelamin = $request->jenis_kelamin;
    $siswa->asal_sekolah  = $request->asal_sekolah;
    $siswa->alamat        = $request->alamat;

    if ($request->hasFile('foto')) {
        $siswa->foto = $request->file('foto')->store('siswa-foto', 'public');
    }

    $siswa->save();

    return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan!');
}

    // 4. EDIT: Menampilkan form untuk mengedit data siswa
    public function edit(Siswa $siswa)
    {
        if (!auth()->user()->is_admin && strtolower(auth()->user()->role ?? '') !== 'admin' && strtolower(auth()->user()->name) !== 'admin') {
            abort(403, 'Akses Ditolak. Anda bukan Admin.');
        }

        return view('siswa.edit', compact('siswa'));
    }

    // 5. UPDATE: Menyimpan perubahan data siswa ke database
    public function update(Request $request, Siswa $siswa)
    {
        if (!auth()->user()->is_admin && strtolower(auth()->user()->role ?? '') !== 'admin' && strtolower(auth()->user()->name) !== 'admin') {
            abort(403, 'Akses Ditolak. Anda bukan Admin.');
        }

        $request->validate([
            'nisn' => 'required|unique:siswas,nisn,' . $siswa->id,
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'asal_sekolah' => 'required',
            'alamat' => 'required',
        ]);

        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    // 6. DELETE: Menghapus data siswa dari database
    public function destroy(Siswa $siswa)
    {
        if (!auth()->user()->is_admin && strtolower(auth()->user()->role ?? '') !== 'admin' && strtolower(auth()->user()->name) !== 'admin') {
            abort(403, 'Akses Ditolak. Anda bukan Admin.');
        }

        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}
