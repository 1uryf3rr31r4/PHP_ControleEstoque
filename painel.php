<?php
	session_start();
	include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>

<a href="adicionarProduto.php">Adicionar Produtos</a> | <a href="">Dar Baixa em Produtos</a> | <a href="listarProdutos.php">Listar Produtos</a> | <a href="">Exibir Relatório</a> 

<h2><a href="logout.php">Sair</a></h2>