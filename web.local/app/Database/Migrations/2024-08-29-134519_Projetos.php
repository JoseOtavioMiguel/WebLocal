<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Projetos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'usigned'        => TRUE,
                'auto_increment' => TRUE
            ],
        
            'nomeProjeto' => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],
        
            'resumoProjeto' => [
                'type' => 'VARCHAR'
            ],

            'descricaoProjeto' => [
                'type' => 'VARCHAR'
            ],

            'validado' => [
                'type' => 'VARCHAR'
            ],

            'data' => [
                'type' => 'DATETIME'
            ]

        ]);
        
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('projetos');
    }

    public function down()
    {
        $this->forge->dropTable('projetos');
    }
}
