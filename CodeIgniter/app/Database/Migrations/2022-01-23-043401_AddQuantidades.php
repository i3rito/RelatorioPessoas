<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateQuantidadesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                    => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'homens'            => [
                'type'          => 'int',
                'constraint'    => '11',
                'null'          => false,
            ],
            'mulheres'          => [
                'type'          => 'int',
                'constraint'    => '11',
                'null'          => false,
            ],
            'criancas'          => [
                'type'          => 'int',
                'constraint'    => '11',
                'null'          => false,
            ],
            'carros'            => [
                'type'          => 'int',
                'constraint'    => '11',
                'null'          => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('quantidades');
    }

    public function down()
    {
        $this->forge->dropTable('quantidades');
    }
}
