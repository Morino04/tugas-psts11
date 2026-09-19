<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Panggil seeder terpisah berurutan untuk menghindari constraint error
        $this->call('ClassSeeder');
        $this->call('TeacherSeeder');
        $this->call('SubjectSeeder');
        $this->call('StudentSeeder');
        $this->call('SubjectTeacherSeeder');
        $this->call('GradeSeeder');
    }
}