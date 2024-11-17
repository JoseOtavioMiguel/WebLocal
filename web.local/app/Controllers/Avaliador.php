<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AvaliadoresPoster;

class Avaliador extends BaseController
{
    public function index()
    {
        echo view('interface/header');
        echo view('administrador/avaliador.php');
        echo view('interface/footer');
    }
    
    public function cadastrarAvaliador()
    {
        $dados = $this->request
                        ->getPost();
        $avaliador_model = new AvaliadorModel();
        $avaliador_model->insert($dados);
        $url = base_url('/web.local/public/projetos/listar/?alert=successCreate');
        return redirect()->to($url);
    }

    public function listarProjeto($id)
    {
        $projeto_model = new \App\Models\ProjetoModel();
        $projetos = $projeto_model->find($id);

        $avaliador_model = new \App\Models\AvaliadorModel();
        $avaliador = $avaliador_model->findAll();
        
        $data['projetos'] = $projetos;
        $data['avaliador'] = $avaliador;
        echo view('interface/header');
        echo view('projetos/listarProjetos', $data);
        echo view('interface/footer');
    } 


    public function listarAvaliadorPorProjeto($id)
    {
        $avaliador_model = new \App\Models\AvaliadorProjeto();
        $avaliador = $avaliador_model->findAll();

        $data['avaliadoresposter'] = $avaliador;

        $table = new \CodeIgniter\View\table([
                'table_open' => '<table id="listarAvaliadorPorProjeto" class="table">']);
        $avaliador_model = new \App\Models\AvaliadorProjeto();
        $avaliador = $avaliador_model->findAll();

        echo view('interface/header');
        echo view('projetos/listarProjetos', $data);
        echo view('interface/footer');
    } 
    
    
    
    public function listarAvaliador()
    {
        $table = new \CodeIgniter\View\table([
            'table_open' => '<table id="listarAvaliador" class="table">'
        ]);

        $avaliador_model = new AvaliadorModel();
        $avaliador = $avaliador_model
                            ->findAll();

        $data['avaliador'] = $avaliador;

        echo view('interface/header');
        echo view('projetos/listarAvaliador', $data);
        echo view('interface/footer');
    }


public function designarAvaliadores()
{
    $dados = $this->request
                        ->getPost();
        $avaliador_model = new AvaliadoresPoster();
        $avaliador_model->insert($dados);
    
    // Redirecione para a página de listagem de projetos
    $url = base_url('/web.local/public/projetos/listar/?alert=successDesign');
    return redirect()->to($url);
}
}
