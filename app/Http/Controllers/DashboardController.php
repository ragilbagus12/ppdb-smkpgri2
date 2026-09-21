<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung total data dari database
        $totalSiswa = Siswa::count();
        $totalLaki = Siswa::whereIn('jenis_kelamin', ['Laki-laki', 'L'])->count();
        $totalPerempuan = Siswa::whereIn('jenis_kelamin', ['Perempuan', 'P'])->count();

        // Hitung persentase
        $persenLaki = $totalSiswa > 0 ? round(($totalLaki / $totalSiswa) * 100) : 0;
        $persenPerempuan = $totalSiswa > 0 ? round(($totalPerempuan / $totalSiswa) * 100) : 0;

        // Ambil 5 pendaftar terbaru
        $pendaftarTerbaru = Siswa::latest()->take(5)->get();

        // Tahun Ajaran saat ini
        $taSekarang = date('Y') . '/' . (date('Y') + 1);

        // Kirim seluruh variabel ke view dashboard
        return view('dashboard', compact(
            'totalSiswa',
            'totalLaki',
            'totalPerempuan',
            'persenLaki',
            'persenPerempuan',
            'pendaftarTerbaru',
            'taSekarang'
        ));
    }
}