<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProjetoModel;
use App\Models\AvaliadorModel;
use App\Models\AvaliadorProjeto;

class Projetos extends BaseController
{
    public function index()
    {
        echo view('interface/header');
        echo view ('projetos/index');
        echo view('interface/footer');
    }

    public function cadastrarAvaliador()
    {
        $dados = $this->request
                        ->getPost();
        $avaliador_model = new AvaliadorModel();
        $avaliador_model->insert($dados);
        $url = base_url('/web.local/public/projetos/listarAvaliador/?alert=successCreate');
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

        $data['avaliadoresprojeto'] = $avaliador;

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
        $avaliador_model = new AvaliadorModel();
        $avaliadores = avaliador_model->findAll();

        $data['avaliadores'] = $avaliadores;

        echo view($data);
    }

    public function projetosAprovados()
    {
        echo view('interface/header');
        echo view('projetos/projetosAprovados');
        echo view('interface/footer');
    }
}
