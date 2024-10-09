<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.css" /><link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sofia+Sans:wght@400;700&display=swap">

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



<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
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
              <h5><i class="icon fas fa-check"></i>Sucesso!</h5>
              Avaliador cadastrado com sucesso!
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
                <li class="breadcrumb-item"><a href="/web.local/public/projetos/listar">Home</a></li>
                <li class="breadcrumb-item active">Avaliadores Cadastrados</li>
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
              <table id="listarAvaliador" class="table table-bordered table-striped" >
                <thead class="table table-primary">
                  <tr class="table-primary">
                    <th>ID</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>TELEFONE</th>
                    <Th>PROJETOS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($avaliador as $avaliador): ?>
                    <tr>
                      <td><?= $avaliador['id'] ?></td>
                      <td><?= $avaliador['nome'] ?></td>
                      <td><?= $avaliador['email'] ?></td>
                      <td><?= $avaliador['telefone'] ?></td>
                        <td>
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

    </div><!-- /.container-fluid -->
  </div>
</body>
</html>

