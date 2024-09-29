<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PlacesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Taman Suropati',
                'location' => 'Menteng, Jakarta Pusat',
                'description' => 'Taman Suropati adalah taman publik yang terletak di kawasan elit Menteng, Jakarta Pusat.',
                'photo' => 'taman_suropati.jpg',
                'latitude' => '-6.196437',
                'longitude' => '106.832963',
                'link' => 'https://id.wikipedia.org/wiki/Taman_Suropati',
            ],
            [
                'name' => 'Taman Menteng',
                'location' => 'Menteng, Jakarta Pusat',
                'description' => 'Taman modern yang dilengkapi dengan fasilitas olahraga, taman bermain, dan lapangan futsal.',
                'photo' => 'taman_menteng.jpg',
                'latitude' => '-6.198940',
                'longitude' => '106.828728',
                'link' => 'https://id.wikipedia.org/wiki/Taman_Menteng',
            ],
            [
                'name' => 'Taman Situ Lembang',
                'location' => 'Menteng, Jakarta Pusat',
                'description' => 'Taman dengan danau buatan yang indah, cocok untuk rekreasi keluarga.',
                'photo' => 'taman_situ_lembang.jpg',
                'latitude' => '-6.196672',
                'longitude' => '106.832778',
                'link' => 'https://id.wikipedia.org/wiki/Taman_Situ_Lembang',
            ],
            [
                'name' => 'Taman Waduk Pluit',
                'location' => 'Penjaringan, Jakarta Utara',
                'description' => 'Taman luas di tepi Waduk Pluit, dilengkapi jalur jogging, taman bermain, dan tempat piknik.',
                'photo' => 'taman_waduk_pluit.jpg',
                'latitude' => '-6.127899',
                'longitude' => '106.790224',
                'link' => 'https://id.wikipedia.org/wiki/Taman_Waduk_Pluit',
            ],
            [
                'name' => 'Taman Mini Indonesia Indah',
                'location' => 'Cipayung, Jakarta Timur',
                'description' => 'Taman bertema budaya Indonesia dengan berbagai paviliun yang merepresentasikan daerah-daerah di Indonesia.',
                'photo' => 'taman_mini.jpg',
                'latitude' => '-6.302337',
                'longitude' => '106.895073',
                'link' => 'https://id.wikipedia.org/wiki/Taman_Mini_Indonesia_Indah',
            ],
            [
                'name' => 'Taman Cattleya',
                'location' => 'Tomang, Jakarta Barat',
                'description' => 'Taman hijau dengan danau buatan, jogging track, dan area bermain anak.',
                'photo' => 'taman_cattleya.jpg',
                'latitude' => '-6.191535',
                'longitude' => '106.797998',
                'link' => 'https://id.wikipedia.org/wiki/Taman_Cattleya',
            ],
            [
                'name' => 'Taman Tabebuya',
                'location' => 'Jagakarsa, Jakarta Selatan',
                'description' => 'Taman dengan bunga Tabebuya yang indah, lengkap dengan area bermain anak dan jogging track.',
                'photo' => 'taman_tabebuya.jpg',
                'latitude' => '-6.317764',
                'longitude' => '106.818225',
                'link' => 'https://id.wikipedia.org/wiki/Taman_Tabebuya',
            ],
            [
                'name' => 'Taman Ayodya',
                'location' => 'Kebayoran Baru, Jakarta Selatan',
                'description' => 'Taman dengan danau kecil yang cocok untuk bersantai, jogging, atau rekreasi keluarga.',
                'photo' => 'taman_ayodya.jpg',
                'latitude' => '-6.244140',
                'longitude' => '106.797737',
                'link' => 'https://id.wikipedia.org/wiki/Taman_Ayodya',
            ],
            [
                'name' => 'Taman Langsat',
                'location' => 'Kebayoran Baru, Jakarta Selatan',
                'description' => 'Taman rindang dengan pepohonan yang asri, ideal untuk bersantai dan olahraga.',
                'photo' => 'taman_langsat.jpg',
                'latitude' => '-6.245709',
                'longitude' => '106.797423',
                'link' => 'https://id.wikipedia.org/wiki/Taman_Langsat',
            ],
            [
                'name' => 'Taman Spathodea',
                'location' => 'Jagakarsa, Jakarta Selatan',
                'description' => 'Taman hijau dengan berbagai fasilitas rekreasi, cocok untuk berolahraga atau berkumpul bersama keluarga.',
                'photo' => 'taman_spathodea.jpg',
                'latitude' => '-6.319695',
                'longitude' => '106.827611',
                'link' => 'https://id.wikipedia.org/wiki/Taman_Spathodea',
            ],
        ];
        
        // Using Query Builder
        $this->db->table('places')->insertBatch($data);
    }
}
