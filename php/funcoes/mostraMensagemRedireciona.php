<?php 
    // Função para exibir mensagens de alerta e redirecionar
    function mostraMensagemRedireciona($message, $location) {
        echo "
            <script language='javascript' type='text/javascript'>
                alert('$message');
                window.location.href='$location';
            </script>
        ";
        exit();
    }
?>