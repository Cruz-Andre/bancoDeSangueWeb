<?php
    include('conexao.php');
    include('cadastro.class.php');
    include('login.class.php');

    $classeCadastro = new Cadastro();
    $classeLogin = new Login();

    //Envio das infos para a classe Cadastro
    $classeCadastro->setNomeDoador($_POST['nomeDoador']);
    $classeCadastro->setTipoSanguineoDoador($_POST['tipoSanguineoDoador']);
    $classeCadastro->setDataNascimentoDoador($_POST['dataNascimentoDoador']);
    $classeCadastro->setCepDoador($_POST['cepDoador']);
    $classeCadastro->setBairroDoador($_POST['bairroDoador']);
    $classeCadastro->setCidadeDoador($_POST['cidadeDoador']);
    $classeCadastro->setUfdoador($_POST['ufdoador']);
    $classeCadastro->setEmailDoador($_POST['emailDoador']);
    
    //Envio das infos para a classe Login
    $classeLogin->setUsrLogin($_POST['emailDoador']);
    $classeLogin->setSenhaLogin($_POST['senhaLogin']);

    //Recebendo as infos da classe e colocando em variáveis
    //Usando as variáveis no value do sqlCad!
    $nome = $classeCadastro->getNomeDoador();
    $sangue = $classeCadastro->getTipoSanguineoDoador();
    $data = $classeCadastro->getDataNascimentoDoador();
    $cep = $classeCadastro->getCepDoador();
    $bairro = $classeCadastro->getBairroDoador();
    $cidade = $classeCadastro->getCidadeDoador();
    $uf = $classeCadastro->getUfdoador();
    $emailCad = $classeCadastro->getEmailDoador();

    //Usando as variáveis no value do sqlLog!
    $emailLog = $classeLogin->getUsrLogin();
    $senha = $classeLogin->getSenhaLogin();


    $sqlCad = "
        insert into cadDoador(
            nomeDoador, 
            tipoSanguineoDoador, 
            dataNascimentoDoador,
            cepDoador,
            bairroDoador,
            cidadeDoador,
            ufdoador,
            emailDoador
        ) 
        values (
            '$nome',
            '$sangue',
            '$data',
            '$cep',
            '$bairro',
            '$cidade',
            '$uf',
            '$emailCad'
        );        
    ";

    $sqlLog = "
        insert into login(usrLogin, senhaLogin) values ('$emailLog', '$senha');
    ";

    //query($sql) - realiza uma consulta simples no banco
    if ($conn->query($sqlCad) && $conn->query($sqlLog) === TRUE) {
	    echo "
            <script language='javascript' type='text/javascript'>
		        alert('Cadastro realizado com sucesso!');
		        window.location.href='../pages/cadastro.html';
            </script>";			
		die();
	    //die — Equivalente a exit()
    } else {
        echo "Erro: ".$sql."<br>". $conn->error;
	    echo "<br/>";
	    echo "Não foi possível realizar o cadastro";
    }
    //finaliza a conexão com o banco
    $conn->close();

?>