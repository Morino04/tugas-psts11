<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GradeSeeder extends Seeder
{
    public function run()
    {
        $gradesData = [];
        for ($i = 1; $i <= 10; $i++) {
            $gradesData[] = [
                'student_id'    => $i,
                'subject_id'    => rand(1, 10),
                'score'         => rand(65, 98),
                'semester'      => ($i % 2 == 0) ? 'Ganjil' : 'Genap',
                'academic_year' => '2023/2024',
            ];
        }
        $this->db->table('grades')->insertBatch($gradesData);
    }
}