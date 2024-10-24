<?php
    session_start();

    //Define dados do banco
    $servername = "localhost";
    $database = "banco";
    $username = "root";
    $password = "";

    //abre conexão
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    $id = $_SESSION["id"];
    $nome = $_POST['pessoa']["nome"];
    $email = $_POST['pessoa']["email"];
    $idade = $_POST['pessoa']["idade"];
    $cidade = $_POST['pessoa']["cidade"];

    $sql = "SELECT nome, email, idade, cidade FROM pessoas WHERE id = $id";
    $result = $conn->query($sql);
        $sql = "UPDATE pessoas 
                SET nome = '$nome', email = '$email', idade = $idade, cidade = '$cidade' 
                WHERE id = $id";
        $result = $conn->query($sql);
