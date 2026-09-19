<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClassSeeder extends Seeder
{
    public function run()
    {
        $classes = [];
        $gradesList = ['10', '11', '12'];
        $majors = ['IPA', 'IPS', 'Bahasa'];

        for ($i = 1; $i <= 10; $i++) {
            $grade = $gradesList[array_rand($gradesList)];
            $major = $majors[array_rand($majors)];
            $classes[] = [
                'class_name'        => "Kelas {$grade} {$major} " . rand(1, 3),
                'class_description' => "Ruang kelas jurusan {$major}",
            ];
        }
        $this->db->table('classes')->insertBatch($classes);
    }
}