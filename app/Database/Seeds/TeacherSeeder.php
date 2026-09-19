<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        $teacherNames = [
            'Budi Santoso', 'Siti Rahmawati', 'Agus Setiawan', 'Dewi Lestari', 'Eko Prasetyo',
            'Fitri Handayani', 'Hendra Wijaya', 'Indah Permata', 'Joko Widodo', 'Kartika Sari'
        ];
        $cities = ['Jakarta', 'Bandung', 'Surabaya', 'Yogyakarta', 'Semarang'];
        
        $teachers = [];
        foreach ($teacherNames as $index => $name) {
            $teachers[] = [
                'nip'           => '19800101' . sprintf('%04d', $index + 1),
                'teacher_name'  => $name,
                'teacher_gender'=> ($index % 2 == 0) ? 'L' : 'P',
                'teacher_pob'   => $cities[array_rand($cities)],
                'teacher_dob'   => date('Y-m-d', strtotime('-' . rand(30, 50) . ' years')),
                'teacher_photo' => null,
            ];
        }
        $this->db->table('teachers')->insertBatch($teachers);
    }
}