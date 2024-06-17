<?php 
    include('../conexao.php');
    include('../classes/tipoSanguineo.class.php');
    
    $classeTS = new TipoSanguineo();

    //Envio dos dados para a classe tipoSanguineo.class
    $classeTS->setIdHosp($_POST['idHosp']);
    $classeTS->setNomeHospital($_POST['nomeHosp']);
    $classeTS->setAPos($_POST['Amais']);
    $classeTS->setANeg($_POST['Amenos']);
    $classeTS->setBPos($_POST['Bmais']);
    $classeTS->setBNeg($_POST['Bmenos']);
    $classeTS->setABPos($_POST['ABmais']);
    $classeTS->setABNeg($_POST['ABmenos']);
    $classeTS->setOPos($_POST['Omais']);
    $classeTS->setONeg($_POST['Omenos']);

    //Recebendo os dados da classe tipoSanguineo.class
    //Usando essas variávies no values do sqlMHAtu
    $IDHosp = $classeTS->getIdHosp();
    $NomeHosp = $classeTS->getNomeHospital();
    $Amais = $classeTS->getAPos();
    $Amenos = $classeTS->getANeg();
    $Bmais = $classeTS->getBPos();
    $Bmenos = $classeTS->getBNeg();
    $ABmais = $classeTS->getABPos();
    $ABmenos = $classeTS->getABNeg();
    $Omais = $classeTS->getOPos();
    $Omenos = $classeTS->getONeg();

    //Supondo que o ID do registro a ser atualizado seja fornecido
    $sqlMHAtu = "
        update tipoSanguineo SET
        nomeHospital = '$NomeHosp',
        aPos = '$Amais',
        aNeg = '$Amenos',
        bPos = '$Bmais',
        bNeg = '$Bmenos',
        abPos = '$ABmais',
        abNeg = '$ABmenos',
        oPos = '$Omais',
        oNeg = '$Omenos' where idHosp = '$IDHosp'

    ";

    if ($conn->query($sqlMHAtu) === TRUE) {
        echo "
            <script language='javascript' type='text/javascript'>
                alert('Atualização realizada com sucesso!');
                window.location.href='../../pages/manutencaoTipoSanguineo.php';
            </script>";
        die();
        //die — Equivalente a exit()

    } else {

        echo "Erro: ".$sqlMHAtu."<br>".$conn->error;
        echo "<br/>";
        echo "<h1>Não foi possível realizar a atualização, veja mensagem de erro acima<h1>";
    }
    //finaliza a conexão com o banco
    $conn->close();

?>