<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class Mahasiswa extends Seeder
{
    public function run()
    {
        $mahasiswa_data = [
            [
                'npm' => '2017051054',
                'nama' => 'Fachri Azka Nur',
                'alamat' => 'Jl. Sultan Badarudin No.23',
                'created_at' => Time::now(),
                'updated_at' =>Time::now()
            ],
            [
                'npm' => '2017051006',
                'nama' => 'Adiwijaya',
                'alamat' => 'Gisting',
                'created_at' => Time::now(),
                'updated_at' =>Time::now()
            ],
            [
                'npm' => '2017051078',
                'nama' => 'Alif Akbar',
                'alamat' => 'Pringsewu',
                'created_at' => Time::now(),
                'updated_at' =>Time::now()
            ]
        ];
        // Using Query Builder
        foreach ($mahasiswa_data as $data){
            
            $this->db->table('mahasiswa')->insert($data);

        }
    }
}

