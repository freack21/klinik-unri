<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;

class Berita extends Component
{
    public $search = '';

    public static $beritaList = [
        [
            'judul' => 'Lonjakan Global Infeksi yang Kebal Antibiotik',
            'deskripsi' => 'World Health Organization (WHO) melaporkan bahwa sekitar 1 dari 6 infeksi bakteri di seluruh dunia kini kebal terhadap pengobatan antibiotik.',
            'gambar' => 'img/antibiotik.png',
            'sumber' => 'BRI.CO.ID',
            'tanggal' => '2023-09-10',
            'konten' => "
Organisasi Kesehatan Dunia (WHO) merilis Global Research Agenda for Antimicrobial Resistance in Human Health yang mencakup 40 topik penelitian prioritas untuk mengatasi meningkatnya resistansi antimikroba (AMR) akibat penggunaan obat antimikroba yang berlebihan pada manusia, hewan, dan tumbuhan.
<br>
Pada tahun 2019, AMR menyebabkan langsung sekitar 1,27 juta kematian dan berkontribusi pada 4,97 juta kematian di seluruh dunia. Di Indonesia, AMR menjadi masalah kesehatan mendesak, dan pada 2030 negara ini diperkirakan termasuk lima besar dunia dengan peningkatan konsumsi antimikroba tertinggi.
<br>
Bagi Indonesia, agenda ini melengkapi rencana nasional penanggulangan AMR dengan pendekatan berorientasi pasien—yang menjadi pertama di dunia. Rencana tersebut juga mendukung survei nasional AMR pada infeksi aliran darah (diluncurkan November 2024) dan pengendalian TB resistan obat yang pada 2023 menyerang sekitar 30.000 orang.
<br>
WHO berkomitmen membantu Indonesia menerjemahkan penelitian menjadi aksi nyata untuk memperkuat sistem kesehatan dan menjaga efektivitas obat-obatan penting.
            ",
            'id' => 1,
        ],
        [
            'judul' => 'Kemenkes Targetkan Delapan Juta Tes Malaria Pada 2025',
            'deskripsi' => 'Kementerian Kesehatan menargetkan sebanyak 8 juta tes malaria pada 2025 untuk menekan jumlah kasus.',
            'gambar' => 'img/berita-thumbnail.png',
            'sumber' => 'BRI.CO.ID',
            'tanggal' => '2023-09-10',
            'konten' => "
Organisasi Kesehatan Dunia (WHO) merilis Global Research Agenda for Antimicrobial Resistance in Human Health yang mencakup 40 topik penelitian prioritas untuk mengatasi meningkatnya resistansi antimikroba (AMR) akibat penggunaan obat antimikroba yang berlebihan pada manusia, hewan, dan tumbuhan.
Pada tahun 2019, AMR menyebabkan langsung sekitar 1,27 juta kematian dan berkontribusi pada 4,97 juta kematian di seluruh dunia. Di Indonesia, AMR menjadi masalah kesehatan mendesak, dan pada 2030 negara ini diperkirakan termasuk lima besar dunia dengan peningkatan konsumsi antimikroba tertinggi.
Bagi Indonesia, agenda ini melengkapi rencana nasional penanggulangan AMR dengan pendekatan berorientasi pasien—yang menjadi pertama di dunia. Rencana tersebut juga mendukung survei nasional AMR pada infeksi aliran darah (diluncurkan November 2024) dan pengendalian TB resistan obat yang pada 2023 menyerang sekitar 30.000 orang.
WHO berkomitmen membantu Indonesia menerjemahkan penelitian menjadi aksi nyata untuk memperkuat sistem kesehatan dan menjaga efektivitas obat-obatan penting.
            ",
            'id' => 2,
        ],
        [
            'judul' => 'Temuan dalam Program Cek Kesehatan Gratis 2025',
            'deskripsi' => 'Program Cek Kesehatan Gratis (CKG) mulai menunjukkan hasil positif di berbagai provinsi.',
            'gambar' => 'img/berita-thumbnail.png',
            'sumber' => 'BRI.CO.ID',
            'tanggal' => '2023-09-10',
            'konten' => "
Organisasi Kesehatan Dunia (WHO) merilis Global Research Agenda for Antimicrobial Resistance in Human Health yang mencakup 40 topik penelitian prioritas untuk mengatasi meningkatnya resistansi antimikroba (AMR) akibat penggunaan obat antimikroba yang berlebihan pada manusia, hewan, dan tumbuhan.
Pada tahun 2019, AMR menyebabkan langsung sekitar 1,27 juta kematian dan berkontribusi pada 4,97 juta kematian di seluruh dunia. Di Indonesia, AMR menjadi masalah kesehatan mendesak, dan pada 2030 negara ini diperkirakan termasuk lima besar dunia dengan peningkatan konsumsi antimikroba tertinggi.
Bagi Indonesia, agenda ini melengkapi rencana nasional penanggulangan AMR dengan pendekatan berorientasi pasien—yang menjadi pertama di dunia. Rencana tersebut juga mendukung survei nasional AMR pada infeksi aliran darah (diluncurkan November 2024) dan pengendalian TB resistan obat yang pada 2023 menyerang sekitar 30.000 orang.
WHO berkomitmen membantu Indonesia menerjemahkan penelitian menjadi aksi nyata untuk memperkuat sistem kesehatan dan menjaga efektivitas obat-obatan penting.
            ",
            'id' => 3,
        ],
        [
            'judul' => 'WHO Mendesak Peningkatan Upaya Melawan Bakteri Super',
            'deskripsi' => 'WHO memperingatkan peningkatan bakteri super yang kebal obat.',
            'gambar' => 'img/berita-thumbnail.png',
            'sumber' => 'BRI.CO.ID',
            'tanggal' => '2023-09-10',
            'konten' => "
Organisasi Kesehatan Dunia (WHO) merilis Global Research Agenda for Antimicrobial Resistance in Human Health yang mencakup 40 topik penelitian prioritas untuk mengatasi meningkatnya resistansi antimikroba (AMR) akibat penggunaan obat antimikroba yang berlebihan pada manusia, hewan, dan tumbuhan.
Pada tahun 2019, AMR menyebabkan langsung sekitar 1,27 juta kematian dan berkontribusi pada 4,97 juta kematian di seluruh dunia. Di Indonesia, AMR menjadi masalah kesehatan mendesak, dan pada 2030 negara ini diperkirakan termasuk lima besar dunia dengan peningkatan konsumsi antimikroba tertinggi.
Bagi Indonesia, agenda ini melengkapi rencana nasional penanggulangan AMR dengan pendekatan berorientasi pasien—yang menjadi pertama di dunia. Rencana tersebut juga mendukung survei nasional AMR pada infeksi aliran darah (diluncurkan November 2024) dan pengendalian TB resistan obat yang pada 2023 menyerang sekitar 30.000 orang.
WHO berkomitmen membantu Indonesia menerjemahkan penelitian menjadi aksi nyata untuk memperkuat sistem kesehatan dan menjaga efektivitas obat-obatan penting.
            ",
            'id' => 4,
        ],
    ];

    public function render()
    {
        return view('livewire.landing-page.berita', [
            'headNews' => self::$beritaList[0],
            'latestNews' => array_slice(self::$beritaList, 1),
        ]);
    }
}
