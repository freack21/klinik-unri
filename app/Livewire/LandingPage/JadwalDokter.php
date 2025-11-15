<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;

class JadwalDokter extends Component
{
    public string $selectedDoctor = 'sri'; // default dokter

    public array $doctors = [
        'sri' => [
            'name' => 'dr. Sri Wulandari, Sp.A',
            'specialization' => 'Dokter Anak',
            'image' => '/img/dokter/sri.png',
            'patients' => '2,000+',
            'experience' => '10 Tahun',
            'education' => 'Universitas Indonesia',
            'languages' => 'Indonesia, English',
            'skills' => [
                'Kesehatan Anak & Balita',
                'Imunisasi',
                'Nutrisi Anak',
            ],
            'schedule' => [
                ['day' => 'Senin', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Selasa', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Rabu', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Kamis', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Jum’at', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Sabtu', 'time' => '08.00 – 12.00 WIB', 'available' => true],
            ],
        ],

        'andi' => [
            'name' => 'dr. Andi Pratama, Sp.A',
            'specialization' => 'Dokter Spesialis Gigi',
            'image' => '/img/dokter/andi.png',
            'patients' => '1,500+',
            'experience' => '8 Tahun',
            'education' => 'Universitas Airlangga',
            'languages' => 'Indonesia',
            'skills' => ['Tumbuh Kembang Anak', 'Alergi Anak'],
            'schedule' => [
                ['day' => 'Senin', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Selasa', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Rabu', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Kamis', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Jum’at', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Sabtu', 'time' => '08.00 – 12.00 WIB', 'available' => true],
            ],
        ],

        'rafi' => [
            'name' => 'drg. Rafi Nugroho, Sp.OG',
            'specialization' => 'Dokter Spesialis Kandungan',
            'image' => '/img/dokter/rafi.png',
            'patients' => '1,800+',
            'experience' => '6 Tahun',
            'education' => 'Universitas Indonesia',
            'languages' => 'Indonesia, English',
            'skills' => ['Kehamilan & Persalinan', 'Konsultasi Kesuburan', 'Perawatan Ibu'],
            'schedule' => [
                ['day' => 'Senin', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Selasa', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Rabu', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Kamis', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Jum’at', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Sabtu', 'time' => '08.00 – 12.00 WIB', 'available' => true],
            ],
        ],

        'sarah' => [
            'name' => 'dr. Sarah Wijaya, M.Kes',
            'specialization' => 'Dokter Umum',
            'image' => '/img/dokter/sarah.png',
            'patients' => '1,200+',
            'experience' => '8 Tahun',
            'education' => 'Universitas Indonesia',
            'languages' => 'Indonesia, English',
            'skills' => ['Pemeriksaan Umum', 'Konsultasi Kesehatan', 'Penanganan Penyakit Ringan'],
            'schedule' => [
                ['day' => 'Senin', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Selasa', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Rabu', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Kamis', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Jum’at', 'time' => '08.00 – 12.00 WIB', 'available' => true],
                ['day' => 'Sabtu', 'time' => '08.00 – 12.00 WIB', 'available' => true],
            ],
        ],
    ];

    public function render()
    {
        return view('livewire.landing-page.jadwal-dokter', [
            'doctor' => $this->doctors[$this->selectedDoctor],
        ]);
    }
}
