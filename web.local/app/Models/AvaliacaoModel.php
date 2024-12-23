<?php

namespace App\Models;

use CodeIgniter\Model;

class AvaliacaoModel extends Model
{
    protected $table            = 'avaliacao';
    protected $primaryKey       = 'Id_Projeto';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'Id_Projeto',
        'Criterio1',
        'Criterio2',
        'Criterio3',
        'Criterio4',
        'Criterio5',
        'Criterio6',
        'Criterio7',
        'Media',
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
    protected $validationRules      = [];
    protected $validationMessages   = [];
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

    public function validarProjeto($projeto_id)
    {
        return $this->update($projeto_id, ['validado' => 'SIM']);
    }

    public function getProjetosComMedia()
    {
    return $this->db->table('projetos')
                    ->select('projetos.*, AVG(avaliacao.media) as media')
                    ->join('avaliacao', 'avaliacao.IdProjeto = projetos.id', 'left')
                    ->groupBy('projetos.id')
                    ->having('media >=', 6)
                    ->get()
                    ->getResultArray();
    }
}
