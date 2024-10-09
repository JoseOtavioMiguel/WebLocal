<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



<div class="modal fade" id="modal-designar-avaliador">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="/web.local/public/cadastrar" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Designar Avaliadores</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Escolha Avaliador 1</label>
                                <div class="form-check">
                                    <?php if (is_array($avaliador)): ?>
                                        <?php foreach($avaliador as $avaliador): ?>
                                            <?php if (is_array($avaliador) && isset($avaliador['id']) && isset($avaliador['nome'])): ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="avaliador1" id="avaliador1_<?= htmlspecialchars($avaliador['id']) ?>" value="<?= htmlspecialchars($avaliador['id']) ?>">
                                                    <label class="form-check-label" for="avaliador1_<?= htmlspecialchars($avaliador['id']) ?>">
                                                        <?= htmlspecialchars($avaliador['nome']) ?>
                                                    </label>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <p>Não há avaliadores disponíveis.</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Escolha Avaliador 2</label>
                                <div class="form-check">
                                    <?php if (is_array($avaliador)): ?>
                                        <?php foreach($avaliador as $avaliador): ?>
                                            <?php if (is_array($avaliador) && isset($avaliador['id']) && isset($avaliador['nome'])): ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="avaliador1" id="avaliador1_<?= htmlspecialchars($avaliador['id']) ?>" value="<?= htmlspecialchars($avaliador['id']) ?>">
                                                    <label class="form-check-label" for="avaliador1_<?= htmlspecialchars($avaliador['id']) ?>">
                                                        <?= htmlspecialchars($avaliador['nome']) ?>
                                                    </label>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <p>Não há avaliadores disponíveis.</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="idProjeto">Id do Projeto</label>
                                <textarea type="text" class="form-control" name="idProjeto" rows="3" placeholder="Digite o Id do Projeto" required></textarea>
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


<!-- Modal de Avaliação do Poster !-->
<div class="modal fade" id="modal-novo-projeto" tabindex="-1" aria-label="modal-novo-projeto-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal modal-avaliacao-poster Controller avaliarProjetoPoster !-->
            <form action="/web.local/public/avaliarProjetoPoster" method="post">
                <div class="modal-header bg-info">
                    <h4 class="modal-title" id="modal-novo-projeto-label">Avaliar Projeto</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custom-scroll" id="Avaliação">
                    <div class="row g-3 align-items-center">
                        <div class="col-12">
                            <h3 class="text-center text-white bg-primary ">Avaliação da Apresentação Oral</h3>&nbsp
                            <div class="form-group">
                                <label class="form-control-plaintext flex-grow-1" for="modal-novo-projeto-id">Id do Projeto:</label>
                                <input type="text" class="form-control col-sm-3 " id="modal-novo-projeto-id" name="IdProjeto"  style="border: none;" readonly>
                                <br>
                                <label class="col-form-label" for="modal-novo-projeto-nome">Nome do Projeto:</label>
                                <input type="text" class="form-control" id="modal-novo-projeto-nome" name="NomeProjeto"  style="border: none;" readonly>
                            </div>
                        </div>


                        <!-- Critérios De Avaliação do Poster -->
                        <div class="col-12 bg-light rounded p-3 mt-5">
                            <div class="form-group">
                                <label for="modal-novo-projeto-c1">Critério 1: Fez a introdução do conteúdo do trabalho de forma clara e objetiva.</label>
                                <input type="text" class="form-control col-sm-2" id="modal-novo-projeto-c1" name="Criterio1" placeholder="Nota (0 a 10)" required>
                            </div>
                        </div>

                        <div class="col-12 bg-light rounded p-3 mt-3">
                             <div class="form-group">
                                <label for="media-criterios-poster">Média dos Critérios:</label>
                                <input type="text" id="Media-display" class="form-control col-sm-2" readonly>
                                <input type="hidden" class="form-control col-sm-2" id="MediaPoster" name="MediaPoster">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-block btn-danger" data-bs-dismiss="modal">&nbsp&nbsp&nbsp<i class="fa-solid fa-rectangle-xmark"></i>&nbsp Cancelar Avaliação</button>
                    <button type="submit" name="submit"  class="btn btn-block btn-primary"><i class="fas fa-save"></i>&nbsp Enviar Avaliação</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Modal de Avaliação da Apresentação Oral do Projeto !-->
<div class="modal fade" id="modal-novo-projeto" tabindex="-1" aria-labelledby="modal-novo-projeto-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="/web.local/public/avaliar" method="post">
                <div class="modal-header bg-info">
                    <h4 class="modal-title" id="modal-novo-projeto-label">Avaliar Projeto</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custom-scroll" id="Avaliação">
                    <div class="row g-3 align-items-center">
                        <div class="col-12">
                            <h3 class="text-center text-white bg-primary ">Avaliação da Apresentação Oral</h3>&nbsp
                            <div class="form-group">
                                <label class="form-control-plaintext flex-grow-1" for="modal-novo-projeto-id">Id do Projeto:</label>
                                <input type="text" class="form-control col-sm-3" id="modal-novo-projeto-id" name="IdProjeto"  style="border: none;">
                                <br>
                                <label class="col-form-label" for="modal-novo-projeto-nome">Nome do Projeto:</label>
                                <input type="text" class="form-control col-sm-8" id="modal-novo-projeto-nome" name="NomeProjeto"  style="border: none;">
                            </div>
                        </div>


                        <!-- Critérios -->
                        <div class="col-12 bg-light rounded p-3 mt-5">
                            <div class="form-group">
                                <label for="modal-novo-projeto-c1">Critério 1: Fez a introdução do conteúdo do trabalho de forma clara e objetiva.</label>
                                <input type="text" class="form-control col-sm-2" id="modal-novo-projeto-c1" name="Criterio1" placeholder="Nota (0 a 10)" required>
                            </div>
                        </div>

                        <div class="col-12 bg-light rounded p-3">
                            <div class="form-group">
                                <label for="modal-novo-projeto-c2">Critério 2: Habilidade - (Organização lógica da apresentação: introdução, desenvolvimento, conclusão, exposição da essência do tema do trabalho).</label>
                                <input type="text" class="form-control col-sm-2" id="modal-novo-projeto-c2" name="Criterio2" placeholder="Nota (0 a 10)" required>
                            </div>
                        </div>

                        <div class="col-12 bg-light rounded p-3">
                            <div class="form-group">
                                <label for="modal-novo-projeto-c3">Critério 3: Evita repetições e digressões desnecessárias.</label>
                                <input type="text" class="form-control col-sm-2" id="modal-novo-projeto-c3" name="Criterio3" placeholder="Nota (0 a 10)" required>
                            </div>
                        </div>

                        <div class="col-12 bg-light rounded p-3">
                            <div class="form-group">
                                <label for="modal-novo-projeto-c4">Critério 4: Clareza e minuciosidade - (transmitir com transparência e nitidez o conteúdo do seu trabalho, de forma clara e didática).</label>
                                <input type="text" class="form-control col-sm-2" id="modal-novo-projeto-c4" name="Criterio4" placeholder="Nota (0 a 10)" required>
                            </div>
                        </div>

                        <div class="col-12 bg-light rounded p-3">
                            <div class="form-group">
                                <label for="modal-novo-projeto-c5">Critério 5: A conclusão e/ou considerações finais não extrapolou o contexto e foi apresentado de forma objetiva realmente fazendo um fechamento da ideia central do trabalho.</label>
                                <input type="text" class="form-control col-sm-2" id="modal-novo-projeto-c5" name="Criterio5" placeholder="Nota (0 a 10)" required>
                            </div>
                        </div>

                        <div class="col-12 bg-light rounded p-3">
                            <div class="form-group">
                                <label for="modal-novo-projeto-c6">Critério 6: Nas respostas revela independência do material documentado e apresenta raciocínio lógico.</label>
                                <input type="text" class="form-control col-sm-2" id="modal-novo-projeto-c6" name="Criterio6" placeholder="Nota (0 a 10)" required>
                            </div>
                        </div>

                        <div class="col-12 bg-light rounded p-3">
                            <div class="form-group">
                                <label for="modal-novo-projeto-c7">Critério 7: Tempo de apresentação satisfatório.</label>
                                <input type="text" class="form-control col-sm-2" id="modal-novo-projeto-c7" name="Criterio7" placeholder="Nota (0 a 10)" required>
                            </div>
                        </div>

                        <div class="col-12 bg-light rounded p-3 mt-3">
                             <div class="form-group">
                                <label for="media-criterios">Média dos Critérios:</label>
                                <input type="text" id="Media-display" class="form-control col-sm-2" readonly>
                                <input type="hidden" class="form-control col-sm-2" id="Media" name="Media">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-block btn-danger" data-bs-dismiss="modal">&nbsp&nbsp&nbsp<i class="fa-solid fa-rectangle-xmark"></i>&nbsp Cancelar Avaliação</button>
                    <button type="submit" name="submit"  class="btn btn-block btn-primary"><i class="fas fa-save"></i>&nbsp Enviar Avaliação</button>
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
                  </div>
              </div>
          </div>

          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="mt-5 ml-3" style="padding-left:50px;">Descrição Completa do Projeto </h1>
            </div><!-- /.col -->
            <div class="col-sm-6 ">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/web.local/public/projetos/listar">Home</a></li>
                <li class="breadcrumb-item active">Detalhes do Projeto</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

    <!-- Main content -->

     
      <div class="content">
        <div class="container-fluid ">
          <div class="row ">
            <div class="col-12 ">
              <div class="card-body rounded">
              <?php if (!empty($projetos)): ?>
                <!--
              <table id="" class="table table-bordered">
                <thead>
                  <tr>
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
                    <tr>
                      <td><?= $projetos['id'] ?></td>
                      <td><?= $projetos['nomeProjeto'] ?></td>
                      <td><?= $projetos['descricaoProjeto'] ?></td>
                      <td><?= $projetos['resumoProjeto'] ?></td>
                      <td><?= $projetos['validado'] ?></td>
                      <td><?= $projetos['curso'] ?></td>
                      <td><?= $projetos['data'] ?></td>
                      <td>
                        <a style="width: 60px; font-size:32px;" onclick="prepararId(<?= $projetos['id'] ?>, '<?= $projetos['nomeProjeto'] ?>')" role="button" href="avaliar/<?= $projetos['id']?>" data-toggle="modal" data-target="#modal-novo-projeto"><i  class="btn btn-info bi-journal-check"></i></a>
                    </tr>
                </tbody>  
              </table> !-->

              <div class="container ">
                <div class="mb-3 border rounded p-2 ">
                    <div class="d-flex align-items-center ml-3">
                        <label for="id" class="col-form-label me-2 mb-0 text-primary">Id</label>
                        <p class="ml-2 mt-3">:</p>
                        <p class="ml-2 "></p>
                        <input type="text" readonly class="form-control-plaintext flex-grow-1 text-dark" style="font-weight:bolder;" id="id" value="<?= htmlspecialchars($projetos['id'], ENT_QUOTES, 'UTF-8') ?>">
                    </div>
                </div>

                <div class="mb-3 border rounded p-2">
                    <label for="nome" class="col-sm-2 col-form-label mt-2 text-primary ">Nome do Projeto</label>
                    <div class="col-sm-12">
                    <input id="nomeProjeto" class="form-control-plaintext mt-2" rows="3" readonly><?= htmlspecialchars($projetos['nomeProjeto'], ENT_QUOTES, 'UTF-8') ?>12
                    </div>
                </div>

                <div class="mb-3 border rounded p-2">
                    <label for="descricao" class="col-sm col-form-label mt-2 text-primary">Descricao do Projeto</label>
                    <div class="col-sm-12">
                    <textarea id="nomeProjeto" class="form-control-plaintext mt-2 " rows="3" readonly><?= htmlspecialchars($projetos['descricaoProjeto'], ENT_QUOTES, 'UTF-8') ?></textarea>
                    </div>
                </div>

                <div class="mb-3 border rounded p-2">
                    <label for="resumo" class="col-sm-2 col-form-label mt-2 text-primary">Resumo do Projeto</label>
                    <div class="col-sm-12">
                    <textarea id="nomeProjeto" class="form-control-plaintext mt-2" rows="3" readonly><?= htmlspecialchars($projetos['resumoProjeto'], ENT_QUOTES, 'UTF-8') ?></textarea>
                    </div>
                </div>

                <div class="mb-3 border rounded p-2">
                    <label for="validado" class="col-sm-2 col-form-label mt-2 text-primary">Avaliado</label>
                    <div class="col-sm-12">
                    <input id="nomeProjeto" class="form-control-plaintext mt-2" rows="3" readonly><?= htmlspecialchars($projetos['validado'], ENT_QUOTES, 'UTF-8') ?>
                    </div>
                </div>

                <div class="mb-3 border rounded p-2">
                    <label for="data" class="col-sm-2 col-form-label mt-2 text-primary">Data de Cadastro</label>
                    <div class="col-sm-12">
                        <input type="text" readonly class="form-control-plaintext mt-2" id="data" value="<?= date('d/m/Y H:i:s', strtotime($projetos['data'])) ?>">
                    </div>
                </div>
            </div>
            <div class="container">
                <a style=" font-size:32px;" onclick="prepararId(<?= $projetos['id'] ?>, '<?= $projetos['nomeProjeto'] ?>')" role="button" href="avaliar/<?= $projetos['id']?>" data-toggle="modal" data-target="#modal-novo-projeto"><i  class="btn btn-info fa-solid fa-user-check mt-5 ml-5"> Avaliar Projeto</i></a></br>


                <a style=" font-size:32px;" data-toggle="modal" data-target="#modal-designar-avaliador"><i  class="btn btn-info fa-solid fa-user-pen mt-2 ml-5 mb-5"> Designar Avaliadorores</i></a>

              </div>
            </div>

              <?php else: ?>
                    <p>Projeto não encontrado.</p>
              <?php endif; ?>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>
      <div class="container mt-5 " style="position:fixed; left:1600px">
            <button class="btn btn-outline-danger" onclick="goBack()"> Voltar para a Listagem</button>
        </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<script>

    function goBack()
    {
        window.history.back();
    }
    

document.addEventListener('DOMContentLoaded', function () {
    // Lista de IDs dos inputs de critérios
    const criteriaIds = [
        'modal-novo-projeto-c1',
        'modal-novo-projeto-c2',
        'modal-novo-projeto-c3',
        'modal-novo-projeto-c4',
        'modal-novo-projeto-c5',
        'modal-novo-projeto-c6',
        'modal-novo-projeto-c7'
    ];

    // Função para atualizar a média dos critérios
    const updateAverage = () => {
        let sum = 0;
        let count = 0;

        // Calcular a soma e o número de critérios válidos
        criteriaIds.forEach(id => {
            const input = document.getElementById(id);
            const value = parseFloat(input.value);
            if (!isNaN(value) && value >= 0 && value <= 10) {
                sum += value;
                count++;
            }
        });

        // Calcular a média e definir o valor nos campos de exibição e oculto
        const average = count > 0 ? (sum / count).toFixed(2) : '0.00';
        document.getElementById('Media-display').value = average;
        document.getElementById('Media').value = average;
    };

    // Adicionar evento de input aos campos dos critérios
    criteriaIds.forEach(id => {
        document.getElementById(id).addEventListener('input', updateAverage);
    });

    // Calcular a média inicial
    updateAverage();
});
</script>
