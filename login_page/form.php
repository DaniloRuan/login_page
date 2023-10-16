<?php



if (!empty($_POST["nome"]) || !empty($_POST["email"]) || !empty($_POST["senha"])) {

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    $result = $conexao->query($sql);

    header("location: sucesso/sucesso.html");
} else {
    header('location: index.html');
};
