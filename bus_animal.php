<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
        <title>Sistema de Controle PETSHOP</title>
        <link rel="stylesheet" href="estilo/estilo.css">
	</head>
	<body>
        <?php include("menu.php");?>

        <form action="operacao_busca.php" method="POST">
        <fieldset>
            <legend>Pesquisa Filtrada:</legend>
            <label>Pelo que quer Buscar?:</label>
            <select name="opcao_select" id="select">
                <option value="0" selected>Identificador</option> 
                <option value="1">Propietário</option>
                <option value="2">Nome do Animal</option>
                <option value="3">Idade do Animal</option>
                <option value="4">Nome Popular</option>
                <option value="5">Telefone</option>
            </select>
            <label>Ensira aqui:</label>
            <input type="text" name="escolhido" placeholder="Ensira o valor cadastrado..."/>

            <input type="submit" value="Pesquisar" />
        </form>
        </fieldset>
    </body>
</html>	