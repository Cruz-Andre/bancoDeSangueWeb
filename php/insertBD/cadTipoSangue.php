<?php 
    include('../conexao.php');
    include('../classes/tipoSanguineo.class.php');
    
    $classeTS = new TipoSanguineo();

    //Envio dos dados para a classe ManutencaoHospitais
    $classeTS->setNomeHospital($_POST['nomeHosp']);
    $classeTS->setAPos($_POST['Amais']);
    $classeTS->setANeg($_POST['Amenos']);
    $classeTS->setBPos($_POST['Bmais']);
    $classeTS->setBNeg($_POST['Bmenos']);
    $classeTS->setABPos($_POST['ABmais']);
    $classeTS->setABNeg($_POST['ABmenos']);
    $classeTS->setOPos($_POST['Omais']);
    $classeTS->setONeg($_POST['Omenos']);

    //Recebendo os dados da classe ManutencaoHospitais
    //Usando essas variávies no values do sqlMHCad
    $IDHosp = $classeTS->getIdHospital();
    $NomeHosp = $classeTS->getNomeHospital();
    $Amais = $classeTS->getAPos();
    $Amenos = $classeTS->getANeg();
    $Bmais = $classeTS->getBPos();
    $Bmenos = $classeTS->getBNeg();
    $ABmais = $classeTS->getABPos();
    $ABmenos = $classeTS->getABNeg();
    $Omais = $classeTS->getOPos();
    $Omenos = $classeTS->getONeg();

    $sqlTS = "
        INSERT INTO tipoSanguineo(
        nomeHospital, aPos, aNeg, bPos, bNeg, abPos, abNeg, oPos, oNeg) 
        VALUES ('$NomeHosp', '$Amais', '$Amenos', '$Bmais', '$Bmenos', '$ABmais', '$ABmenos', '$Omais', '$Omenos')
    ";

    //query($sql) - realiza uma consulta simples no banco
    if ($conn->query($sqlTS) === TRUE) {
        echo "
            <script language='javascript' type='text/javascript'>
                alert('Cadastro realizado com sucesso!');
                window.location.href='../../pages/manutencaoTipoSanguineo.html';
            </script>";			
        die();
        //die — Equivalente a exit()

    } else {

        echo "Erro: ".$sqlTS."<br>".$conn->error;
        echo "<br/>";
        echo "<h1>Não foi possível realizar o cadastro, veja mensagem de erro acima<h1>";
    }

    //finaliza a conexão com o banco
    $conn->close(); 

?>