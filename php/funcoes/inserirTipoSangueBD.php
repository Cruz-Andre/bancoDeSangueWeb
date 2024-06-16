<?php
    // Função para inserir o usuário no banco de dados
    function inserirTipoSangueBD($conn, $NomeHosp, $Amais, $Amenos, $Bmais, $Bmenos, $ABmais, $ABmenos, $Omais, $Omenos) {

        mysqli_begin_transaction($conn);

        try {
            //INSERT
            $sqlTS = "
                INSERT INTO tipoSanguineo(
                nomeHospital, aPos, aNeg, bPos, bNeg, abPos, abNeg, oPos, oNeg) 
                VALUES ('$NomeHosp', '$Amais', '$Amenos', '$Bmais', '$Bmenos', '$ABmais', '$ABmenos', '$Omais', '$Omenos')
            ";
            if (!mysqli_query($conn, $sqlTS)) {
                throw new Exception("Erro ao cadastrar: ".mysqli_error($conn));
            }

            // Se tudo estiver bem, confirma a transação
            mysqli_commit($conn);
            return true;

        } catch (Exception $e) {
            // Em caso de erro, desfaz a transação
            mysqli_rollback($conn);
            return false;

        } finally {
            // Fecha a conexão com o banco de dados
            mysqli_close($conn);
        }
    }
?>