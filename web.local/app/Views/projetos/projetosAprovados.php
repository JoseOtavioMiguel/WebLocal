<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos Aprovados</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sofia+Sans:wght@400;700&display=swap">
</head>
<body>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <button type="button" class="btn btn-info ml-2" data-toggle="modal" data-target="#modal-novo-avaliador">
                                    <i class="fas fa-plus-circle"></i> Solicitar Avaliação
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="mt-5 ml-5" style="font-family: 'Sofia Sans', sans-serif;">Projetos Aprovados</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/web.local/public/projetos/listar">Home</a></li>
                            <li class="breadcrumb-item active">Projetos Aprovados</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="listar" class="table table-bordered table-striped">
                                    <thead style="background-color:#85e2fe">
                                        <tr>
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
                                                <td><?= mb_strimwidth(htmlspecialchars($proj['nomeProjeto']), 0, 80, "...") ?></td>
                                                <td><?= mb_strimwidth(htmlspecialchars($proj['descricaoProjeto']), 0, 80, "...") ?></td>
                                                <td><?= mb_strimwidth(htmlspecialchars($proj['resumoProjeto']), 0, 80, "...") ?></td>
                                                <td><?= mb_strimwidth(htmlspecialchars($proj['validado']), 0, 80, "...") ?></td>
                                                <td><?= mb_strimwidth(htmlspecialchars($proj['curso']), 0, 80, "...") ?></td>
                                                <td><?= mb_strimwidth(htmlspecialchars($proj['tipo']), 0, 80, "...") ?></td>
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
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#listar').DataTable();
        });
    </script>
</body>
</html>
