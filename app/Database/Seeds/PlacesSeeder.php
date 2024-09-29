<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PlacesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Ini Test Data
            [
                'name' => 'Institut Teknologi Indonesia',
                'location' => 'Jl. Puspitek Raya Blok J.1 No. 24, Tangerang Selatan, Indonesia Kota Tangerang Selatan Banten',
                'description' => 'Institut Teknologi Indonesia adalah perguruan tinggi yang menawarkan program pendidikan dan bidang studi yang sesuai dengan minat mahasiswa.',
                'photo' => 'test-data.jpeg',
                'latitude' => '-6.3437639',
                'longitude' => '106.6731423',
                'link' => 'https://iti.ac.id/',
            ],

            // Ini Data yang Sebenarnya
            [
                'name' => 'Taman Suropati',
                'location' => 'Jl. Taman Suropati No. 5, Menteng, Kec. Menteng, Jakarta Pusat',
                'description' => 'Taman Suropati adalah taman publik yang terletak di kawasan elit Menteng, Jakarta Pusat.',
                'photo' => 'taman_suropati.jpg',
                'latitude' => '-6.1999704',
                'longitude' => '106.8298595',
                'link' => 'https://id.wikipedia.org/wiki/Taman_Suropati',
            ],
            [
                'name' => 'Taman Menteng',
                'location' => 'Jl. HOS Cokroaminoto No. 1, Menteng, Kec. Menteng, Jakarta Pusat',
                'description' => 'Taman modern yang dilengkapi dengan fasilitas olahraga, taman bermain, dan lapangan futsal.',
                'photo' => 'taman_menteng.jpg',
                'latitude' => '-6.1964034',
                'longitude' => '106.8267357',
                'link' => 'https://jakartaparks.id/taman-menteng/',
            ],
            [
                'name' => 'Taman Situ Lembang',
                'location' => 'Jl. Lembang Terusan, Menteng, Kec. Menteng, Jakarta Pusat',
                'description' => 'Taman dengan danau buatan yang indah, cocok untuk rekreasi keluarga.',
                'photo' => 'taman_situ_lembang.jpg',
                'latitude' => '-6.197373',
                'longitude' => '106.8317699',
                'link' => 'https://id.wikipedia.org/wiki/Taman_Situ_Lembang',
            ],
            [
                'name' => 'Taman Waduk Pluit',
                'location' => 'Jl. Pluit Timur Raya No. 12, Pluit, Kec. Penjaringan, Jakarta Utara',
                'description' => 'Taman luas di tepi Waduk Pluit, dilengkapi jalur jogging, taman bermain, dan tempat piknik.',
                'photo' => 'taman_waduk_pluit.jpg',
                'latitude' => '-6.1137239',
                'longitude' => '106.7924748',
                'link' => 'https://id.wikipedia.org/wiki/Taman_Waduk_Pluit',
            ],
            [
                'name' => 'Taman Mini Indonesia Indah',
                'location' => 'Jl. Taman Mini Indonesia Indah, Cipayung, Jakarta Timur',
                'description' => 'Taman bertema budaya Indonesia dengan berbagai paviliun yang merepresentasikan daerah-daerah di Indonesia.',
                'photo' => 'taman_mini.jpg',
                'latitude' => '-6.3020169',
                'longitude' => '106.8714383',
                'link' => 'https://www.tamanmini.com/',
            ],
            [
                'name' => 'Taman Kota Cattleya',
                'location' => 'Jl. Letjen S. Parman, Tomang, Kec. Grogol Petamburan, Jakarta Barat',
                'description' => 'Taman hijau dengan danau buatan, jogging track, dan area bermain anak.',
                'photo' => 'taman_cattleya.jpg',
                'latitude' => '-6.1783122',
                'longitude' => '106.7768274',
                'link' => 'https://jakartaparks.id/taman-cattleya/',
            ],
            [
                'name' => 'Taman Tabebuya',
                'location' => 'Jl. Moh. Kahfi 1 No. 17, Jagakarsa, Jakarta Selatan',
                'description' => 'Taman dengan bunga Tabebuya yang indah, lengkap dengan area bermain anak dan jogging track.',
                'photo' => 'taman_tabebuya.jpg',
                'latitude' => '-6.3277957',
                'longitude' => '106.8072861',
                'link' => 'https://id.wikipedia.org/wiki/Taman_Tabebuya',
            ],
            [
                'name' => 'Taman Ayodia',
                'location' => 'Jl. Lamandau III No. 8, Kramat Pela, Kec. Kebayoran Baru, Jakarta Selatan',
                'description' => 'Taman dengan danau kecil yang cocok untuk bersantai, jogging, atau rekreasi keluarga.',
                'photo' => 'taman_ayodya.jpg',
                'latitude' => '-6.2450561',
                'longitude' => '106.7937361',
                'link' => 'https://id.wikipedia.org/wiki/Taman_Ayodya',
            ],
            [
                'name' => 'Taman Langsat',
                'location' => 'Jl. Barito, Kramat Pela, Kec. Kebayoran Baru, Jakarta Selatan',
                'description' => 'Taman rindang dengan pepohonan yang asri, ideal untuk bersantai dan olahraga.',
                'photo' => 'taman_langsat.jpg',
                'latitude' => '-6.244034',
                'longitude' => '106.7904209',
                'link' => 'https://id.wikipedia.org/wiki/Taman_Langsat',
            ],
            [
                'name' => 'Taman Spathodea',
                'location' => 'Jl. Kebagusan Raya, Jagakarsa, Kec. Jagakarsa, Jakarta Selatan',
                'description' => 'Taman hijau dengan berbagai fasilitas rekreasi, cocok untuk berolahraga atau berkumpul bersama keluarga.',
                'photo' => 'taman_spathodea.jpg',
                'latitude' => '-6.3214222',
                'longitude' => '106.820575',
                'link' => 'https://id.wikipedia.org/wiki/Taman_Spathodea',
            ],
        ];        
        
        // Using Query Builder
        $this->db->table('places')->insertBatch($data);
    }
}
