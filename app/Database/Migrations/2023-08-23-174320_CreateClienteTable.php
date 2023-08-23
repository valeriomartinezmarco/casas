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


        $this->forge->addField([
            'id' => ['type' => 'INT','usigned'=>true, 'constraint' => 5],
            'tituloCasa' => ['type' => 'VARCHAR', 'constraint' => 200],
            'introCasa' => ['type' => 'VARCHAR', 'constraint' => 200],
            'botonCasaCel' => ['type' => 'VARCHAR', 'constraint' => 200],
            'tituloDescCasa' => ['type' => 'VARCHAR', 'constraint' => 200],
            'descCasa' => ['type' => 'VARCHAR', 'constraint' => 200],
            'descJardin' => ['type' => 'VARCHAR', 'constraint' => 200],
            'footerCasa' => ['type' => 'VARCHAR', 'constraint' => 200],
            'infoCasa' => ['type' => 'VARCHAR', 'constraint' => 200],
            'categoriaCasa' => ['type' => 'VARCHAR', 'constraint' => 200],
            'adminCasa' => ['type' => 'VARCHAR', 'constraint' => 200],
            'fotosfechaCasa' => ['type' => 'VARCHAR', 'constraint' => 200],
            'ligafotosCasa' => ['type' => 'VARCHAR', 'constraint' => 200],
            
        ]);
        $this->forge->createTable('casas'); 
    }

    public function down()
    {
        //
    }
}
