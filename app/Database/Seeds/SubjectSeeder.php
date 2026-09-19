<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SubjectSeeder extends Seeder
{
    public function run()
    {
        $subjectList = [
            'Matematika', 'Bahasa Indonesia', 'Bahasa Inggris', 'Fisika', 'Kimia',
            'Biologi', 'Sejarah', 'Geografi', 'Ekonomi', 'Sosiologi'
        ];
        $subjects = [];
        foreach ($subjectList as $sub) {
            $subjects[] = [
                'subject_name'  => $sub,
                'passing_grade' => rand(70, 78),
            ];
        }
        $this->db->table('subjects')->insertBatch($subjects);
    }
}