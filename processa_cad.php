<?php

	echo '<link rel="stylesheet" href="estilo/estilo.css">';
	include("menu.php");

	//Capturei as informações do formulário
	$nome_dono = $_POST['nome_dono'];
	$nome_animal = $_POST['nome_animal'];
    $idade_animal = $_POST['idade_animal'];
    $nome_popular = $_POST['nome_popular'];
    $telefone = $_POST['telefone'];
	
	//Abrindo conexão com o BD
	include('cabecalho_conexao.php');
	
	$SQL = "INSERT INTO animais (nome_dono, nome_animal, idade_animal, nome_popular, telefone_dono) 
			VALUE ('$nome_dono', '$nome_animal', $idade_animal, '$nome_popular', '$telefone')";
			
	$texto = "Cadastro realizado com Sucesso!<br>";
	
	include('rodape_conexao.php');
?>