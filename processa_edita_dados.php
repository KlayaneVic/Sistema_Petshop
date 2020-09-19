<?php
    $identificacao = $_GET['identificacao'];
    $nomeAnimal = $_GET['nome_animal'];
    $idadeAnimal = $_GET['idade_animal'];
    $nomePopular = $_GET['nome_popular'];
    $telefone = $_GET['telefone'];
	
    include('cabecalho_conexao.php');
	
	$SQL = "UPDATE animais SET nome_animal='$nomeAnimal', 
    idade_animal='$idadeAnimal', nome_popular='$nomePopular', 
    telefone_dono='$telefone' WHERE id=$identificacao";
	//echo $SQL;

	// Executa o comando SQL
	$query = mysqli_query($con, $SQL);
	if($query){
	} else {
		echo mysqli_error($con);
	}

	mysqli_close($con);
	
    header('location:cons_animais_cadastrados.php');
?>