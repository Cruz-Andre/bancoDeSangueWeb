<?php 
	session_start();
?>

<?php 
  if (isset($_SESSION['nome_usu_sessao'])) {

    // usar a \ para escapar as aspas simples
    echo '
      <!DOCTYPE html>
      <html lang="pt-br">

      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/jpg" href="../img/logoBancoDeSangueNew.png">
        <link rel="stylesheet" type="text/css" href="../styles/header.css">
        <link rel="stylesheet" type="text/css" href="../styles/styleIndex.css">
        <link rel="stylesheet" type="text/css" href="../styles/footer.css">
        <title>Banco de Sangue</title>
      </head>

      <body>

        <header>
          <nav class="navbar">
            <div class="imagemLogo">
              <img src="../img/logoBancoDeSangueNew.png" alt="logo Doação">
            </div>
            <h2 class="loginTitulo">Manutenção Banco de Sangue</h2>
            <ul class="login">
              <li><a href="./logado.php?logout">Sair</a></li>
            </ul>
          </nav>
        </header>
          
        <main>
          <div class="sessao">
            <p>Olá '.$_SESSION['nome_usu_sessao'].'! Seja bem vindo!</p>
            <p>Clique nos botões abaixo para cadastrar ou atualizar os dados:</p>
          </div>

          <div id="modal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="modal-img" alt="Imagem que pode doar para quem">
          </div>

          <div class="botoesMT">
            <a class="botaoMT" href="./manutencaoTipoSanguineo.php">Manutenção das bolsas de sangue</a>
            <a class="botaoMT" href="./manutencaoPlasma.php">Manutenção dos Plasmas</a>
            <a class="botaoMT" href="./manutencaoCadastro.php">Manutenção dos Doadores</a>
          </div>

          <section class="caixa">
            <div class="tituloModal">
              <h2>Quantidade de Bolsas de Sangue por Tipo Sanguíneo</h2>
              <button onclick="openModal(\'../img/tabelaDoacao.png\')">Quem pode doar para quem</button>
            </div>
            <label for="filtrarTabela">Filtre:</label>
            <input type="text" name="filtro" value="" id="filtrarTabela" placeholder="Digite o nome do hospital">
            <button id="preencherTabela" class="btoPreencherTabela">Preencher Tabela</button>
            <table>
              <thead>
                <tr>
                  <th rowspan="2">#</th>
                  <th rowspan="2">Hospital</th>
                  <th colspan="8">Tipo Sanguíneo</th>
                </tr>
                <tr>
                  <th>A+</th>
                  <th>A-</th>
                  <th>B+</th>
                  <th>B-</th>
                  <th>AB+</th>
                  <th>AB-</th>
                  <th>O+</th>
                  <th>O-</th>
                </tr>
              </thead>
              <tbody id="tabelaHospitais">
                <!-- Adicione informações para outros hospitais aqui -->
                
              </tbody>
            </table>
          </section>
        </main>

        <!-- Rodapé -->
        <footer>
          <p class="rodape__texto">&copy; André Cruz - 2023 / <span id="ano"></span> - Banco de Sangue</p>
        </footer>

        <script src="../js/modal.js"></script>
        <script src="../js/preencheTabelaTipoSangue.js"></script>
        <script src="../js/selecionaLinhaNaTabela.js"></script>
        <script src="../js/filtraHospital.js"></script>
        <script src="../js/ano.js"></script>

      </body>

      </html>
    ';

  } else {
    include('avisoLogin.html');
  }

  if (isset($_GET['logout'])) {

    session_destroy();
    header("Location: ./login.html");

  }
?>