<?php 
    include('conexao.php');
    include('manutencaoHospitais.class.php');
    
    $action = $_POST['action'];

    $classeMH = new ManutencaoHospitais();

    //Envio dos dados para a classe ManutencaoHospitais
    $classeMH->setNomeHospital($_POST['nomeHosp']);
    $classeMH->setAPos($_POST['Amais']);
    $classeMH->setANeg($_POST['Amenos']);
    $classeMH->setBPos($_POST['Bmais']);
    $classeMH->setBNeg($_POST['Bmenos']);
    $classeMH->setABPos($_POST['ABmais']);
    $classeMH->setABNeg($_POST['ABmenos']);
    $classeMH->setOPos($_POST['Omais']);
    $classeMH->setONeg($_POST['Omenos']);

    //Recebendo os dados da classe ManutencaoHospitais
    //Usando essas variávies no values do sqlMHCad
    $IDHosp = $classeMH->getIdHospital();
    $NomeHosp = $classeMH->getNomeHospital();
    $Amais = $classeMH->getAPos();
    $Amenos = $classeMH->getANeg();
    $Bmais = $classeMH->getBPos();
    $Bmenos = $classeMH->getBNeg();
    $ABmais = $classeMH->getABPos();
    $ABmenos = $classeMH->getABNeg();
    $Omais = $classeMH->getOPos();
    $Omenos = $classeMH->getONeg();

    
    if ($action == 'cadastrar') {
        $sqlMHCad = "
            INSERT INTO hospitalSangue(
            nomeHospital, aPos, aNeg, bPos, bNeg, abPos, abNeg, oPos, oNeg) 
            VALUES ('$NomeHosp', '$Amais', '$Amenos', '$Bmais', '$Bmenos', '$ABmais', '$ABmenos', '$Omais', '$Omenos')
        ";

        //query($sql) - realiza uma consulta simples no banco
        if ($conn->query($sqlMHCad) === TRUE) {
	        echo "
                <script language='javascript' type='text/javascript'>
		            alert('Cadastro realizado com sucesso!');
		            window.location.href='../pages/manutencaoTipoSanguineo.html';
                </script>";			
		    die();
	        //die — Equivalente a exit()

        } else {

            echo "Erro: ".$sql."<br>".$conn->error;
	        echo "<br/>";
	        echo "<h1>Não foi possível realizar o cadastro, veja mensagem de erro acima<h1>";
        }
        //finaliza a conexão com o banco
        $conn->close();

    } elseif ($action == 'atualizar') {

        //Supondo que o ID do registro a ser atualizado seja fornecido
        $sqlMHAtu = "
            update hospitalSangue SET
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
		            window.location.href='../pages/manutencaoTipoSanguineo.html';
                </script>";
		    die();
	        //die — Equivalente a exit()

        } else {

            echo "Erro: ".$sql."<br>".$conn->error;
	        echo "<br/>";
	        echo "<h1>Não foi possível realizar a atualização, veja mensagem de erro acima<h1>";
        }
        //finaliza a conexão com o banco
        $conn->close();
    
    }

    

    


?>