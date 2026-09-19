<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;


class CreateSubjectTeachersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'teacher_id'=> ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'subject_id'=> ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('teacher_id', 'teachers', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('subject_id', 'subjects', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('subject_teachers');
    }

    public function down()
    {
        $this->forge->dropTable('subject_teachers');
    }
}