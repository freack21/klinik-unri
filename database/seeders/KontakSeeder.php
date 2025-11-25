<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Kontak::create([
            'description' => 'Kami siap melayani dan menjawab pertanyaan Anda. Silakan kunjungi lokasi kami atau kirim pesan melalui formulir di bawah.',
            'service_hours' => 'Senin – Jumat 08:00 - 16:00',
            'phone' => '082214301418',
            'whatsapp' => '087789760632',
            'email' => 'abcd@unri.ac.id',
            'map_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6584847896!2d101.35824631475395!3d0.4637899997396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a8f3e1e1e1e1%3A0x1e1e1e1e1e1e1e1e!2sUniversitas%20Riau!5e0!3m2!1sid!2sid!4v1234567890123!5m2!1sid!2sid',
        ]);
    }
}
