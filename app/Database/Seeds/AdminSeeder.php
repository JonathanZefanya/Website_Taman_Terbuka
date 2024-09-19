<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'password' => password_hash('admin', PASSWORD_BCRYPT),
                'email'    => 'admin@example.com',
            ],
            [
                'username' => 'JonathanZefanya',
                'password' => password_hash('123', PASSWORD_BCRYPT),
                'email'    => 'jonathan.zefanya16@gmail.com',
            ],
        ];

        // Masukkan data ke dalam tabel admin
        $this->db->table('admin')->insertBatch($data);
    }
}
