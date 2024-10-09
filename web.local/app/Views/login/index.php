<!DOCTYPE html>
<html lang="en">
<head >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema | SIMPAC</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/web.local/public/tema/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/web.local/public/temaplugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/web.local/public/tema/dist/css/adminlte.min.css">

  <link href='https://fonts.google.com/noto/specimen/Noto+Serif' rel='stylesheet'>
  <link href='https://fonts.google.com/specimen/Playfair+Display' rel='stylesheet'>
  

  <style>
    .playfair
    {
      font-family: 'Playfair Display', serif;
    }
    .noto
    {
      font-family: 'Noto Serif', serif;
    }
    .nerko
    {
        font-family: 'Nerko One', cursive;
    }
  </style>

</head>
<body class="hold-transition login-page" style="background-image: url('/web.local/public/images/login.jpg'); background-size: 100vw 100vh; background-repeat: no-repeat;" >
<div class="login-box" >
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <p class="h1 nerko"><b>Simpac</b>Login</p>
      <p class="h1 text-primary text-bolder nerko"><i class="fa fa-user-tie"></i> Administrador</p>
    </div>
    <div class="card-body bg-light">

        <?php if(isset($_GET['alert'])): ?>
            <div class="login-box-msg text-danger rounded-pill mt-2" style="height:60px;">
              <p> Acesso Negado!<br/> Informe os dados corretamente.</p>
            </div><br />
        <?php else: ?>
            <p class="login-box-msg">Acesse sua conta para continuar</p>
        <?php endif; ?>


      <form action="/web.local/public/login/autenticar" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Digite seu Login" name="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Digite sua senha" name="Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Lembrar Senha
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12 mt-2">
            <button type="submit" class="btn btn-success btn-block">Acessar</button>
          </div>
          <div class="col-12 mt-2">
            <a role="button" href="/web.local/public/login/loginUsuario"  class="btn btn-primary btn-block">Acessar como Usuário</a>
          </div>
      </form>
 
          <!-- /.col -->
        

      <!--<div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> !-->
      <!-- /.social-auth-links -->

      <p class="mt-3">
        <a href="forgot-password.html">Esqueceu a Senha </a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/web.local/public/tema/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/web.local/public/tema/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/web.local/public/tema/dist/js/adminlte.min.js"></script>
</body>
</html>
