<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $layananList = [
            [
                'title' => 'Poli Keluarga Berencana',
                'icon'  => 'heroicon-o-user-group',
                'description' => "Poli Keluarga Berencana Klinik UNRI memberikan layanan konsultasi dan tindakan terkait perencanaan kehamilan, penggunaan alat kontrasepsi, serta edukasi kesehatan reproduksi. Layanan ini bertujuan membantu pasangan usia subur dalam merencanakan jumlah dan jarak kelahiran anak secara aman, sehat, dan sesuai kebutuhan keluarga. Pemeriksaan dan tindakan dilakukan oleh tenaga medis yang berpengalaman dan bersertifikat di bidang keluarga berencana.",
                'fasilitas' => [
                    'Pemeriksaan Kesehatan',
                    'Konsultasi',
                    'Pemberian Alat Kontrasepsi',
                    'Edukasi Kesehatan Reproduksi',
                ],
            ],
            [
                'title' => 'Poli Umum',
                'icon'  => 'heroicon-o-heart',
                'description' => "Poli Umum Klinik UNRI melayani pemeriksaaan dan pengobatan dasar bagi pasien dengan keluhan umum, seperti demam, batuk, pilek, nyeri otot, dan keluhan  kesehatan ringan lainnya. Pemeriksaan dilakukan oleh dokter umum berpengalaman yang siap memberikan layanan terbaik",
                'fasilitas' => [
                    'Pemeriksaan Kesehatan',
                    'Konsultasi',
                    'Pemberian Obat',
                    'Edukasi Kesehatan',
                ],
            ],
            [
                'title' => 'Unit Gawat Darurat',
                'icon'  => 'heroicon-o-shield-check',
                'description' => "Unit Gawat Darurat Klinik UNRI siap melayani pasien dengan keadaan medis yang memerlukan perawatan intensif dan cepat. Unit ini didukung oleh tenaga medis yang berpengalaman dan peralatan medis modern untuk memberikan pelayanan kesehatan yang cepat dan efektif.",
                'fasilitas' => [
                    'Pemeriksaan Kesehatan',
                    'Konsultasi',
                    'Pemberian Obat',
                    'Edukasi Kesehatan',
                ],
            ],
            [
                'title' => 'Poli Gigi dan Mulut',
                'icon'  => 'iconpark-teeth',
                'description' => "Poli Gigi dan Mulut Klinik UNRI melayani pemeriksaan, pencegahan, dan pengobatan masalah kesehatan gigi dan mulut. Layanan ini mencakup pembersihan gigi, penambalan gigi, pengobatan gigi berlubang, dan pencegahan masalah gigi dan mulut lainnya.",
                'fasilitas' => [
                    'Pemeriksaan Kesehatan',
                    'Konsultasi',
                    'Pemberian Obat',
                    'Edukasi Kesehatan',
                ],
            ],
            [
                'title' => 'Home Care',
                'icon'  => 'heroicon-o-home',
                'description' => "Home Care Klinik UNRI melayani pelayanan kesehatan di tempat tinggal pasien. Layanan ini mencakup pemeriksaan kesehatan, pengobatan, dan pelayanan medis lainnya yang dilakukan di rumah pasien.",
                'fasilitas' => [
                    'Pemeriksaan Kesehatan',
                    'Konsultasi',
                    'Pemberian Obat',
                    'Edukasi Kesehatan',
                ],
            ],
            [
                'title' => 'Poli Kesehatan Ibu dan Anak',
                'icon'  => 'heroicon-o-users',
                'description' => "Poli Kesehatan Ibu dan Anak Klinik UNRI melayani pemeriksaan, pencegahan, dan pengobatan masalah kesehatan ibu hamil, ibu menyusui, dan anak-anak. Layanan ini mencakup pemeriksaan kesehatan, konsultasi, pemberian obat, dan edukasi kesehatan.",
                'fasilitas' => [
                    'Pemeriksaan Kesehatan',
                    'Konsultasi',
                    'Pemberian Obat',
                    'Edukasi Kesehatan',
                ],
            ],
        ];

        foreach ($layananList as $layanan) {
            \App\Models\Layanan::create($layanan);
        }
    }
}
