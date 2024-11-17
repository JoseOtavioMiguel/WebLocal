<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LoginModel;
use App\Models\UsuarioModel;
use App\Models\AvaliacaoModel;
use App\Models\AvaliadorLogin;

class Login extends BaseController
{
    public function index()
    {
        echo view('/login/index');
    }

    public function loginUsuario()
    {
        return view('/login/loginUsuario');
    }
    
    public function loginAvaliador()
    {
        return view('/login/loginAvaliador');
    }


    public function paginaUsuario()
    {
        $dados = $this->request->getVar();
        $usuario_model = new UsuarioModel();

        $login = $usuario_model
        ->where('NomeUsuario', $dados['NomeUsuario'])
        ->where('Senha', $dados['Senha'])
        ->first();

        
        if(!empty($login))
        {
            $model = new AvaliacaoModel(); 
            $projetos = $model->getProjetosComMedia();

            echo view('\interfaceUsuario\headerUsuario');
            echo view('projetos/projetosAprovados', ['projetos' => $projetos]);
            
        }
        else{
            return redirect()->to(base_url('/web.local/public/login?alert=erroLogin'));
        }
    }

    public function paginaAvaliador()
    {
        $dados = $this->request->getVar();
        $usuario_model = new AvaliadorLogin();

        $login = $usuario_model
        ->where('login', $dados['login'])
        ->where('senha', $dados['senha'])
        ->first();

        
        if(!empty($login))
        {
            $model = new AvaliadorLogin();

            echo view('\interface\header');
            echo view('\interface\footer'); 
            
        }
        else{
            return redirect()->to(base_url('/web.local/public/login?alert=erroLogin'));
        }
    }

    public function projetosAprovados()
    {
            $model = new AvaliacaoModel(); 
            $projetos = $model->getProjetosComMedia();

            echo view('\interfaceUsuario\headerUsuario');
            echo view('projetos/projetosAprovados', ['projetos' => $projetos]);
    }


    public function autenticar()
    {
        $dados = $this->request->getVar();
        $login_model = new LoginModel();

        $login = $login_model
        ->where('Usuario', $dados['Usuario'])
        ->where('Senha', $dados['Senha'])
        ->first();

        
        if(!empty($login))
        {
            $url = base_url('/web.local/public/projetos/simposio');
            return redirect()->to($url);
        }
        else{
            return redirect()->to(base_url('/web.local/public/login?alert=erroLogin'));
        }
        
    }
}
