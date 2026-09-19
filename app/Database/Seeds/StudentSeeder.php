<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $studentNames = [
            'Ahmad Rizky', 'Anisa Putri', 'Bagus Perkasa', 'Citra Kirana', 'Dimas Anggara',
            'Eka Nabila', 'Fajar Pratama', 'Gita Gutawa', 'Hafiz Muhammad', 'Intan Nuraini'
        ];
        $cities = ['Jakarta', 'Bandung', 'Surabaya', 'Yogyakarta', 'Semarang'];

        $students = [];
        foreach ($studentNames as $index => $name) {
            $students[] = [
                'nis'       => '2024' . sprintf('%04d', $index + 1),
                'name'      => $name,
                'gender'    => ($index % 2 == 0) ? 'L' : 'P',
                'pob'       => $cities[array_rand($cities)],
                'dob'       => date('Y-m-d', strtotime('-' . rand(15, 18) . ' years')),
                'photo'     => null,
                'class_id'  => rand(1, 10),
            ];
        }
        $this->db->table('students')->insertBatch($students);
    }
}
