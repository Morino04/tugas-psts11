<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nis'       => ['type' => 'VARCHAR', 'constraint' => 20, 'unique' => true],
            'name'      => ['type' => 'VARCHAR', 'constraint' => 100],
            'gender'    => ['type' => 'ENUM', 'constraint' => ['L', 'P']],
            'pob'       => ['type' => 'VARCHAR', 'constraint' => 50],
            'dob'       => ['type' => 'DATE'],
            'photo'     => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'class_id'  => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('class_id', 'classes', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('students');
    }

    public function down()
    {
        $this->forge->dropTable('students');
    }
}