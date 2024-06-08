<?php 
  //Criar a conexão com o banco de dados

  $host = 'localhost'; //nome do servidor
  $user = 'root'; //nome do usuário do banco
  $senha = ''; //Senha do usuário do banco
  $banco = 'bdsangueweb'; //Nome do banco de dados (database)

  //criar conexão
  $conn = new mysqli($host, $user, $senha, $banco);

  if ($conn -> connect_error) {
    die("Falha na Conexão: ".$conn -> connect_error);
  }


?>