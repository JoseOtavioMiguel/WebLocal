<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SimposioModel;

class Simposio extends BaseController
{
    public function cadastrarSimposio()
    {
        // Recebe os dados do formulário
        $dados = $this->request->getPost();

        // Instancia o modelo do simpósio
        $simposioModel = new SimposioModel();

        // Insere os dados no banco de dados
        if ($simposioModel->insert($dados)) {
            // Define o redirecionamento em caso de sucesso
            $url = base_url('/web.local/public/projetos/simposio?alert=successCreate');
            return redirect()->to($url);
        } else {
            // Define o redirecionamento em caso de erro
            $url = base_url('/web.local/public/projetos/simposio?alert=errorCreate');
            return redirect()->to($url);
        }

    }
}