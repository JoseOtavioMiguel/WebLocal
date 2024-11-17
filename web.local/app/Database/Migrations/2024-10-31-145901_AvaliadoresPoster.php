<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AvaliadoresPoster extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'idProjeto' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'usigned'        => TRUE,
                'auto_increment' => FALSE
            ],
        
        'avaliador1' =>[
            'type'  => 'VARCHAR',
        ],

        'avaliador2' =>[
            'type' => 'VARCHAR',
        ]
    ]);
    }

    public function down()
    {
        //
    }
}
