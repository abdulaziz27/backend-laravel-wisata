<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // Air Terjun (Curug)
            [
                'name' => 'Curug Telu',
                'description' => 'Air terjun dengan tiga aliran yang menawarkan pemandangan indah dan suasana tenang di kawasan Baturaden.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Curug Ceheng',
                'description' => 'Air terjun setinggi 13 meter dengan kolam alami di bawahnya, dikelilingi alam yang masih asri.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Curug Jenggala',
                'description' => 'Air terjun setinggi 30 meter dengan tiga aliran air yang berbeda, memiliki dek kayu berbentuk hati sebagai spot foto favorit.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Curug Bayan',
                'description' => 'Air terjun dengan suasana alam yang asri, cocok untuk rekreasi dan fotografi.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Curug Cipendok',
                'description' => 'Air terjun setinggi 92 meter yang terletak di lereng Gunung Slamet, menawarkan suasana alami dan udara sejuk.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Curug Gomblang',
                'description' => 'Air terjun tersembunyi dengan suasana tenang dan alami di lereng Gunung Slamet, cocok untuk hiking dan fotografi.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Curug Lawang',
                'description' => 'Air terjun yang dikelilingi tebing tinggi dan pohon rindang, menghadirkan suasana sejuk dan tenang.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Curug Nangga',
                'description' => 'Air terjun bertingkat dengan lanskap yang memukau, setiap tingkat membentuk kolam alami yang jernih.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Mata Air Panas
            [
                'name' => 'Pancuran Telu',
                'description' => 'Sumber mata air panas alami dari Gunung Slamet di kompleks Lokawisata Baturraden, dipercaya dapat menyembuhkan penyakit kulit.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pancuran Pitu',
                'description' => 'Sumber mata air panas alami dengan tujuh pancuran yang dipercaya memiliki khasiat untuk kesehatan kulit.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Taman dan Kebun
            [
                'name' => 'Taman Botani Baturaden',
                'description' => 'Taman botani yang menampilkan berbagai koleksi tanaman, cocok untuk edukasi dan rekreasi keluarga.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Kebun Raya Baturaden',
                'description' => 'Kebun raya seluas 143,5 hektar yang menampilkan berbagai koleksi tanaman dan menawarkan suasana alam yang sejuk dan asri.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Taman Mas Kemambang',
                'description' => 'Taman indah dengan danau kecil di tengahnya, dihiasi jembatan melengkung dan berbagai bunga warna-warni.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Bukit dan Pemandangan
            [
                'name' => 'Bukit Bintang Baturaden',
                'description' => 'Lokasi yang menawarkan pemandangan malam hari dengan gemerlap lampu kota Purwokerto dari ketinggian.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Bukit Tranggulasih',
                'description' => 'Destinasi favorit untuk melihat sunrise dan citylight Purwokerto, sering dijadikan tempat camping.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Bukit Agaran',
                'description' => 'Tempat wisata alam tersembunyi dengan trekking ringan, view alam terbuka, dan pepohonan hijau.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Hutan
            [
                'name' => 'Hutan Pinus Limpakuwus',
                'description' => 'Hutan pinus dengan suasana sejuk dan pemandangan indah, cocok untuk piknik, berfoto, atau bersantai.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Lokawisata dan Rekreasi
            [
                'name' => 'Lokawisata Baturaden',
                'description' => 'Objek wisata keluarga yang menawarkan pemandangan Gunung Slamet, air terjun Curug Gumawang, dan berbagai wahana permainan.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'The Village Purwokerto',
                'description' => 'Taman rekreasi dengan konsep arsitektur Eropa yang menawarkan berbagai wahana permainan dan spot foto menarik.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Baturraden Adventure Forest',
                'description' => 'Ekowisata yang menawarkan berbagai aktivitas petualangan seperti body rafting, canyoning, paintball, dan camping keluarga.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Museum dan Sejarah
            [
                'name' => 'Museum Jenderal Sudirman',
                'description' => 'Museum yang didedikasikan untuk mengenang jasa Jendral Sudirman, menampilkan diorama, foto, dan peninggalan sejarah perjuangan.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Telaga
            [
                'name' => 'Telaga Sunyi',
                'description' => 'Telaga dengan air jernih berwarna biru toska yang berada di tengah hutan, menawarkan suasana tenang dan damai.',
                'opening_hours' => '08:00 - 17:00',
                'location' => 'Purwokerto',
                'map_link'  => 'https://maps.app.goo.gl/hNfDNSobthnNfRGr8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        DB::table('categories')->insert($categories);
    }
}
