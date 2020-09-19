<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
        <title>Sistema de Controle PETSHOP</title>
        <link rel="stylesheet" href="estilo/estilo.css">
	</head>
	<body>
        <?php include("menu.php");?>

        <form action="processa_cad.php" method="POST">
        <fieldset>
            <legend>Ensira os Dados:</legend>

            <label>Nome do Propietário:</label>
            <input type="text" name="nome_dono" />
            <br>
            
            <label>Nome do Animal:</label>
            <input type="text" name="nome_animal" />
            <br>
            
            <label>Idade do Animal:</label>
            <input type="number" name="idade_animal" />
            <br>

            <label>Nome Popular do Animal:</label>
            <input type="text" name="nome_popular"  placeholder="EX: Cachorro, Gato..." />
            <br>

            <label>Telefone para Contato:</label>
            <input type="number" name="telefone" />
            <br>
            
            <input type="submit" value="Salvar" />
        </fieldset>
        </form>
	</body>
</html>	
