<?php
	session_start();
	include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>

<html lang="pt-br">
    <head>
        <title>Controle de Estoque</title>
        <meta charset="utf-8" />
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script language="javascript" src="scripts.js"></script>
        <link rel="stylesheet" type="text/css" href="css/estilo2.css">        
    </head>
    <body>
        <br>
    	<a href="adicionarProduto.php">Adicionar Produtos</a> | <a href="">Dar Baixa em Produtos</a> | <a href="listarProdutos.php">Listar Produtos</a> | <a href="">Exibir Relatório</a>
        <br>
        <br>

        <button><a class="linkLimpo" href="logout.php">Sair</a></button>
	</body>
</html>