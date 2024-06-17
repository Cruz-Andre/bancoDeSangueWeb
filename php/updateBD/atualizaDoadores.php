<?php 
    include('../conexao.php');
    include('../classes/doadores.class.php');
    include('../classes/login.class.php');
    include_once('../funcoes/mostraMensagemRedireciona.php');
    include_once('../funcoes/validaInputsCadastro.php');
    include_once('../funcoes/atualizarUsuarioBD.php');

    $updateDoadores = new Doadores();
    $updateLogin = new Login();

    //Envio das infos para a classe Doadores
    $updateDoadores->setIdDoador($_POST['idDoador']);
    $updateDoadores->setNomeDoador($_POST['nomeDoador']);
    $updateDoadores->setTipoSanguineoDoador($_POST['tipoSanguineoDoador']);
    $updateDoadores->setDataNascimentoDoador($_POST['dataNascimentoDoador']);
    $updateDoadores->setCepDoador($_POST['cepDoador']);
    $updateDoadores->setBairroDoador($_POST['bairroDoador']);
    $updateDoadores->setCidadeDoador($_POST['cidadeDoador']);
    $updateDoadores->setUfdoador($_POST['ufdoador']);
    $updateDoadores->setEmailDoador($_POST['emailDoador']);
    $updateDoadores->setDataUltimaDoacao($_POST['dataUltimaDoacao']);

    //Envio das infos para a classe Login
    $updateLogin->setIdLogin($_POST['idDoador']);
    $updateLogin->setUsrLogin($_POST['emailDoador']);
    $updateLogin->setSenhaLogin(hash("sha256",$_POST['senhaLogin']));
    
    //Recebendo as infos da classe e colocando em variáveis
    //Usando as variáveis no value do sqlCad!
    $idDoador = $updateDoadores->getIdDoador();
    $nome = $updateDoadores->getNomeDoador();
    $sangue = $updateDoadores->getTipoSanguineoDoador();
    $dataNascimento = $updateDoadores->getDataNascimentoDoador();
    $cep = $updateDoadores->getCepDoador();
    $bairro = $updateDoadores->getBairroDoador();
    $cidade = $updateDoadores->getCidadeDoador();
    $uf = $updateDoadores->getUfdoador();
    $emailCad = $updateDoadores->getEmailDoador();
    $dataUltDoa = $updateDoadores->getDataUltimaDoacao();

    //Recebendo as infos da classe e colocando em variáveis
    //Usando as variáveis no value do sqlLog!
    $idLogin = $updateLogin->getIdLogin();
    $emailLog = $updateLogin->getUsrLogin();
    $senha = $updateLogin->getSenhaLogin();

    validaInputsImportantesCad($emailCad, $senha);
    
    if (atualizarUsuarioBD($conn, $idDoador, $idLogin, $nome, $sangue, $dataNascimento, $dataUltDoa, $cep, $bairro, $cidade, $uf, $emailCad, $emailLog, $senha)) {
        
        //Redireciona para a página de manutenção
        mostraMensagemRedireciona('Usuário atualizado com sucesso!', '../../pages/manutencaoCadastro.php');

    } else {
        
        echo "Erro: ".$sqlUpCad."<br>". $conn->error;
        echo "<br/>";
        echo "Erro: ".$sqlUpLog."<br>". $conn->error;
	    echo "<br/>";
	    echo "Não foi possível realizar o cadastro";
    }
    
    mysqli_close($conn);

?>