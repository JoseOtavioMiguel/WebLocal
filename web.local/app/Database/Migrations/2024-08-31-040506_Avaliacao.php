<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Avaliacao extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'IdProjeto' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'usigned'        => TRUE,
                'auto_increment' => FALSE
            ],
        
            'Criterio1' => [
                'type'       => 'FLOAT',
            ],

            'Criterio2' => [
                'type'       => 'FLOAT',
            ],
            
            'Criterio3' => [
                'type'       => 'FLOAT',
            ],
            
            'Criterio4' => [
                'type'       => 'FLOAT',
            ],
            
            'Criterio5' => [
                'type'       => 'FLOAT',
            ],
            
            'Criterio6' => [
                'type'       => 'FLOAT',
            ],
            
            'Criterio7' => [
                'type'       => 'FLOAT',
            ],

            'Media' => [
                'type'       => 'FLOAT',
            ],
        ]);
        
        $this->forge->addKey('IdProjeto', TRUE);
        $this->forge->createTable('avaliacao');
        
    }

    public function down()
    {
        $this->forge->dropTable('avaliacao');
    }
}
