<?php
    include('../conexao.php');
    include('../classes/doadores.class.php');
    include('../classes/login.class.php');
    include_once('../funcoes/mostraMensagemRedireciona.php');
    include_once('../funcoes/validaInputsCadastro.php');
    include_once('../funcoes/inserirUsuarioBD.php');

    $classeCadDoadores = new Doadores();
    $classeLogin = new Login();

    //Envio das infos para a classe CadastroDoadores
    $classeCadDoadores->setNomeDoador($_POST['nomeDoador']);
    $classeCadDoadores->setTipoSanguineoDoador($_POST['tipoSanguineoDoador']);
    $classeCadDoadores->setDataNascimentoDoador($_POST['dataNascimentoDoador']);
    $classeCadDoadores->setCepDoador($_POST['cepDoador']);
    $classeCadDoadores->setBairroDoador($_POST['bairroDoador']);
    $classeCadDoadores->setCidadeDoador($_POST['cidadeDoador']);
    $classeCadDoadores->setUfdoador($_POST['ufdoador']);
    $classeCadDoadores->setEmailDoador($_POST['emailDoador']);

    //Envio das infos para a classe Login
    $classeLogin->setUsrLogin($_POST['emailDoador']);
    $classeLogin->setSenhaLogin(hash("sha256",$_POST['senhaLogin']));
    
    //Recebendo as infos da classe e colocando em variáveis
    //Usando as variáveis no value do sqlCad!
    $nome = $classeCadDoadores->getNomeDoador();
    $sangue = $classeCadDoadores->getTipoSanguineoDoador();
    $data = $classeCadDoadores->getDataNascimentoDoador();
    $cep = $classeCadDoadores->getCepDoador();
    $bairro = $classeCadDoadores->getBairroDoador();
    $cidade = $classeCadDoadores->getCidadeDoador();
    $uf = $classeCadDoadores->getUfdoador();
    $emailCad = $classeCadDoadores->getEmailDoador();

    //Recebendo as infos da classe e colocando em variáveis
    //Usando as variáveis no value do sqlLog!
    $emailLog = $classeLogin->getUsrLogin();
    $senha = $classeLogin->getSenhaLogin();

    validaInputsImportantesCad($emailCad, $senha);

    if (inserirUsuarioBD($conn, $nome, $sangue, $data, $cep, $bairro, $cidade, $uf, $emailCad, $emailLog, $senha)) {

        mostraMensagemRedireciona('Usuário cadastrado com sucesso!', '../../pages/cadastro.html');
        
    } else {

        echo "Erro: ".$sqlCad."<br>". $conn->error;
        echo "<br/>";
        echo "Erro: ".$sqlLog."<br>". $conn->error;
	    echo "<br/>";
	    echo "Não foi possível realizar o cadastro";
    }

    mysqli_close($conn);

    // $sqlCad = "
    //     insert into cadDoador(
    //         nomeDoador, 
    //         tipoSanguineoDoador, 
    //         dataNascimentoDoador,
    //         cepDoador,
    //         bairroDoador,
    //         cidadeDoador,
    //         ufdoador,
    //         emailDoador
    //     ) 
    //     values (
    //         '$nome',
    //         '$sangue',
    //         '$data',
    //         '$cep',
    //         '$bairro',
    //         '$cidade',
    //         '$uf',
    //         '$emailCad'
    //     );        
    // ";

    // $sqlLog = "
    //     insert into login(usrLogin, senhaLogin) values ('$emailLog', '$senha');
    // ";

    // //query($sql) - realiza uma consulta simples no banco
    // if ($conn->query($sqlCad) && $conn->query($sqlLog) === TRUE) {
	//     echo "
    //         <script language='javascript' type='text/javascript'>
	// 	        alert('Cadastro realizado com sucesso!');
	// 	        window.location.href='../../pages/cadastro.html';
    //         </script>";			
	// 	die();
	//     //die — Equivalente a exit()
    // } else {
    //     echo "Erro: ".$sqlCad."<br>". $conn->error;
	//     echo "<br/>";
	//     echo "Não foi possível realizar o cadastro";
    // }
    // //finaliza a conexão com o banco
    // $conn->close();

?>