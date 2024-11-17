<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sofia+Sans:wght@400;700&display=swap">
    
</head>
<body>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos Aprovados</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.css" /><link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sofia+Sans:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Sofia+Sans?query=sofia+pro">

</head>
<body>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                          <!--<button type="button" class="btn btn-info ml-2" data-toggle="modal" data-target="#modal-novo-avaliador">
                              <i class="fas fa-plus-circle"></i> Solicitar Avaliação
                          </button> -->
                      </div>
                  </div>
              </div>
          </div>

          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="mt-5 ml-5" style="font-family: 'Sofia Sans', sans-serif;">Projetos Aprovados</h1>
            </div>
          </div>
        </div>
      </div>

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
                      <th>Nome</th>
                      <th>Descrição</th>
                      <th>Resumo</th>
                      <th>Avaliado</th>
                      <th>Curso</th>
                      <th>Tipo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($projetos as $proj): ?>
                      <tr>
                        <td><?= htmlspecialchars($proj['id']) ?></td>
                        <td><?= htmlspecialchars($proj['nomeProjeto']) ?></td>
                        <td><?= htmlspecialchars($proj['descricaoProjeto']) ?></td>
                        <td><?= htmlspecialchars($proj['resumoProjeto']) ?></td>
                        <td><?= htmlspecialchars($proj['validado']) ?></td>
                        <td><?= htmlspecialchars($proj['curso']) ?></td>
                        <td><?= htmlspecialchars($proj['tipo']) ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.js"></script>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.js"></script>
