<?php
    session_start();
    include('verifica_login.php');
    include ('conexao.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>

<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script language="javascript" src="scripts.js"></script>

</script>
    </head>
    <body>
        <h3>Adicionar Produto</h3>

        <?php
            if(isset($_SESSION['msg']))
            {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>

        <form method="POST" action="processar.php">
              <input name="codigoProduto" type="text" placeholder="Código do Produto"><br>
              <input name="nomeProduto" type="text" placeholder="Nome do Produto"><br>
              <input name="quantProduto" type="text" placeholder="Quantidade do Produto"><br><br>
              <button type="submit">Adicionar</button>
              <button type="reset">Limpar</button>
              <button type="button" onclick="goBack()">Voltar</button>
        </form> 
        <h2><a href="logout.php">Sair</a></h2>
    </body>
</html>