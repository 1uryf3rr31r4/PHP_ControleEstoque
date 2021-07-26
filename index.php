<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Controle de Estoque</title>
        <meta charset="utf-8" />
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script language="javascript" src="scripts.js"></script>
        <link rel="stylesheet" type="text/css" href="css/estilo2.css">
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