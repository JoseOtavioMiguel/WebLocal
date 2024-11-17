<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sofia+Sans:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Sofia Sans', sans-serif;
        }

        .modal-dialog {
            max-width: 100%;
            width: auto;
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
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
                                    <input type="text" class="form-control" name="email" placeholder="Digite o Email do Avaliador" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" class="form-control" name="telefone" placeholder="Digite o telefone do Avaliador" required>
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
                                    <textarea class="form-control" name="descricaoProjeto" rows="3" placeholder="Digite uma breve Descrição do Projeto" required></textarea>
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
                                    <label for="Curso">Curso</label>
                                    <textarea class="form-control" name="curso" placeholder="Curso em que o Projeto foi desenvolvido" required></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="validado" value="<?php echo "NAO"; ?>">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger btn-block" data-bs-dismiss="modal">Cancelar</button>
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
                                    <textarea class="form-control" rows="1" id="modal-editar-projeto-nome" name="nomeProjeto" required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="descricao">Descrição do Projeto</label>
                                    <textarea class="form-control" rows="3" id="modal-editar-projeto-descricao" name="descricaoProjeto" required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="resumo">Resumo do Projeto</label>
                                    <textarea class="form-control" rows="3" id="modal-editar-projeto-resumo" name="resumoProjeto" required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="validado">Avaliado</label>
                                    <input class="form-control" id="modal-editar-projeto-validado" name="validado" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="curso">Curso</label>
                                    <input type="text" class="form-control" id="modal-editar-projeto-curso" name="curso" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="tipo">Tipo</label>
                                    <input type="text" class="form-control" id="modal-editar-projeto-tipo" name="tipo" required>
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

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-novo-projeto">
                                    <i class="fas fa-plus-circle"></i> Cadastrar Projeto
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

          
  <style>
    /* Estilo para o cabeçalho e a tabela */
    h1 {
      font-family: 'Sofia', sans-serif;
    }

    .alert {
      margin: 20px 0;
    }

    /* Estilo responsivo */
    @media (max-width: 576px) {
      .table thead {
        display: none; /* Esconde o cabeçalho da tabela em dispositivos móveis */
      }
      #listar thead {
                display: none;
            }
            #listar tr {
                display: block;
                margin-bottom: 15px;
                border: 1px solid #dee2e6;
            }
            #listar td {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding-left: 50%;
                position: relative;
                text-align: left;
            }
            #listar td:before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                font-weight: bold;
                text-transform: uppercase;
                white-space: nowrap;
            }
            #listar td:last-child {
                display: flex;
                gap: 5px;
                }


      .table,
      .table tbody,
      .table tr,
      .table td {
        display: block; /* Transforma a tabela em blocos */
        width: 100%; /* Faz a tabela ocupar a largura total */
      }



      .table tr {
        margin-bottom: 15px; /* Espaçamento entre as linhas */
      }

      .table td {
        text-align: right; /* Alinha o texto à direita */
        padding-left: 50%; /* Espaçamento interno */
        position: relative; /* Permite a utilização de pseudo-elementos */
        
      }

      .table td:before {
        content: attr(data-label); /* Usa o atributo data-label como título da célula */
        position: absolute; /* Coloca o label em posição absoluta */
        left: 0;
        width: 50%; /* Largura do label */
        padding-left: 10px; /* Espaçamento interno */
        text-align: left; /* Alinhamento à esquerda */
        font-weight: bold; /* Deixa o label em negrito */
      }
    }
  </style>
</head>
<body>

  <!-- Alertas -->
  <?php if(isset($_GET['alert'])): ?>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <?php 
            $alertTypes = [
              "successCreate" => "Projeto criado com sucesso!",
              "successDelete" => "Projeto excluído com sucesso!",
              "successEdit" => "Projeto editado com sucesso!",
              "successUpdate" => "Projeto atualizado com sucesso!",
              "successEvaluate" => "Projeto avaliado com sucesso!",
              "successDesign" => "Avaliadores cadastrados com sucesso!"
            ];
            if (array_key_exists($_GET['alert'], $alertTypes)): 
          ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
              <?= $alertTypes[$_GET['alert']] ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="mt-5">Projetos Cadastrados</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/web.local/public/listar">Home</a></li>
          <li class="breadcrumb-item active">Listagem de Projetos</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->

    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="listar" class="table table-bordered table-striped">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>DESCRIÇÃO</th>
                    <th>RESUMO</th>
                    <th>AVALIADO</th>
                    <th>CURSO</th>
                    <th>TIPO</th>
                    <th>DATA</th>
                    <th>AÇÕES</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($projetos as $proj): ?>
                    <tr>
                      <td data-label="ID"><?= $proj['id'] ?></td>
                      <td data-label="NOME"><?= mb_strimwidth($proj['nomeProjeto'], 0, 80, "...") ?></td>
                      <td data-label="DESCRIÇÃO"><?= mb_strimwidth($proj['descricaoProjeto'], 0, 80, "...") ?></td>
                      <td data-label="RESUMO"><?= mb_strimwidth($proj['resumoProjeto'], 0, 80, "...") ?></td>
                      <td data-label="AVALIADO"><?= mb_strimwidth($proj['validado'], 0, 80, "...") ?></td>
                      <td data-label="CURSO"><?= mb_strimwidth($proj['curso'], 0, 80, "...") ?></td>
                      <td data-label="TIPO"><?= mb_strimwidth($proj['tipo'], 0, 80, "...") ?></td>
                      <td data-label="DATA"><?= date('d/m/Y H:i:s', strtotime($proj['data'])) ?></td>
                      <td>
                        <button type="button" class="btn btn-warning" 
                                onclick="prepararDados(<?= $proj['id'] ?>, '<?= addslashes($proj['nomeProjeto']) ?>', '<?= addslashes($proj['descricaoProjeto']) ?>', '<?= addslashes($proj['resumoProjeto']) ?>', '<?= addslashes($proj['curso']) ?>', '<?= addslashes($proj['validado']) ?>', '<?= addslashes($proj['tipo']) ?>')">
                          <i class="fas fa-edit"></i>
                        </button>
                        <a role="button" href="excluir/<?= $proj['id']?>" class="btn btn-danger">
                          <i class="fas fa-trash"></i>
                        </a>
                        <a href="listarProjeto/<?= $proj['id']?>" class="btn btn-success" onclick="prepararId(<?= $proj['id'] ?>, '<?= $proj['nomeProjeto'] ?>', '<?= $proj['tipo'] ?>'); return false;">
                          <i class="bi bi-folder"></i>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>  
              </table>
            </div>
          </div>
        </div>
      </div><!-- /.row -->
    </div><!-- /.content -->
  </div><!-- /.container-fluid -->    
 
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>