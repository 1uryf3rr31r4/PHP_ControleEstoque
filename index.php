<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Controle de Estoque</title>
    </head>
    <body>
        <h3>Login</h3>
        <?php
            if(isset($_SESSION['nao_autenticado'])):
        ?>
            <p>ERRO: Usuário ou senha inválidos.</p>
        <?php
            endif;
            unset($_SESSION['nao_autenticado']);
        ?>
        <form action="login.php" method="POST">
            <input name="usuario" type="text" placeholder="Seu usuário" autofocus="">
            <input name="senha" type="password" placeholder="Sua senha">
            <button type="submit">Entrar</button>
        </form>
    </body>
</html>