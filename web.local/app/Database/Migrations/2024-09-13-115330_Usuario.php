<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuario extends Migration
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
        
        'nomeUsuario' =>[
            'type'  => 'VARCHAR',
        ],

        'senha' =>[
            'type' => 'VARCHAR',
        ],
    ]);
    }

    public function down()
    {
        //
    }
}
