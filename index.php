<?php
    //conexão
    require_once ("db_connect.php");
    //sessão
    session_start();
    //botão enviar
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
</head>
<body>
    <h1>FAÇA LOGIN NA SUA CONTA</H1>
    <?php

        if(isset($_POST['btn-entrar'])):
            $erros = array();
            $login = mysqli_escape_string($connect, $_POST['login1']);
            $senha = mysqli_escape_string($connect, $_POST['senha']);
     
            if(empty($login) or empty($senha)):
             $erros[] = "<li> <b>O campo login precisa ser preenchido!</b> </li>";
            else:
                 $sql = "SELECT login1 FROM usuarios5 WHERE login1 = '$login'";
                 $resultado = mysqli_query($connect, $sql);
     
                 if (mysqli_num_rows($resultado) > 0):
                     $senha = md5($senha);
                     $sql = "SELECT * FROM usuarios5 WHERE login1 = '$login' AND senha = '$senha'";
                     $resultado = mysqli_query($connect, $sql);
     
                     if (mysqli_num_rows($resultado) == 1):
                         $dados = mysqli_fetch_array($resultado);
                         mysqli_close($connect);
                         $_SESSION['logado'] = true;
                         $_SESSION['id_usuarios5'] = $dados['id'];
                         header('Location: home.php');
                     else:
                         echo "<li> <b>Usuário e senha não conferem!</b> </li>";
                     endif;
                 else:
                     $erros[] = "<li> <b>Usuário inesistente!</b> </li>";
                 endif;
            endif;
         endif;

         if (!empty($erros)):
            foreach ($erros as $erro):
                echo $erro;
            endforeach;
        endif;

    ?>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Login: <input type="text" name="login1"><br><br>
        Senha: <input type="password" name="senha"><br><br>
        <button type="submit" name="btn-entrar">Entrar</button>
        <br><br>
    </form>

    <a href="cadastrar.php">Cadastrar</a>

</body>
</html>