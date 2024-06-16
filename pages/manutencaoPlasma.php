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

                <tr class="hospital" id="seleciona">
                  <td class="infoCodigo">2</td>
                  <td class="infoNome">Mãe de Deus</td>
                  <td class="infoApos">5678</td>
                </tr>

                <tr class="hospital" id="seleciona">
                  <td class="infoCodigo">3</td>
                  <td class="infoNome">Pronto Socorro</td>
                  <td class="infoApos">9012</td>
                </tr>
              </tbody>
            </table>
            <!-- Adicione informações para outros hospitais aqui -->
          </section>

          <section class="caixa">
            <h2 id="tituloForm">Manutenção Plasmas</h2>
            <button id="preencherHosp" class="btoPreencherCampos" title="selecione um hospital na tabela e depois clique">Preencher Campos</button>
            <ul id="mensagensErro">
              <li></li>
            </ul>
            <form id="formAdiciona">
              <div class="grupo1">
                <label for="nomeHosp">Nome do Hospital:</label>
                <input id="nomeHosp" name="nomeHosp" type="text" placeholder="Digite o nome do Hospital" class="campo">
              </div>

              <div class="grupo2">
                <div class="qtdPlasma">
                  <label for="plasma">Quantidade de Plasma</label>
                  <input id="plasma" name="plasma" type="number" class="campo campo-medio">
                </div>

              </div>
              <div class="botoes">
                <button id="atualizarHosp" title="Atualiza os dados do hospital selecionado">Atualizar</button>
                <button id="cadastrarHosp" title="Cadastra um novo Hospital com a quantidade de plasma">Cadastrar</button>
              </div>
            </form>
          </section>
        </main>

        <!-- Rodapé -->
        <footer>
          <p class="rodape__texto">&copy; André Cruz - 2023 / <span id="ano"></span> - Banco de Sangue</p>
        </footer>

        <script type="module" src="../js/ano.js"></script>
        <script type="module" src="../js/manutencaoHosp.js"></script>
        <script type="module" src="../js/filtraHospital.js"></script>
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