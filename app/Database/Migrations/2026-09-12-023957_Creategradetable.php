<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGradesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'student_id'    => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'subject_id'    => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'score'         => ['type' => 'DECIMAL', 'constraint' => '5,2'],
            'semester'      => ['type' => 'ENUM', 'constraint' => ['Ganjil', 'Genap']],
            'academic_year' => ['type' => 'VARCHAR', 'constraint' => 9],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('student_id', 'students', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('subject_id', 'subjects', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('grades');
    }

    public function down()
    {
        $this->forge->dropTable('grades');
    }
}           