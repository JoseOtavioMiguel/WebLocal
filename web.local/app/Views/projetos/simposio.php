<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.css" /><link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sofia+Sans:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Sofia+Sans?query=sofia+pro">

</head>
<body>


    <!-- Modal de Cadastro de Simpósio -->
    <div class="modal fade" id="modalNovoSimposio" tabindex="-1" role="dialog" aria-labelledby="modalNovoSimposioLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="/web.local/public/Simposio/cadastrarSimposio" method="post">
              <div class="modal-header">
                  <h5 class="modal-title" id="modalNovoSimposioLabel">Cadastrar Novo Simposio</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                      <label for="id">Id do Simposio</label>
                      <input type="text" class="form-control" id="id" name="id" required>
                  </div>
                  <div class="form-group">
                      <label for="nome">Nome do Simposio</label>
                      <input type="text" class="form-control" id="nomeSimposio" name="nomeSimposio" required>
                  </div>

                  <div class="form-group">
                      <label for="dataInicio">Data Final</label>
                      <input type="date" class="form-control" id="dataInicio" name="dataInicio" required>
                  </div>
                  <div class="form-group">
                      <label for="dataFinal">Data Final</label>
                      <input type="date" class="form-control" id="dataFinal" name="dataFinal" required>
                  </div>
              </div>
              <input type="hidden" name="dataCadastro" value="<?= date('Y-m-d') ?>">
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
          </form>
        </div>
      </div>
    </div>

    <?php if(isset($_GET['alert']) && $_GET['alert'] == "successCreate"): ?>
        <div class="row">
          <div class="col-12">
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
              Simposio criado com sucesso!
          </div>
        </div>
      </div>
<?php endif; ?>

<?php if(isset($_GET['alert']) && $_GET['alert'] == "errorCreate"): ?>
        <div class="row">
          <div class="col-12">
            <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
              Erro ao cadastrar o Projeto!
          </div>
        </div>
      </div>
      <?php endif; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalNovoSimposio">
                              <i class="fas fa-plus-circle"></i> Cadastrar Simposio
                          </button>

                      </div>
                  </div>
              </div>
          </div>

<h1> Menu simposio </h1>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <!-- Card do Simposio -->
            <div class="card" style="width: 18rem; background-color: #ffffff; border: 1px solid #dddddd; border-radius: 10px;">
            <img src="/web.local/public/images/simposioXV.png" class="card-img-top" alt="Imagem do Simposio">
            <div class="card-body text-center">
                <a href="visualizarSimposio.php" class="btn btn-primary btn-block mb-2">Visualizar Simposio</a>
                <a class="btn btn-danger btn-block" data-dismiss="modal">Expirado</a>
            </div>
        </div>
        </div>
        <div class="col-md-4">
            <!-- Card do Simposio -->
            <div class="card" style="width: 18rem; background-color: #ffffff;">
                <img src="/web.local/public/images/simposioXVI.png" class="card-img-top" alt="Imagem do Simposio">
                <div class="card-body text-center">
                    <a href="\web.local\public\projetos\listar" class="btn btn-primary btn-block mb-2">Visualizar Simposio</a>
                    <a href="editarSimposio.php" class="btn btn-warning btn-block">Editar Simposio</a>
                    <a class="btn btn-success btn-block" data-dismiss="modal">Aberto</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>