<?php
    require_once ("db_connect.php");

    $nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $login = filter_input(INPUT_POST, 'login1', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $senha = md5($senha);

    //echo "Nome: $nome <br>";
    //echo "Login: $login <br>";
    //echo "Senha: $senha <br>";

    if (isset($nome)) {
    $resultado = "INSERT INTO usuarios5 (nome, login1,  senha) VALUES('$nome','$login', '$senha')";
    $resultado_usuario = mysqli_query($connect, $resultado);
    }

?>