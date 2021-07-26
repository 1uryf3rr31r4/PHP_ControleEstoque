<?php
    session_start();
    include('verifica_login.php');
    include ('conexao.php');

    $codigoProduto = filter_input(INPUT_POST, 'codigoProduto', FILTER_SANITIZE_STRING);
    $nomeProduto  = filter_input(INPUT_POST, 'nomeProduto', FILTER_SANITIZE_STRING);
    $quantProduto = filter_input(INPUT_POST, 'quantProduto', FILTER_SANITIZE_NUMBER_INT);

    $result_addProduto = "INSERT INTO produto (CodProduto, NomeProduto, Quantidade, Criado) VALUES ('$codigoProduto', '$nomeProduto', '$quantProduto', NOW())";

    $resultado_addProduto = mysqli_query($conexao, $result_addProduto);

    if(mysqli_insert_id($conexao))
    {
        $_SESSION['msg'] = "Produto Cadastrado com Sucesso";
        header("Location: adicionarProduto.php");
    }
    else
    {
        header("Location: adicionarProduto.php");
    }

?>

