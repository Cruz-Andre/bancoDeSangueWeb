<?php 
    include_once('mostraMensagemRedireciona.php');

    // Função para validar os campos
    function validaInputsImportantesCad($email, $senha) {
        if (empty($email)) {
            mostraMensagemRedireciona('O campo E-mail deve ser preenchido!', '../../pages/cadastro.html');
        }

        if (empty($senha)) {
            mostraMensagemRedireciona('O campo Senha deve ser preenchido!', '../../pages/cadastro.html');
        }
    }
?>