<?php
    header('Content-Type: application/json');

    include('../conexao.php');
    include('../classes/tipoSanguineo.class.php');

    // Verifica a conexão
    if ($conn->connect_error) {
        echo json_encode(['error' => 'Conexão falhou: ' . $conn->connect_error]);
        exit();
    }

    $sqlTS = "select * from tipoSanguineo";

    $result = $conn->query($sqlTS);
    
    $TSarray = array();

    //query($sqlTS) - realiza uma consulta simples no banco
    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {

            $tipoSanguineo = new TipoSanguineo();

            $tipoSanguineo->setIdHosp($row["idHosp"]);
            $tipoSanguineo->setNomeHospital($row["nomeHospital"]);
            $tipoSanguineo->setAPos($row["aPos"]);
            $tipoSanguineo->setANeg($row["aNeg"]);
            $tipoSanguineo->setBPos($row["bPos"]);
            $tipoSanguineo->setBNeg($row["bNeg"]);
            $tipoSanguineo->setABPos($row["abPos"]);
            $tipoSanguineo->setABNeg($row["abNeg"]);
            $tipoSanguineo->setOPos($row["oPos"]);
            $tipoSanguineo->setONeg($row["oNeg"]);
            
            // Serialização manual
            $TSarray[] = [
                'idHosp' => $tipoSanguineo->getIdHosp(),
                'nomeHospital' => $tipoSanguineo->getNomeHospital(),
                'aPos' => $tipoSanguineo->getAPos(),
                'aNeg' => $tipoSanguineo->getANeg(),
                'bPos' => $tipoSanguineo->getBPos(),
                'bNeg' => $tipoSanguineo->getBNeg(),
                'abPos' => $tipoSanguineo->getABPos(),
                'abNeg' => $tipoSanguineo->getABNeg(),
                'oPos' => $tipoSanguineo->getOPos(),
                'oNeg' => $tipoSanguineo->getONeg()
            ];
        }
        
    } else {
        echo json_encode(['error' => 'Nenhum dado encontrado']);
        exit();
    }

    //finaliza a conexão com o banco
    $conn->close();    

    // Converter o array de objetos em JSON
    echo json_encode($TSarray);

?>