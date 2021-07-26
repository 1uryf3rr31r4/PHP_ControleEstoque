<?php
	session_start();
	include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>

<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script language="javascript" src="scripts.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">        
    </head>
    <body>
    	<a href="adicionarProduto.php">Adicionar Produtos</a> | <a href="">Dar Baixa em Produtos</a> | <a href="listarProdutos.php">Listar Produtos</a> | <a href="">Exibir Relatório</a> 

	<h2><a href="logout.php">Sair</a></h2>
	</body>
</html>