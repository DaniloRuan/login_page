<?php

if (!empty($_POST['email']) || !empty($_POST['senha'])) {

    include_once('../config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $verificar = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

    $resultado = $conexao->query($verificar);

    if (mysqli_num_rows($resultado) == 1) {
        echo 'acessou o sistema';
    } else {
        header('location: login.html');
    }
} else {
    header('location: login.html');
}
