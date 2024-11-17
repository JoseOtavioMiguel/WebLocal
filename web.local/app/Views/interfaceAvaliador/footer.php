<link rel="stylesheet" href="\web.local\public\Views\estilo\pagina.cssS">
<!-- Main Footer -->
<footer class="main-footer text-center text-sm-left">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-3 my-4">
    <div class="col-md-6">
      <small>
        Copyright &copy; 2024 <a href="/web.local/public/projetos/listar">Plataforma SIMPAC</a>. Todos os direitos reservados.
      </small>
    </div>
    <div class="col-md-6 text-md-right">
      <small>Powered by <strong class="text-primary"> &#937;megaSolutions <i class="bi bi-badge-tm-fill"></i></strong></small>
    </div>
  </div>
</footer>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.js"></script>

<!-- Inicialize DataTable -->
<script>
  $(document).ready(function() {
    $('#listar, #projetosAprovados').DataTable({
      "language": {
        "sEmptyTable": "Nenhum dado disponível na tabela",
        "sInfo": "Mostrando _START_ até _END_ de _TOTAL_ entradas",
        "sInfoEmpty": "Mostrando 0 até 0 de 0 entradas",
        "sInfoFiltered": "(filtrado de _MAX_ entradas no total)",
        "sInfoPostFix": "",
        "sInfoThousands": ".",
        "sLengthMenu": "Mostrar _MENU_ entradas",
        "sLoadingRecords": "Carregando...",
        "sProcessing": "Processando...",
        "sSearch": "Buscar:",
        "sZeroRecords": "Nenhum registro encontrado",
        "oPaginate": {
          "sFirst": "Primeiro",
          "sLast": "Último",
          "sNext": "Próximo",
          "sPrevious": "Anterior"
        },
        "oAria": {
          "sSortAscending": ": ativar para classificar a coluna em ordem crescente",
          "sSortDescending": ": ativar para classificar a coluna em ordem decrescente"
        }
      }
    });
  });
</script>

<!-- Outros scripts -->
<script src="\web.local\public\tema\plugins\bootstrap\js\bootstrap.bundle.min.js"></script>
<script src="\web.local\public\tema\dist\js\adminlte.js"></script>

<!-- Initialize DataTable -->
<script>
    function prepararDados(id, nome, descricao, resumo, curso, validado) {
    
        document.getElementById('modal-editar-projeto-id').value = id;
        document.getElementById('modal-editar-projeto-nome').value = nome;
        document.getElementById('modal-editar-projeto-descricao').value = descricao;
        document.getElementById('modal-editar-projeto-resumo').value = resumo;
        document.getElementById('modal-editar-projeto-curso').value = curso;
        document.getElementById('modal-editar-projeto-validado').value = validado;

        //document.getElementById('modal-editar-projeto-data').value = data;

        $('#modal-editar-projeto').modal('show');
    }


    function prepararLogin(id, nome)
    {
        document.getElementById('modal-login-id').value = id;
        doucument.getElementById('modal-login-nome').value = username;

        $('modal-login').modal('show'); 
    }

    function prepararId(id, nome, tipo) {
    
        document.getElementById('modal-novo-projeto-id').value = id;
        document.getElementById('modal-novo-projeto-nome').value = nome;
        document.getElementById('modal-poster-id').value = id;
        document.getElementById('modal-poster-nome').value = nome;


        if (tipo === 'Oral') {
            $('#modal-novo-projeto').modal('show');
        } else if (tipo === 'Poster') {
            $('#modal-projeto-poster').modal('show');
        }
    }

    function prepararAvaliador(id, nome, email, telefone)
      {
        document.getElementById('modal-designar-avaliador-id').value = id;
        document.getElementById('modal-designar-avaliador-nome').value = nome ;
        document.getElementById('modal-designar-avaliador-email').value = email;
        document.getElementById('modal-designar-avaliador-telefone').value = telefone;

        $('#modal-designar-avaliador').modal('show');
      }
    
  </script>
</body>
</html>