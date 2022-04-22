<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gawe extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_sems'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name_sems'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'date_sems'       => [
                'type'       => 'DATE',
            ],
            'info_sems' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_sems', true);
        $this->forge->createTable('sems');
    }

    public function down()
    {
        $this->forge->dropTable('sems');
    }
}
