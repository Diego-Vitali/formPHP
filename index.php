<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>CADASTRO</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Cadastre-se</p>

      <form action="cadastro.php" method="post">
        <div class="input-group mb-3">
          <input name="pessoa[nome]" type="text" class="form-control" placeholder="Nome Completo">
          <div class="input-group-append">
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="pessoa[email]" type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="pessoa[idade]" type="number" class="form-control" placeholder="Idade">
          <div class="input-group-append">
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="pessoa[cidade]" type="text" class="form-control" placeholder="Cidade">
          <div class="input-group-append">
          </div>
        </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
          </div>
          <br>
          <p class="login-box-msg">Editar Cadastro</p>
          <!-- /.col -->
          </form>
        <form action="edit.php" method="post">
          <div class="input-group mb-3">
            <input name="pessoa[id]" type="number" class="form-control" placeholder="Digite o ID">
            <div class="input-group-append">
            </div>
          </div>
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Editar</button>
        </div>
        </div>
      </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
