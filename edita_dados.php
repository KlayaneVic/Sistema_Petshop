<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
        <title>Sistema de Controle PETSHOP</title>
        <link rel="stylesheet" href="estilo/estilo.css">
	</head>
	<body>
    <?php
        include("menu.php");
        include("cabecalho_conexao.php");
        $identificacao = $_GET['identificacao'];
        $SQL = "SELECT * FROM animais where id = $identificacao";
        $dados_recuperados = mysqli_query($con, $SQL);
        $resultado = mysqli_fetch_assoc($dados_recuperados);
    ?>
    
	<form action="processa_edita_dados.php" method="GET">
    <fieldset>
        <legend>Campo de Atualização:</legend>

		<label>Propietário:</label>
		<input type="text" name="proprietario" value="<?php echo $resultado['nome_dono'];?>" disabled/>
		<br>
		
		<label>Nome Animal:</label>
		<input type="text" name="nome_animal" value="<?php echo $resultado['nome_animal'];?>"/>
		<br>
		
		<label>Idade Animal:</label>
		<input type="number" name="idade_animal" value="<?php echo $resultado['idade_animal'];?>"/>
		<br>

        <label>Nome Popular:</label>
		<input type="text" name="nome_popular" value="<?php echo $resultado['nome_popular'];?>"/>
		<br>
		
        <label>Telefone:</label>
		<input type="number" name="telefone" value="<?php echo $resultado['telefone_dono'];?>"/>
		<br>

        <input type="hidden" id="identificacao" name="identificacao" value="<?php echo $identificacao?>" />
		<input type="submit" value="Atualizar" />
        </fieldset>
	</form>
		
    <?php
        // Executa o comando SQL
        $query = mysqli_query($con, $SQL);
        if($query){
        } else {
            echo mysqli_error($con);
        }

        mysqli_close($con);
    ?>
    </body>
</html>	
