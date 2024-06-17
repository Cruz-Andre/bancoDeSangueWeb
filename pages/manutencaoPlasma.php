<?php 
	session_start();
?>

<?php
  if (isset($_SESSION['nome_usu_sessao'])) {
    echo '
      <!DOCTYPE html>
      <html lang="pt-br">

      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/jpg" href="../img/logoBancoDeSangueNew.png">
        <link rel="stylesheet" type="text/css" href="../styles/header.css">
        <link rel="stylesheet" type="text/css" href="../styles/styleManutecao.css">
        <link rel="stylesheet" type="text/css" href="../styles/footer.css">
        <title>Banco de Sangue</title>
      </head>

      <body>

        <header>
          <nav class="navbar">
            <div class="imagemLogo">
              <img src="../img/logoBancoDeSangueNew.png" alt="logo Doação">
            </div>
            <h2 class="loginTitulo">Manutenção de Plasma</h2>
            <ul class="login">
              <li><a href="./logado.php">Voltar</a></li>
            </ul>
          </nav>
        </header>

        <main>
          <div class="sessao">
            <p>Olá '.$_SESSION['nome_usu_sessao'].'!</P>
            <p>Aqui você atualiza ou cadastra a quantidade de plasma por hospitas</p>
          </div>

          <section class="caixa">
            <h2>Quantidade de Bolsas de Plasma</h2>
            <label for="filtrarTabela">Filtre:</label>
            <input type="text" name="filtro" value="" id="filtrarTabela" placeholder="Digite o nome do hospital">
            <button id="preencherTabela" class="btoPreencherTabela">Preencher Tabela</button>
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Hospital</th>
                  <th>Quantidade de Plasma</th>
                </tr>
              </thead>
              <tbody id="tabelaHospitais">
                <tr class="hospital" id="seleciona">
                  <td class="infoCodigo">1</td>
                  <td class="infoNome">Santa Casa</td>
                  <td class="infoApos">1234</td>
                </tr>
              </tbody>
            </table>
            <!-- Adicione informações para outros hospitais aqui -->
          </section>

          <section class="caixa">
            <h2 id="tituloForm">Manutenção Plasmas</h2>
            <button id="preencherInputs" class="btoPreencherCampos" title="selecione um hospital na tabela e depois clique">Preencher Campos</button>
            <ul id="mensagensErro">
              <li></li>
            </ul>
            <form id="formPlasma" method="post">
              <div class="grupo1">
                <label for="idPlasma">#</label>
                <input id="idPlasma" name="idPlasma" type="number" readonly>
                
                <label for="nomeHosp">Nome do Hospital:</label>
                <input id="nomeHosp" name="nomeHosp" type="text" placeholder="Digite o nome do Hospital" required >
              </div>

              <div class="grupo2">
                <div class="qtdPlasma">
                  <label for="plasma">Quantidade de Plasma</label>
                  <input id="plasma" name="plasma" type="number" title="Digite a quantidade de plasma" required >
                </div>

              </div>
              <div class="botoes">
                <button id="atualizarHosp" name="action" value="atualizar" title="Atualiza os dados do hospital selecionado">Atualizar</button>
                <button id="cadastrarHosp" name="action" value="cadastrar" title="Cadastra um novo Hospital com a quantidade de plasma">Cadastrar</button>
              </div>
            </form>
          </section>
        </main>

        <!-- Rodapé -->
        <footer>
          <p class="rodape__texto">&copy; André Cruz - 2023 / <span id="ano"></span> - Banco de Sangue</p>
        </footer>

        <script src="../js/preencheTabelaPlasma.js"></script>
        <script src="../js/manipulaBotoesPS.js"></script>
        <script src="../js/selecionaLinhaNaTabela.js"></script>
        <script src="../js/preencheInputsPS.js"></script>

        <script type="module" src="../js/filtraHospital.js"></script>
        <script type="module" src="../js/ano.js"></script>
      </body>

      </html>
    ';
  } else {

    include('./avisoLogin.html');

  }

  if (isset($_GET['logout'])) {

    session_destroy();
    header("Location: ./login.html");

  }
?>