<?php 
    include_once('mostraMensagemRedireciona.php');

    // Função para validar os campos
    function validaInputsTipoSangue($NomeHosp, $Amais, $Amenos, $Bmais, $Bmenos, $ABmais, $ABmenos, $Omais, $Omenos) {
    
        //Verifica se os campos estão vazios        
        if (empty($NomeHosp) && $NomeHosp == "") {
            mostraMensagemRedireciona('O campo Nome do Hospital deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.php');
        }

        if (empty($Amais) && $Amais == "") {
            mostraMensagemRedireciona('O campo Sangue A+ deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.php');
        }
        
        if (empty($Amenos) && $Amais == "") {
            mostraMensagemRedireciona('O campo Sangue A- deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.php');
        }
        
        if (empty($Bmais) && $Amais == "") {
            mostraMensagemRedireciona('O campo Sangue B+ deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.php');
        }

        if (empty($Bmenos) && $Amais == "") {
            mostraMensagemRedireciona('O campo Sangue B- deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.php');
        }

        if (empty($ABmais) && $Amais == "") {
            mostraMensagemRedireciona('O campo Sangue AB+ deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.php');
        }

        if (empty($ABmenos) && $Amais == "") {
            mostraMensagemRedireciona('O campo Sangue AB- deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.php');
        }

        if (empty($Omais) && $Amais == "") {
            mostraMensagemRedireciona('O campo Sangue O+ deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.php');
        }

        if (empty($Omenos) && $Amais == "") {
            mostraMensagemRedireciona('O campo Sangue O- deve ser preenchido!', '../../pages/manutencaoTipoSanguineo.php');
        }
    }
?>