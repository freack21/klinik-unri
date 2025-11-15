<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;

class Layanan extends Component
{
    public static array $layananList = [
        [
            'title' => 'Poli Keluarga Berencana',
            'icon'  => 'heroicon-o-user-group',
            'text' => "Poli Keluarga Berencana Klinik UNRI memberikan layanan konsultasi dan tindakan terkait perencanaan kehamilan, penggunaan alat kontrasepsi, serta edukasi kesehatan reproduksi. Layanan ini bertujuan membantu pasangan usia subur dalam merencanakan jumlah dan jarak kelahiran anak secara aman, sehat, dan sesuai kebutuhan keluarga. Pemeriksaan dan tindakan dilakukan oleh tenaga medis yang berpengalaman dan bersertifikat di bidang keluarga berencana.",
            'fasilitas' => [
                'Pemeriksaan Kesehatan',
                'Konsultasi',
                'Pemberian Alat Kontrasepsi',
                'Edukasi Kesehatan Reproduksi',
            ],
            'id' => 1,
        ],
        [
            'title' => 'Poli Umum',
            'icon'  => 'heroicon-o-heart',
            'text' => "Poli Umum Klinik UNRI melayani pemeriksaaan dan pengobatan dasar bagi pasien dengan keluhan umum, seperti demam, batuk, pilek, nyeri otot, dan keluhan  kesehatan ringan lainnya. Pemeriksaan dilakukan oleh dokter umum berpengalaman yang siap memberikan layanan terbaik",
            'fasilitas' => [
                'Pemeriksaan Kesehatan',
                'Konsultasi',
                'Pemberian Obat',
                'Edukasi Kesehatan',
            ],
            'id' => 2,
        ],
        [
            'title' => 'Unit Gawat Darurat',
            'icon'  => 'heroicon-o-shield-check',
            'text' => "Unit Gawat Darurat Klinik UNRI siap melayani pasien dengan keadaan medis yang memerlukan perawatan intensif dan cepat. Unit ini didukung oleh tenaga medis yang berpengalaman dan peralatan medis modern untuk memberikan pelayanan kesehatan yang cepat dan efektif.",
            'fasilitas' => [
                'Pemeriksaan Kesehatan',
                'Konsultasi',
                'Pemberian Obat',
                'Edukasi Kesehatan',
            ],
            'id' => 3,
        ],
        [
            'title' => 'Poli Gigi dan Mulut',
            'icon'  => 'iconpark-teeth',
            'text' => "Poli Gigi dan Mulut Klinik UNRI melayani pemeriksaan, pencegahan, dan pengobatan masalah kesehatan gigi dan mulut. Layanan ini mencakup pembersihan gigi, penambalan gigi, pengobatan gigi berlubang, dan pencegahan masalah gigi dan mulut lainnya.",
            'fasilitas' => [
                'Pemeriksaan Kesehatan',
                'Konsultasi',
                'Pemberian Obat',
                'Edukasi Kesehatan',
            ],
            'id' => 4,
        ],
        [
            'title' => 'Home Care',
            'icon'  => 'heroicon-o-home',
            'text' => "Home Care Klinik UNRI melayani pelayanan kesehatan di tempat tinggal pasien. Layanan ini mencakup pemeriksaan kesehatan, pengobatan, dan pelayanan medis lainnya yang dilakukan di rumah pasien.",
            'fasilitas' => [
                'Pemeriksaan Kesehatan',
                'Konsultasi',
                'Pemberian Obat',
                'Edukasi Kesehatan',
            ],
            'id' => 5,
        ],
        [
            'title' => 'Poli Kesehatan Ibu dan Anak',
            'icon'  => 'heroicon-o-users',
            'text' => "Poli Kesehatan Ibu dan Anak Klinik UNRI melayani pemeriksaan, pencegahan, dan pengobatan masalah kesehatan ibu hamil, ibu menyusui, dan anak-anak. Layanan ini mencakup pemeriksaan kesehatan, konsultasi, pemberian obat, dan edukasi kesehatan.",
            'fasilitas' => [
                'Pemeriksaan Kesehatan',
                'Konsultasi',
                'Pemberian Obat',
                'Edukasi Kesehatan',
            ],
            'id' => 6,
        ],
    ];

    public function render()
    {
        return view('livewire.landing-page.layanan', [
            'services' => self::$layananList,
        ]);
    }
}
