<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simpac XVI</title>

  <!-- Estilos e fontes -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="\web.local\public\tema\plugins\fontawesome-free\css\all.min.css">
  <link rel="stylesheet" href="\web.local\public\tema\dist\css\adminlte.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
  <link href="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="\web.local\public\estilo\pagina.css">
  <link rel="stylesheet" type="text/css" href="\web.local\public\estilo\font.css">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Inclui Navbar e Sidebar -->
  <?php include_once('navbarUsuario.php'); ?>
  <?php include_once('sidebarUsuario.php'); ?>

  <!-- Conteúdo principal -->
  <div class="wrapper">
    <!-- Código da página -->
  </div>


  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/v/dt/dt-2.1.4/datatables.min.js"></script>
  <script src="\web.local\public\tema\plugins\bootstrap\js\bootstrap.bundle.min.js"></script>
  <script src="\web.local\public\tema\dist\js\adminlte.js"></script>

  <script>
    $(document).ready(function() {
      $('#listar, #projetosAprovados').DataTable({
        "language": {
          "sEmptyTable": "Nenhum dado disponível na tabela",
          "sInfo": "Mostrando _START_ até _END_ de _TOTAL_ entradas",
          "sInfoEmpty": "Mostrando 0 até 0 de 0 entradas",
          "sInfoFiltered": "(filtrado de _MAX_ entradas no total)",
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
          }
        }
      });
    });

    function prepararDados(id, nome, descricao, resumo, curso, validado) {
      document.getElementById('modal-editar-projeto-id').value = id;
      document.getElementById('modal-editar-projeto-nome').value = nome;
      document.getElementById('modal-editar-projeto-descricao').value = descricao;
      document.getElementById('modal-editar-projeto-resumo').value = resumo;
      document.getElementById('modal-editar-projeto-curso').value = curso;
      document.getElementById('modal-editar-projeto-validado').value = validado;
      $('#modal-editar-projeto').modal('show');
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

    function prepararAvaliador(id, nome, email, telefone) {
      document.getElementById('modal-designar-avaliador-id').value = id;
      document.getElementById('modal-designar-avaliador-nome').value = nome;
      document.getElementById('modal-designar-avaliador-email').value = email;
      document.getElementById('modal-designar-avaliador-telefone').value = telefone;
      $('#modal-designar-avaliador').modal('show');
    }
  </script>
</body>

</html>
