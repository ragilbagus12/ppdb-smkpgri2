<?php

namespace App\Filament\Resources\Siswas\Widgets;

use App\Models\Siswa;
use Filament\Widgets\ChartWidget;

class StatsSiswaOverview extends ChartWidget
{
    protected ?string $heading = 'Statistik Pendaftaran Siswa';

    protected function getData(): array
    {
        $lakiLaki = Siswa::whereIn('jenis_kelamin', ['L', 'Laki-laki'])->count();
        $perempuan = Siswa::whereIn('jenis_kelamin', ['P', 'Perempuan'])->count();

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Siswa',
                    'data' => [$lakiLaki, $perempuan],
                    'backgroundColor' => [
                        'rgba(59, 130, 246, 0.85)',
                        'rgba(236, 72, 153, 0.85)',
                    ],
                    'borderColor' => [
                        '#3b82f6',
                        '#ec4899',
                    ],
                    'borderWidth' => 1,
                    'borderRadius' => 6,
                    'barPercentage' => 0.25, 
                    'categoryPercentage' => 0.5,
                ],
            ],
            'labels' => ['Laki-laki', 'Perempuan'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => false,
                ],
                'tooltip' => [
                    'backgroundColor' => '#1e293b', // Latar gelap slate-800
                    'titleColor' => '#f8fafc',       // Teks judul putih
                    'bodyColor' => '#38bdf8',        // Teks angka biru terang
                    'borderColor' => '#334155',     // Border slate-700
                    'borderWidth' => 1,
                    'padding' => 10,
                    'displayColors' => false,
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'ticks' => [
                        'stepSize' => 1,
                        'precision' => 0,
                        'color' => '#94a3b8',        // Teks label sumbu Y
                    ],
                    'grid' => [
                        'color' => '#1e293b',        // Garis grid tema gelap
                    ],
                ],
                'x' => [
                    'ticks' => [
                        'color' => '#94a3b8',        // Teks label sumbu X
                    ],
                    'grid' => [
                        'display' => false,
                    ],
                ],
            ],
        ];
    }
}