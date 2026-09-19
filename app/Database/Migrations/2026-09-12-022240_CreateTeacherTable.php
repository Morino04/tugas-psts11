<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTeachersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nip'           => ['type' => 'VARCHAR', 'constraint' => 20, 'unique' => true],
            'teacher_name'  => ['type' => 'VARCHAR', 'constraint' => 100],
            'teacher_gender'=> ['type' => 'ENUM', 'constraint' => ['L', 'P']],
            'teacher_pob'   => ['type' => 'VARCHAR', 'constraint' => 50],
            'teacher_dob'   => ['type' => 'DATE'],
            'teacher_photo' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('teachers');
    }

    public function down()
    {
        $this->forge->dropTable('teachers');
    }
}
