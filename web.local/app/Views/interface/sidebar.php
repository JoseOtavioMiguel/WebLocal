  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Sofia">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="\web.local\public\estilo\estilo.css">
    
    <style>
      .main-sidebar
        {
          background-image: url('/web.local/public/images/fundo_azul.jpeg'); /* Caminho para sua imagem */
          background-size: cover; /* Ajusta a imagem para cobrir todo o elemento */
          background-position: center; /* Centraliza a imagem */
          background-repeat: no-repeat; /* Impede a repetição da imagem */
          height: 100vh; /* Ajusta a altura para cobrir toda a viewport */
          width: 250px; /* Define a largura da sidebar */
          position: fixed; /* Fixar a sidebar no lado */
          top: 0;
          left: 0;
        }
      </style>
      
  </head>
  <body>
    
  </body>
  </html>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar bg-light elevation-4 " id="bg-img">
    <!-- Brand Logo -->
    <a href="#" class="ml-5" >
      <img src="\web.local\public\images\simpac_logo.png" alt="SimpacLogo" class="brand-image img-circle elevation-3 mt-5"  >
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-5 pb-3 mb-3 d-flex">
        <div class="image mt-3">
          <img src="\web.local\public\images\foto.png" class="img-circle" style="width:70px; height:75px; " alt="Avaliador_icone">
        </div>
        <div class="info mt-4">
          <a href="#" class="d-block text-dark font-size:20px" style="font-weight:bolder;">ADMINISTRADOR</a>
          <p class="ml-4">José Otávio</p>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/web.local/public/projetos/listar" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Página Principal</p>
                </a>
              </li>
  
              <li class="nav-item">
                <a href="/web.local/public/projetos/listarAvaliador" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Avaliadores</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/web.local/public/projetos/projetosAprovados" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projetos Aprovados</p>
                </a>
              </li>


            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>