<?php 
    include_once('mostraMensagemRedireciona.php');

    // Função para validar os campos
    function validaInputsTipoSangue($NomeHosp, $Amais, $Amenos, $Bmais, $Bmenos, $ABmais, $ABmenos, $Omais, $Omenos) {
        //Verifica se os campos estão vazios        
        if (empty($NomeHosp)) {
            mostraMensagemRedireciona('O campo Nome do Hospital deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.html');
        }

        if (empty($Amais)) {
            mostraMensagemRedireciona('O campo Sangue A+ deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.html');
        }
        
        if (empty($Amenos)) {
            mostraMensagemRedireciona('O campo Sangue A- deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.html');
        }
        
        if (empty($Bmais)) {
            mostraMensagemRedireciona('O campo Sangue B+ deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.html');
        }

        if (empty($Bmenos)) {
            mostraMensagemRedireciona('O campo Sangue B- deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.html');
        }

        if (empty($ABmais)) {
            mostraMensagemRedireciona('O campo Sangue AB+ deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.html');
        }

        if (empty($ABmenos)) {
            mostraMensagemRedireciona('O campo Sangue AB- deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.html');
        }

        if (empty($Omais)) {
            mostraMensagemRedireciona('O campo Sangue O+ deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.html');
        }

        if (empty($Omenos)) {
            mostraMensagemRedireciona('O campo Sangue O- deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.html');
        }
    }
?>