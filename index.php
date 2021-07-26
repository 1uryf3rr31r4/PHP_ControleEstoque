<?php
    session_start();
?>

<!DOCTYPE html>
<html>
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
            <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
            <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
        </form>
    </body>
</html>