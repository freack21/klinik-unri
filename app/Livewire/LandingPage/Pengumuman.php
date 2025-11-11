<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;

class Pengumuman extends Component
{

    public static $pengumumanList = [
        1 => [
            'judul' => 'Layanan Vaksin Influenza Telah Dibuka',
            'tanggal' => '10 Oktober 2025',
            'konten' => "
                Kini tersedia layanan vaksin influenza untuk masyarakat umum di Klinik UNRI Sehat.
                Program ini bertujuan untuk membantu masyarakat dalam meningkatkan daya tahan tubuh
                terhadap penyakit influenza yang sering muncul saat pergantian musim.<br><br>
                <strong>Berikut informasi tambahan terkait layanan vaksin influenza:</strong><br>
                • <strong>Lokasi:</strong> Klinik UNRI Sehat, Kampus UNRI Panam, Pekanbaru<br>
                • <strong>Sasaran:</strong> Masyarakat umum, mahasiswa, dan tenaga pendidik<br>
                • <strong>Jadwal Dokter:</strong> Dapat dilihat melalui menu Jadwal Dokter pada website<br>
                • <strong>Waktu Pelayanan:</strong> Senin – Jumat, pukul 08.00–16.00 WIB<br><br>
                Untuk info biaya, syarat, dan ketersediaan vaksin, silakan hubungi Klinik UNRI Sehat melalui kontak di bawah halaman ini.
            ",
        ],
        2 => [
            'judul' => 'Donor Darah Bersama PMI Kota Pekanbaru',
            'tanggal' => '12 Oktober 2025',
            'konten' => "
                Mari bergabung dalam kegiatan donor darah bersama PMI Kota Pekanbaru
                yang diselenggarakan oleh Klinik UNRI Sehat. Kegiatan ini terbuka untuk umum
                dan diharapkan dapat membantu meningkatkan stok darah di PMI.<br><br>
                <strong>Lokasi:</strong> Klinik UNRI Sehat, Kampus UNRI Panam<br>
                <strong>Waktu:</strong> 12 Oktober 2025, pukul 08.00 – 12.00 WIB<br>
                <strong>Peserta:</strong> Masyarakat umum, dosen, dan mahasiswa UNRI
            ",
        ],
        3 => [
            'judul' => 'Update Jadwal Praktik Dokter',
            'tanggal' => '03 Oktober 2025',
            'konten' => "
                Diberitahukan kepada seluruh pasien Klinik UNRI Sehati, bahwa terdapat perubahan sementara pada jadwal praktik salah satu dokter kami. Penyesuaian ini bertujuan untuk memastikan layanan kesehatan berjalan optimal.
                <br><br>
                <strong>Berikut rincian perubahan jadwal praktik dokter yang baru:</strong><br>
                <ul class='list-disc ml-8'>
                    <li>Dokter Terdampak: Dr. Ahmad Wijay (Spesialis Umum).</li>
                    <li>Perubahan: Jadwal praktik di hari Senin ditiadakan sementara.</li>
                    <li>Jadwal Baru: Praktik rutin hanya tersedia pada hari Selasa, Rabu, dan Jumat.</li>
                    <li>Mulai Berlaku: Perubahan ini berlaku efektif mulai minggu depan (10 Oktober 2025).</li>
                </ul>
                <br>
                Mohon cek menu Jadwal Dokter di website sebelum berkunjung. Untuk konfirmasi janji temu atau ketersediaan dokter lainnya, silakan hubungi kontak di sidebar.
            ",
        ],
    ];

    public function render()
    {
        return view('livewire.landing-page.pengumuman');
    }
}
