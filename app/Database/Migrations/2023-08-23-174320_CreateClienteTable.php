<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateClienteTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT','usigned'=>true, 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'nombreCliente' => ['type' => 'VARCHAR', 'constraint' => 200],
            'nombreCasa' => ['type' => 'VARCHAR', 'constraint' => 200],
            'email' => ['type' => 'VARCHAR', 'constraint' => 200],
            'celular' => ['type' => 'INT', 'constraint' => 9],
            'status' => ['type' => 'VARCHAR', 'constraint' => 1],
            'created_at datetime default current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('cliente'); 
    }

    public function down()
    {
        //
    }
}
