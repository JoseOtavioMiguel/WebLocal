<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjetoModel extends Model
{
    protected $table            = 'projetos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'nomeProjeto',
        'descricaoProjeto',
        'resumoProjeto',
        'validado',
        'curso',
        'data',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nomeProjeto' => 'required|min_length[3]|max_length[2000]',
        'descricaoProjeto' => 'required|min_length[3]|max_length[500]',
        'resumoProjeto' => 'required|min_length[3]|max_length[500]',
        'validado' => 'required|min_length[3] |max_length[3]',
    ];
    protected $validationMessages   = [
            'nomeProjeto' => [
            'required' => 'O nome do projeto é obrigatório.',
            'min_length' => 'O nome do projeto deve ter pelo menos 3 caracteres.'
            ],
        ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
