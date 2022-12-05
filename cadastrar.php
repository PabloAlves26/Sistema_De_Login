<?php
    session_start();
    require_once ("db_connect.php");

    /*if (!empty($_POST['nome'])):
        if (!empty($_POST['login1'])):
        endif;
        if (!empty($_POST['senha'])):
        endif;
        header ('Location: index.php');
    endif;*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadstro Usuário</title>
</head>
<body>
    <h1>PREENCHA O FORMULÁRIO PARA SE CADASTRAR</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>
            <label>
                Digite seu Nome:<input type="text"name="nome" placeholder="Digite seu nome" required><br><br>
                Digite seu nome de login: <input type="text" name="login1" placeholder="Digite seu nome de login" required><br><br>
                Crie uma senha: <input type="password" name="senha" placeholder="Digite uma senha" required><br><br>
                <input type="submit" value="Cadastrar">
            </label>
        </fieldset>
    </form>
    <?php include_once("processa.php"); ?>
    <br><br>

    <a href="index.php">Voltar para paginá de login</a>
</body>
</html>