<?php
    // Função para inserir o usuário no banco de dados
    function inserirUsuarioBD($conn, $nome, $sangue, $data, $cep, $bairro, $cidade, $uf, $emailCad, $emailLog, $senha) {

        mysqli_begin_transaction($conn);

        try {
            // Primeira consulta INSERT
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
            if (!mysqli_query($conn, $sqlCad)) {
                throw new Exception("Erro ao cadastrar: ".mysqli_error($conn));
            }

            // Segunda consulta INSERT
            $sqlLog = "insert into login(usrLogin, senhaLogin) values ('$emailLog', '$senha');";
            if (!mysqli_query($conn, $sqlLog)) {
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