<?php
    session_start();
    include('verifica_login.php');
    include ('conexao.php');
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
        <?php
            $result_listaProd = "SELECT * FROM produto";
            $resultado_listProd = mysqli_query($conexao, $result_listaProd);
        ?>
        <table class="listaProd">
            <tr>
                <th>Código do Produto</td>
                <th>Nome do Produto</td>
                <th>Quantidade de Produto</td>
                <th>Data de Criação</td>
            </tr>
            <?php
                while($row_listProd = mysqli_fetch_assoc($resultado_listProd))
                {
                    echo "<tr>
                            <td>".$row_listProd['CodProduto']."</td>",
                            "<td>".$row_listProd['NomeProduto']."</td>",
                            "<td>".$row_listProd['Quantidade']."</td>",
                            "<td>".$row_listProd['Criado']."</td>
                            </tr>";
                }
            ?>
        </table>
        <br>
        <button type="button" onclick="goBack()">Voltar</button>
        <button><a class="linkLimpo" href="logout.php">Sair</a></button>
    </body>
</html>
