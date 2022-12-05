<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "Sistemalogin";

    //Criar a conexao
    $connect = mysqli_connect($servidor, $usuario, $senha, $dbname) or die('erro na conexao');
?>