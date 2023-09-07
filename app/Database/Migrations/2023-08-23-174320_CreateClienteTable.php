<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateClienteTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT','usigned'=>true, 'constraint' => 5, 'unsigned' => true, '  auto_increment' => true],
            'user' => ['type' => 'VARCHAR', 'constraint' => 20],
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
            'idasesor' => ['type' => 'INT','usigned'=>true],
            'userasesor' => ['type' => 'VARCHAR', 'constraint' => 200],
            'status' => ['type' => 'VARCHAR', 'constraint' => 1],
            'created_at datetime default current_timestamp',
        ]);
        
        $this->forge->createTable('asesores'); 



        $this->forge->addField([
            'idCliente' => ['type' => 'INT','usigned'=>true],
            'idCasa' => ['type' => 'VARCHAR', 'constraint' => 200],
            'status' => ['type' => 'VARCHAR', 'constraint' => 1],
            'created_at datetime default current_timestamp',
        ]);
        
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
            'personas' => ['type' => 'TEXT', 'constraint' => 200],
            'mascotas' => ['type' => 'TEXT', 'constraint' => 200],
            'cuartos' => ['type' => 'TEXT', 'constraint' => 200],
            'camas' => ['type' => 'TEXT', 'constraint' => 200],
            'sofacama' => ['type' => 'TEXT', 'constraint' => 200],
            'baños' => ['type' => 'TEXT', 'constraint' => 200],
            'cocina' => ['type' => 'TEXT', 'constraint' => 200],
            'microondas' => ['type' => 'TEXT', 'constraint' => 200],
            'cafetera' => ['type' => 'TEXT', 'constraint' => 200],
            'estufa' => ['type' => 'TEXT', 'constraint' => 200],
            'gas' => ['type' => 'TEXT', 'constraint' => 200],
            'refrigerador' => ['type' => 'TEXT', 'constraint' => 200],
            'sala' => ['type' => 'TEXT', 'constraint' => 200],
            'comedor' => ['type' => 'TEXT', 'constraint' => 200],
            'tv' => ['type' => 'TEXT', 'constraint' => 200],
            'internet' => ['type' => 'TEXT', 'constraint' => 200],
            'campañia' => ['type' => 'TEXT', 'constraint' => 200],
            'cable' => ['type' => 'TEXT', 'constraint' => 200],
            'casasola' => ['type' => 'TEXT', 'constraint' => 200],
            'horaentrada' => ['type' => 'TEXT', 'constraint' => 200],
            'horasalida' => ['type' => 'TEXT', 'constraint' => 200],
            'jacuzzi' => ['type' => 'TEXT', 'constraint' => 200],
            'alberca' => ['type' => 'TEXT', 'constraint' => 200],
            'asador' => ['type' => 'TEXT', 'constraint' => 200],
            'palapa' => ['type' => 'TEXT', 'constraint' => 200],
            'camastros' => ['type' => 'TEXT', 'constraint' => 200],
            'estacionamiento' => ['type' => 'TEXT', 'constraint' => 200],
            'toallas' => ['type' => 'TEXT', 'constraint' => 200],
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
