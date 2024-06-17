<?php 
    include('../conexao.php');
    include('../classes/plasmaSanguineo.class.php');
    include_once('../funcoes/mostraMensagemRedireciona.php');
    include_once('../funcoes/validaInputsPlasma.php');
    include_once('../funcoes/inserirPlasmaBD.php');
    
    $classePlasma = new PlasmaSanguineo();

    //Envio dos dados para a classe ManutencaoHospitais
    $classePlasma->setNomeHospital($_POST['nomeHosp']);
    $classePlasma->setPlasma($_POST['plasma']);

    //Recebendo os dados da classe ManutencaoHospitais
    //Usando essas variávies no values do sqlMHCad
    $IDPlasma = $classePlasma->getIdPlasma();
    $NomeHosp = $classePlasma->getNomeHospital();
    $plasmaQtd = $classePlasma->getPlasma();
    

    validaInputsPlasma($NomeHosp, $plasmaQtd);

    if (inserirPlasmaBD($conn, $NomeHosp, $plasmaQtd)) {

        mostraMensagemRedireciona('Cadastro realizado com sucesso!', '../../pages/manutencaoPlasma.php');
        
    } else {

        echo "Erro: ".$sqlPlasma."<br>". $conn->error;
        echo "<br/>";
	    echo "Não foi possível realizar o cadastro";
    }

    mysqli_close($conn);

?>