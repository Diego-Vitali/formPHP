<?php
    //Define variáveis do Formulário
    $nome = $_POST['pessoa']['nome'];
    $email = $_POST['pessoa']['email'];
    $idade = $_POST['pessoa']['idade'];
    $cidade = $_POST['pessoa']['cidade'];

    //Define dados do banco
    $servername = "localhost";
    $database = "banco";
    $username = "root";
    $password = "";

    //abre conexão
    $conn = mysqli_connect($servername, $username, $password, $database);
    //testa conexao
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //Insere dados do formulário
    $sql = "INSERT INTO pessoas (nome, email, idade, cidade) VALUES ('$nome', '$email', '$idade', '$cidade')";
    if (mysqli_query($conn, $sql)) {
        echo "Usuário Adicionado!<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }



//fecha conexão
mysqli_close($conn);
?>
