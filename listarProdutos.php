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

    	<?php

    		$dbname = 'estoque';
    		$sql = "SHOW TABLE FROM {$dbname}";
    		$result = mysqli_query($conexao, $sql);

    		while($row = mysqli_affected_rows($))
    		{
    			echo "Lista : {$row[0]}\n";
    		}

    		/*mysql_free_result($result);*/
    	?>	

        <button type="button" onclick="goBack()">Voltar</button>
        <h2><a href="logout.php">Sair</a></h2>
    </body>
</html>
