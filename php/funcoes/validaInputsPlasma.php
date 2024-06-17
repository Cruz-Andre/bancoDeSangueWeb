<?php 
    include_once('mostraMensagemRedireciona.php');

    // Função para validar os campos
    function validaInputsPlasma($NomeHosp, $plasma) {
        //Verifica se os campos estão vazios        
        if (empty($NomeHosp) && $NomeHosp == "") {
            mostraMensagemRedireciona('O campo Nome do Hospital deve ser preenchido!', '../../pages/manutencaoPlasma.php');
        }

        if (empty($plasma) && $plasma == "") {
            mostraMensagemRedireciona('O campo Plasma deve ser preenchido!', '../../pages/manutencaoPlasma.php');
        }
    }
?>