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
            'idCliente' => ['type' => 'INT','usigned'=>true, 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'idCasa' => ['type' => 'VARCHAR', 'constraint' => 200],
            'status' => ['type' => 'VARCHAR', 'constraint' => 1],
            'created_at datetime default current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('casaUsuario'); 


        $this->forge->addField([
            'id' => ['type' => 'INT','usigned'=>true, 'constraint' => 5],
            'tituloCasa' => ['type' => 'TEXT', 'constraint' => 200],
            'tagCasa' => ['type' => 'TEXT', 'constraint' => 200],
            'introCasa' => ['type' => 'TEXT', 'constraint' => 200],
            'botonCasaCel' => ['type' => 'TEXT', 'constraint' => 200],
            'tituloDescCasa' => ['type' => 'TEXT', 'constraint' => 200],
            'descCasa' => ['type' => 'TEXT', 'constraint' => 200],
            'descJardin' => ['type' => 'TEXT', 'constraint' => 200],
            'footerCasa' => ['type' => 'TEXT', 'constraint' => 200],
            'infoCasa' => ['type' => 'TEXT', 'constraint' => 200],
            'categoriaCasa' => ['type' => 'TEXT', 'constraint' => 200],
            'adminCasa' => ['type' => 'TEXT', 'constraint' => 200],
            'fotosfechaCasa' => ['type' => 'TEXT', 'constraint' => 200],
            'ligafotosCasa' => ['type' => 'TEXT', 'constraint' => 200],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',
            'deleted_at datetime default current_timestamp'
            
            
        ]);
        $this->forge->createTable('casas'); 
    }

    public function down()
    {
        //
    }
}
