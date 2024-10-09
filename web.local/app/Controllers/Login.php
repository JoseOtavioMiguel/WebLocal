<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LoginModel;

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
            $url = base_url('/web.local/public/projetos/listar');
            return redirect()->to($url);
        }
        else{
            return redirect()->to(base_url('/web.local/public/login?alert=erroLogin'));
        }
        
    }
}
