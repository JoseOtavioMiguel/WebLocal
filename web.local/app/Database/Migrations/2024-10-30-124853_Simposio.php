<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Simposio extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'usigned'        => TRUE,
                'auto_increment' => FALSE
            ],
        
        'nomeSimposio' =>[
            'type'  => 'TEXT',
        ],

        'dataInicio' =>[
            'type' => 'VARCHAR',
        ],

        'dataFinal' =>[
            'type' => 'VARCHAR',
        ],

        'dataCadastro' =>[
            'type' => 'VARCHAR',
        ],
    ]);
    }

    public function down()
    {
        //
    }
}
