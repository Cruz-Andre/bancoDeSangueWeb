<?php 
    include('../conexao.php');
    include('../classes/plasmaSanguineo.class.php');
    
    $classePS = new PlasmaSanguineo();

    //Envio dos dados para a classe PlasmaSanguineo.class
    $classePS->setIdPlasma($_POST['idPlasma']);
    $classePS->setNomeHospital($_POST['nomeHosp']);
    $classePS->setPlasma($_POST['plasma']);

    //Recebendo os dados da classe PlasmaSanguineo.class
    //Usando essas variávies no values do sqlPSAtu
    $IDHosp = $classePS->getIdPlasma();
    $NomeHosp = $classePS->getNomeHospital();
    $Plasma = $classePS->getPlasma();

    //Supondo que o ID do registro a ser atualizado seja fornecido
    $sqlPSAtu = "
        update plasmaSanguineo SET
        nomeHospital = '$NomeHosp',
        plasma = '$Plasma' where idPlasma = '$IDHosp'

    ";

    if ($conn->query($sqlPSAtu) === TRUE) {
        echo "
            <script language='javascript' type='text/javascript'>
                alert('Atualização realizada com sucesso!');
                window.location.href='../../pages/manutencaoPlasma.php';
            </script>";
        die();
        //die — Equivalente a exit()

    } else {

        echo "Erro: ".$sqlPSAtu."<br>".$conn->error;
        echo "<br/>";
        echo "<h1>Não foi possível realizar a atualização, veja mensagem de erro acima<h1>";
    }
    //finaliza a conexão com o banco
    $conn->close();

?>