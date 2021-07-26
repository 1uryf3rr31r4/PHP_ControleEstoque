<?php
    session_start();
    include('verifica_login.php');
    include ('conexao.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>

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
        <div id=area-cabecalho>
            <h2>Controle de Estoque</h2>
        </div>
        <br />
        <br />
        <div id="area-conteudoBaixa">

            <table class="baixar">
                <tr>
                    <th>SKU</th>
                    <th>Produto</th>
                    <th>Quantidade a dar baixa</th>
                </tr>
                <tr>
                    <td>001</td>
                    <td>Sabão em pó</td>
                    <td>20</td>
                </tr>
            </table>
            <button>Dar baixa</button>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div id="area-rodape">
            <hr size="1" />
            <em>Controle de Estoque - <strong><?php echo $lc_titulo?> </strong><a href="login.php?sair"> Fazer logout</a></em>
        </div>
    </body>
</html>