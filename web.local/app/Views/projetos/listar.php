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
<div class="modal fade" id="modal-novo-avaliador">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <form action="/web.local/public/cadastrarAvaliador" method="post">
                  <div class="modal-header">
                      <h4 class="modal-title">Cadastrar Avaliador</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-12">
                              <div class="form-group">
                                  <label for="nome">Nome</label>
                                  <input type="text" class="form-control" name="nome" placeholder="Digite o Nome do Avaliador" required>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label for="email">Email</label>
                                  <input  type="text" class="form-control" name="email" placeholder="Digite o Email do Avaliador " required>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label for="telefone">Telefone</label>
                                  <input type="text" class="form-control d-flex align-items-center" name="telefone"  placeholder="Digite o telefone do Avaliador" required>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-save"></i> Cadastrar</button>
                  </div>
              </form>
          </div>
      </div>
  </div>

  <div class="modal fade" id="modal-novo-projeto">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <form action="/web.local/public/cadastrar" method="post">
                  <div class="modal-header">
                      <h4 class="modal-title">Cadastrar Projeto</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-12">
                              <div class="form-group">
                                  <label for="nomeProjeto">Nome</label>
                                  <input type="text" class="form-control" name="nomeProjeto" placeholder="Digite o Nome do Projeto" required>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label for="descricaoProjeto">Descrição</label>
                                  <textarea type="text" class="form-control" name="descricaoProjeto" rows="3" placeholder="Digite uma breve Descrição do Projeto" required></textarea>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label for="resumoProjeto">Resumo</label>
                                  <textarea class="form-control" name="resumoProjeto" rows="4" placeholder="Digite um Resumo para o Projeto" required></textarea>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label for="resumoProjeto">Curso</label>
                                  <textarea class="form-control" name="curso" placeholder="Curso em que o Projeto foi desenvolvido" required></textarea>
                              </div>
                          </div>

                          <input type="hidden" name="validado" value="<?php echo "NAO"; ?> ">
                      </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-save"></i> Cadastrar</button>
                  </div>
              </form>
          </div>
      </div>
  </div>


                    



  <div class="modal fade" id="modal-editar-projeto">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <form action="/web.local/public/editar" method="post">
                  <div class="modal-header">
                      <h4 class="modal-title">Editar Projeto</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-12">
                              <div class="form-group">
                                  <label for="nome">Nome do Projeto</label>
                                  <textarea type="text" class="form-control" rows="1"  id="modal-editar-projeto-nome" name="nomeProjeto" required></textarea>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label for="descricao">Descrição do Projeto</label>
                                  <textarea type="text" class="form-control" rows="3"  id="modal-editar-projeto-descricao" name="descricaoProjeto" required></textarea>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label for="resumo">Resumo do Projeto</label>
                                  <textarea type="text" class="form-control" rows="3"  id="modal-editar-projeto-resumo" name="resumoProjeto" required></textarea>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label for="validado">Avaliado</label>
                                  <input  class="form-control" id="modal-editar-projeto-validado" name="validado" required>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label for="curso">Curso</label>
                                  <input type="text" class="form-control" id="modal-editar-projeto-curso" name="curso" required></textarea>
                              </div>
                          </div>

                          <input type="hidden" id="modal-editar-projeto-id" name="id">
                          
                      </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-block btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Cancelar Atualização</button>
                      <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-save"></i> Atualizar Projeto</button>
                  </div>
              </form>
          </div>
      </div>
  </div>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-novo-projeto">
                              <i class="fas fa-plus-circle"></i> Cadastrar Projeto
                          </button>

                          <button type="button" class="btn btn-info ml-2" data-toggle="modal" data-target="#modal-novo-avaliador">
                              <i class="fas fa-plus-circle"></i> Cadastrar Avaliador
                          </button>

                      </div>
                  </div>
              </div>
          </div>

          
          <?php if(isset($_GET['alert']) && $_GET['alert'] == "successCreate"): ?>
        <div class="row">
          <div class="col-12">
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
              Projeto criado com sucesso!
          </div>
        </div>
      </div>
      <?php endif; ?>


      <?php if(isset($_GET['alert']) && $_GET['alert'] == "successDelete"): ?>
        <div class="row">
          <div class="col-12">
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
              Projeto excluido com sucesso!
          </div>
        </div>
      </div>
      <?php endif; ?>

      <?php if(isset($_GET['alert']) && $_GET['alert'] == "successUpdate"): ?>
        <div class="row">
          <div class="col-12">
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
              Projeto atualizado com sucesso!
          </div>
        </div>
      </div>
      <?php endif; ?>

      <?php if(isset($_GET['alert']) && $_GET['alert'] == "successEvaluate"): ?>
        <div class="row">
          <div class="col-12">
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
              Projeto avaliado com sucesso!
          </div>
        </div>
      </div>
      <?php endif; ?>


          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="mt-5 ml-5" style="font-family: 'Sofia', sans-serif;">Projetos Cadastrados</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/web.local/public/listar">Home</a></li>
                <li class="breadcrumb-item active">Listagem de Projetos</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card-body">
              <table id="listar" class="table table-bordered table-striped" >
                <thead class="table table-bordered" style="background-color:#85e2fe">
                  <tr class="table">
                    <th>ID</th>
                    <th>NOME</th>
                    <th>DESCRIÇÃO</th>
                    <th>RESUMO</th>
                    <th>AVALIADO</th>
                    <th>CURSO</th>
                    <th>DATA</th>
                    <th>AÇÕES</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($projetos as $proj): ?>
                    <?php
                      if (!function_exists('formatString')) {
                          function formatString($string, $maxLength = 50) {
                              if (strlen($string) > $maxLength) {
                                  return '"' . substr($string, 0, $maxLength) . '..."';
                              }
                              return $string;
                          }
                      }
                    ?>
                    <tr>
                      <td><?= formatString($proj['id']) ?></td>
                      <td><?= formatString($proj['nomeProjeto']) ?></td>
                      <td><?= formatString($proj['descricaoProjeto']) ?></td>
                      <td><?= formatString($proj['resumoProjeto'] )?></td>
                      <td><?= formatString($proj['validado']) ?></td>
                      <td><?= formatString($proj['curso']) ?></td>
                      <td><?= date('d/m/Y H:i:s', strtotime($proj['data'])) ?></td>
                        <td>
                        <button style="width:50px" type="button" class="btn btn-warning" onclick="prepararDados(<?= $proj['id'] ?>, '<?= $proj['nomeProjeto'] ?>', '<?= $proj['descricaoProjeto'] ?>', '<?= $proj['resumoProjeto'] ?>' , '<?= $proj['curso'] ?>', '<?= $proj['validado'] ?>' )"><i class="fas fa-edit"></i></button>
                        <a style="width: 50px" role="button" href="excluir/<?= $proj['id']?>" class="mt-1 btn btn-danger"><i class="fas fa-trash"></i></a>
                        <a style="width: 50px" href="listarProjeto/<?= $proj['id']?>" class="btn btn-success mt-1"><i class="bi bi-folder"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>  
              </table>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</body>
</html>
