<?php

namespace App\Controllers;

use App\Models\ProjetoModel;
use App\Models\AvaliacaoModel;

class Home extends BaseController
{


    public function index(): string
    {
        return view('welcome_message');
    }


    public function listar()
    {
        $table = new \CodeIgniter\View\table([
            'table_open' => '<table id="listar" class="table">'
        ]);

        $projeto_model = new ProjetoModel();
        $projetos = $projeto_model
                            ->findAll();

        $data['projetos'] = $projetos;

        echo view('interface/header');
        echo view('projetos/listar', $data);
        echo view('interface/footer');
    }


    public function cadastrar()
    {
        $dados = $this->request
                        ->getPost();
        $projeto_model = new ProjetoModel();
        $projeto_model->insert($dados);
        $url = base_url('/web.local/public/projetos/listar?alert=successCreate');
        return redirect()->to($url);
    }



    public function excluir($ProjetoId)
    {
        $projeto_model = new ProjetoModel();

        $projeto_model
                ->where('id', $ProjetoId)
                ->delete();
        
        $url = base_url('/web.local/public/projetos/listar?alert=successDelete');
        return redirect()->to($url);
    }

    public function atualizar_projeto($dados, $idProjeto)
    {
        $banco = projetoBanco;
        $tabela = projetos;

        $dbc = new mysqli_connect($banco, 'admin', 'admin', 'tabela' );
        // querry
        $querry = "UPDATE projetos WHERE $idProjeto == id";
        

    }


    public function avaliar()
    {
        $dados = $this->request
                        ->getPost();

        $avaliacao_model = new AvaliacaoModel();
        $avaliacao_model->insert($dados);
        $dados = $this->request->getPost();

        if(isset($dados['id']))
        {
            $url = base_url('/web.local/public/projetos/listar?alert=successEvaluate');
            return redirect()->to($url);
        }
        
        
    }


    public function editar()
    {
        // Get the input data
        $dados = $this->request->getPost();
    
        // Ensure that 'id' is present in the input data
        if (!isset($dados['id'])) {
            // Handle the error: 'id' not provided
            return redirect()->back()->with('error', 'ID is required.');
        }
    
        // Initialize the model
        $projeto_model = new ProjetoModel();
    
        // Update the record in the database
        $updateStatus = $projeto_model->set($dados)
                                      ->where('id', $dados['id'])
                                      ->update();

        // Redirect to the list page with a success message
        return redirect()->to(base_url('/web.local/public/projetos/listar?alert=successEdit'));
    }



    public function table(){
        echo view('/web.local/public/projetos/table');
        $url = base_url('/web.local/public/projetos/listar?alert=successEdit');
        return redirect()->to($url);
    }
}