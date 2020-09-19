<?php
    include ('cabecalho_conexao.php');

    $SQL = "SELECT * FROM animais";

    $dados_recuperados = mysqli_query($con, $SQL);
    echo '<link rel="stylesheet" href="estilo/estilo.css">';
    include("menu.php");

    if($dados_recuperados){
        if(mysqli_num_rows($dados_recuperados) > 0){
            echo "<table border='1' align='center' class='content-table'>";
            echo "<thead><tr>
					<th>Identificação</th>
					<th>Nome do Propietário</th>
					<th>Nome do Animal</th>
                    <th>Idade do Animal</th>
                    <th>Nome Popular do Animal</th>
                    <th>Telefone para Contato</th>
					<th>Operação</th>
				  </tr></thead>";
            while (($resultado = mysqli_fetch_assoc($dados_recuperados)) != null) {
                echo "<tbody><tr>";
                echo "<td>" . $resultado['id'] . "</td>";
                echo "<td>" . $resultado['nome_dono'] . "</td>";
                echo "<td>" . $resultado['nome_animal'] . "</td>";
                echo "<td>" . $resultado['idade_animal'] . "</td>";
                echo "<td>" . $resultado['nome_popular'] . "</td>";
                echo "<td>" . $resultado['telefone_dono'] . "</td>";
                echo "<td><a href='edita_dados.php?identificacao=$resultado[id]'>Editar</a></td>";
                echo "</tr></tbody>";
            }

            echo "</table>";
        }else{
            echo "Nao há cadastros até o Momento.<br>";
        }
    }
    mysqli_close($con);
?>