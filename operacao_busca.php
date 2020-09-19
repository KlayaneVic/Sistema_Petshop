<?php
    echo '<link rel="stylesheet" href="estilo/estilo.css">';
    include("menu.php");
    include ('cabecalho_conexao.php');
    $string = $_POST['escolhido'];
    $select = $_POST['opcao_select'];

    switch ($select) {
        case 0:
            $SQL = "SELECT * FROM animais where id = $string ";
            break;
        case 1:
            $SQL = "SELECT * FROM animais where nome_dono = '$string' ";
            break;
        case 2:
            $SQL = "SELECT * FROM animais where nome_animal = '$string' ";
            break;
        case 3:
            $SQL = "SELECT * FROM animais where idade_animal = $string";
            break;
        case 4:
            $SQL = "SELECT * FROM animais where nome_popular = '$string' ";
            break;
        default:
            $SQL = "SELECT * FROM animais where telefone_dono = $string";
            break;
    }

    $dados_recuperados = mysqli_query($con, $SQL);
    if(mysqli_num_rows($dados_recuperados) > 0){

        echo "
        <table border='1' align='center' class='content-table'>
            <thead><tr>
                <th>Identificador</th>
                <th>Propietário</th>
                <th>Nome Animal</th>
                <th>Idade Animal</th>
                <th>Nome Popular</th>
                <th>Telefone</th>
            </tr></thead>
        ";
        while (($resultado = mysqli_fetch_assoc($dados_recuperados)) != null) {

            echo "
                <tbody><tr>
                    <td>".$resultado['id']."</td>
                    <td>".$resultado['nome_dono']."</td>
                    <td> ".$resultado['nome_animal']."</td>
                    <td> ".$resultado['idade_animal']."</td>
                    <td> ".$resultado['nome_popular']."</td>
                    <td> ".$resultado['telefone_dono']."</td>
                </tr></tbody>
            ";
        }
	}else {
        echo "<br>Não possui cadastros com esta informação. <br>";
    }

	mysqli_close($con);
?>