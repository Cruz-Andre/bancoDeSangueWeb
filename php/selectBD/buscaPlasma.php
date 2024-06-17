<?php
    header('Content-Type: application/json');

    include('../conexao.php');
    include('../classes/plasmaSanguineo.class.php');

    // Verifica a conexão
    if ($conn->connect_error) {
        echo json_encode(['error' => 'Conexão falhou: ' . $conn->connect_error]);
        exit();
    }

    $sqlBP = "select * from plasmaSanguineo";

    $result = $conn->query($sqlBP);
    
    $PSarray = array();

    //query($sqlBP) - realiza uma consulta simples no banco
    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {

            $plasmaSanguineo = new PlasmaSanguineo();

            $plasmaSanguineo->setIdPlasma($row["idPlasma"]);
            $plasmaSanguineo->setNomeHospital($row["nomeHospital"]);
            $plasmaSanguineo->setPlasma($row["plasma"]);
            
            // Serialização manual
            $PSarray[] = [
                'idPlasma' => $plasmaSanguineo->getIdPlasma(),
                'nomeHospital' => $plasmaSanguineo->getNomeHospital(),
                'plasma' => $plasmaSanguineo->getPlasma(),
            ];
        }
        
    } else {
        echo json_encode(['error' => 'Nenhum dado encontrado']);
        exit();
    }

    //finaliza a conexão com o banco
    $conn->close();    

    // Converter o array de objetos em JSON
    echo json_encode($PSarray);

?>