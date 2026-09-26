<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Cloudinary\Cloudinary;

class PublicSiswaController extends Controller
{
    // Menampilkan Form Pendaftaran Publik
    public function create()
    {
        return view('pendaftaran');
    }

    // Menyimpan Data Pendaftaran ke Database
    public function store(Request $request)
    {
        $request->validate([
            'nisn'          => 'required|numeric|unique:siswas,nisn',
            'nama_lengkap'  => 'required|string|max:255',
            'jenis_kelamin' => 'required|string',
            'asal_sekolah'  => 'required|string|max:255',
            'alamat'        => 'required|string',
            'foto'          => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $siswa = new Siswa();
        $siswa->nisn = $request->nisn;
        $siswa->nama_lengkap = $request->nama_lengkap;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->asal_sekolah = $request->asal_sekolah;
        $siswa->alamat = $request->alamat;

        // Proses upload foto langsung menggunakan Cloudinary SDK
        if ($request->hasFile('foto')) {
            $cloudinary = new Cloudinary(env('CLOUDINARY_URL'));
            
            $uploaded = $cloudinary->uploadApi()->upload(
                $request->file('foto')->getRealPath()
            );

            $siswa->foto = $uploaded['secure_url'];
        }

        $siswa->save();

        return redirect()->back()->with('success', 'Pendaftaran berhasil! Data Anda telah tersimpan.');
    }
}