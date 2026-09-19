<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SubjectTeacherSeeder extends Seeder
{
    public function run()
    {
        $subjectTeachers = [];
        for ($i = 1; $i <= 10; $i++) {
            $subjectTeachers[] = [
                'teacher_id' => $i,
                'subject_id' => $i,
            ];
        }
        $this->db->table('subject_teachers')->insertBatch($subjectTeachers);
    }
}