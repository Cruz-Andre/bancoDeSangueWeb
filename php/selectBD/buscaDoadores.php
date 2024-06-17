<?php
    header('Content-Type: application/json');

    include('../conexao.php');
    include('../classes/doadores.class.php');
    include('../classes/login.class.php');

    // Verifica a conexão
    if ($conn->connect_error) {
        echo json_encode(['error' => 'Conexão falhou: ' . $conn->connect_error]);
        exit();
    }

    //Tabela cadDoador
    $sqlD = "select * from cadDoador";
    $resultD = $conn->query($sqlD);
    $arrayD = array();
    
    //tabela login
    $sqlL = "select * from login";
    $resultL = $conn->query($sqlL);
    $arrayL = array();



    //query($sqlD) - realiza uma consulta simples no banco
    if ($resultD->num_rows > 0) {
        
        while($row = $resultD->fetch_assoc()) {

            $cadDoador = new Doadores();

            $cadDoador->setIdDoador($row["idDoador"]);
            $cadDoador->setNomeDoador($row["nomeDoador"]);
            $cadDoador->setTipoSanguineoDoador($row["tipoSanguineoDoador"]);
            $cadDoador->setDataNascimentoDoador($row["dataNascimentoDoador"]);
            $cadDoador->setCepDoador($row["cepDoador"]);
            $cadDoador->setBairroDoador($row["bairroDoador"]);
            $cadDoador->setCidadeDoador($row["cidadeDoador"]);
            $cadDoador->setUfdoador($row["ufdoador"]);
            $cadDoador->setEmailDoador($row["emailDoador"]);
            $cadDoador->setDataUltimaDoacao($row["dataUltimaDoacao"]);
            
            // Serialização manual
            $arrayD[] = [
                'idDoador' => $cadDoador->getIdDoador(),
                'nomeDoador' => $cadDoador->getNomeDoador(),
                'tipoSanguineoDoador' => $cadDoador->getTipoSanguineoDoador(),
                'dataNascimentoDoador' => $cadDoador->getDataNascimentoDoadorFormatada(),
                'cepDoador' => $cadDoador->getCepDoador(),
                'bairroDoador' => $cadDoador->getBairroDoador(),
                'cidadeDoador' => $cadDoador->getCidadeDoador(),
                'ufdoador' => $cadDoador->getUfdoador(),
                'emailDoador' => $cadDoador->getEmailDoador(),
                'dataUltimaDoacao' => $cadDoador->getDataUltimaDoacaoFormatada()
            ];
        }
        
    } else {
        echo json_encode(['error' => 'Nenhum dado encontrado']);
        exit();
    }

    //query($sqlL) - realiza uma consulta simples no banco
    if ($resultL->num_rows > 0) {
        
        while($row = $resultL->fetch_assoc()) {

            $logDoador = new Login();

            $logDoador->setIdLogin($row["idLogin"]);
            $logDoador->setUsrLogin($row["usrLogin"]);
            $logDoador->setSenhaLogin($row["senhaLogin"]);
            
            // Serialização manual
            $arrayL[] = [
                'idLogin' => $logDoador->getIdLogin(),
                'usrLogin' => $logDoador->getUsrLogin(),
                'senhaLogin' => $logDoador->getSenhaLogin(),
            ];
        }
        
    } else {
        echo json_encode(['error' => 'Nenhum dado encontrado']);
        exit();
    }

    // Cria um array associativo com os dados do doador e login
    $resposta = [
        'arrayD' => $arrayD,
        'arrayL' => $arrayL
    ];

    //finaliza a conexão com o banco
    $conn->close();    

    // Converter o array de objetos em JSON
    echo json_encode($resposta);

?>