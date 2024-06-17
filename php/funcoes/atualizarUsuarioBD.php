<?php
    // Função para inserir o usuário no banco de dados
    function atualizarUsuarioBD($conn, $idCad, $idLog, $nome, $sangue, $dataN, $dataU, $cep, $bairro, $cidade, $uf, $emailCad, $emailLog, $senha) {

        mysqli_begin_transaction($conn);

        try {
            // Primeira consulta UPDATE
            $sqlUpCad = "
                update cadDoador set 
                nomeDoador = '$nome', 
                tipoSanguineoDoador = '$sangue',
                dataNascimentoDoador = '$dataN',
                cepDoador = '$cep',
                bairroDoador = '$bairro',
                cidadeDoador = '$cidade',
                ufdoador = '$uf',
                emailDoador = '$emailCad',
                dataUltimaDoacao = '$dataU' where idDoador = '$idCad'
            ";
            // Executa a consulta
            if (!mysqli_query($conn, $sqlUpCad)) {
                throw new Exception("Erro ao cadastrar: ".mysqli_error($conn));
            }

            // Segunda consulta UPDATE
            $sqlUpLog = "
                update login set 
                usrLogin = '$emailLog',
                senhaLogin = '$senha' where idLogin = '$idLog'
            ;";
            // Executa a consulta
            if (!mysqli_query($conn, $sqlUpLog)) {
                throw new Exception("Erro ao cadastrar: " . mysqli_error($conn));
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