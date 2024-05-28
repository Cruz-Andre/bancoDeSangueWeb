<?php 
    include('cadastro.class.php');
    include('login.class.php');

    $classeCadastro = new Cadastro();
    $classeLogin = new Login();

    $classeCadastro->setNomeDoador($_POST['nomeDoador']);
    $classeCadastro->setTipoSanguineoDoador($_POST['tipoSanguineoDoador']);
    $classeCadastro->setDataNascimentoDoador($_POST['dataNascimentoDoador']);
    $classeCadastro->setCepDoador($_POST['cepDoador']);
    $classeCadastro->setBairroDoador($_POST['bairroDoador']);
    $classeCadastro->setCidadeDoador($_POST['cidadeDoador']);
    $classeCadastro->setUfdoador($_POST['ufdoador']);
    $classeCadastro->setEmailDoador($_POST['emailDoador']);

    $classeLogin->setSenhaLogin($_POST['senhaLogin']);
    
    echo $classeCadastro -> getNomeDoador(), "<br><br>"; 
    echo $classeCadastro -> getTipoSanguineoDoador(), "<br><br>"; 
    echo $classeCadastro -> getDataNascimentoDoador(), "<br><br>"; 
    echo $classeCadastro -> getCepDoador(), "<br><br>"; 
    echo $classeCadastro -> getEmailDoador(), "<br><br>";
    
    echo $classeLogin -> getSenhaLogin();

?>