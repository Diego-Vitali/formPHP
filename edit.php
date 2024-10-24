<?php

    session_start();

    //Define dados do banco
    $servername = "localhost";
    $database = "banco";
    $username = "root";
    $password = "";

    //abre conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

    $id = $_POST['pessoa']['id'];
    $_SESSION["id"] = $id;

    $sql = "SELECT nome, email, idade, cidade FROM pessoas WHERE id = $id";
    $result = $conn->query($sql);
    //Define variáveis do Formulário
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $nome = $row["nome"];
        $email = $row["email"];
        $idade = $row["idade"];
        $cidade = $row["cidade"];
      }
    }

//fecha conexão
mysqli_close($conn);

?>

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
      <a href="#" class="h1"><b>EDITAR</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">ATUALIZE OS DADOS</p>

      <form action="atualiza.php" method="post">
        <div class="input-group mb-3">
          <input name="pessoa[nome]" type="text" class="form-control" placeholder="Nome Completo" value="<?= $nome?>">
          <div class="input-group-append">
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="pessoa[email]" type="email" class="form-control" placeholder="Email" value="<?= $email?>">
          <div class="input-group-append">
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="pessoa[idade]" type="number" class="form-control" placeholder="Idade" value="<?= $idade?>">
          <div class="input-group-append">
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="pessoa[cidade]" type="text" class="form-control" placeholder="Cidade" value="<?= $cidade?>">
          <div class="input-group-append">
          </div>
        </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Atualizar</button>
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
