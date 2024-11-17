<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AvaliadorLogin extends Migration
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
        
            'login' => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],
        
            'senha' => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],
        ]);
    }

    public function down()
    {
        //
    }
}
