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
            <h2 class="loginTitulo">Manutenção de Tipo Sanguíneo</h2>
            <ul class="login">
              <li><a href="./logado.php">Voltar</a></li>
            </ul>
          </nav>
        </header>

        <main>
          <div class="sessao">
            <p>Olá '.$_SESSION['nome_usu_sessao'].'!</P>
            <p>Aqui você atualiza ou cadastra a quantidade bolsas de sangue por hospitas</p>
          </div>

          <section class="caixa">
            <h2>Quantidade de Bolsas de Sangue por Tipo Sanguíneo</h2>
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
                <tr class="hospital" id="seleciona">
                  <td class="infoCodigo">1</td>
                  <td class="infoNome">Santa Casa</td>
                  <td class="infoApos">1234</td>
                  <td class="infoAneg">5678</td>
                  <td class="infoBpos">9012</td>
                  <td class="infoBneg">1005</td>
                  <td class="infoABpos">2006</td>
                  <td class="infoABneg">3007</td>
                  <td class="infoOpos">4008</td>
                  <td class="infoOneg">5009</td>
                </tr>
              </tbody>
            </table>
          </section>
          
          <section class="caixa">
            <h2 id="tituloForm">Manutenção dos Tipos Sanguíneos</h2>
            <button id="preencherInputs" class="btoPreencherCampos" title="selecione um hospital na tabela e depois clique">Preencher Campos</button>
            <ul id="mensagensErro">
              <li></li>
            </ul>
            <form id="formTS" method="post">
              <div class="grupo1">
                <label for="idHosp">#</label>
                <input id="idHosp" name="idHosp" type="number" readonly required>

                <label for="nomeHosp">Nome do Hospital:</label>
                <input id="nomeHosp" name="nomeHosp" type="text" placeholder="Digite o nome do Hospital" required>
              </div>
              <div class="grupo2">
                <div class="sangueA">
                  <label for="Amais">Sangue A+</label>
                  <input id="Amais" name="Amais" type="number" required>
                
                  <label for="Amenos">Sangue A-</label>
                  <input id="Amenos" name="Amenos" type="number" required>
                </div>
              
                <div class="sangueB">
                  <label for="Bmais">Sangue B+</label>
                  <input id="Bmais" name="Bmais" type="number" required>
                  
                  <label for="Bmenos">Sangue B-</label>
                  <input id="Bmenos" name="Bmenos" type="number" required>
                </div>
              
                <div class="sangueAB">
                  <label for="ABmais">Sangue AB+</label>
                  <input id="ABmais" name="ABmais" type="number" required>
                
                
                  <label for="ABmenos">Sangue AB-</label>
                  <input id="ABmenos" name="ABmenos" type="number" required>
                </div>
              
                <div class="sangueO">
                  <label for="Omais">Sangue O+</label>
                  <input id="Omais" name="Omais" type="number" required>
                
                  <label for="Omenos">Sangue O-</label>
                  <input id="Omenos" name="Omenos" type="number" required>
                </div>
              </div>

              <div class="botoes">
                <button id="atualizarHosp" title="Atualiza os dados do hospital selecionado" name="action" value="atualizar">Atualizar</button>
                <button id="cadastrarHosp" title="Cadastra um novo Hospital com os tipos sanguíneos" name="action" value="cadastrar">Cadastrar</button>
              </div>
            </form>
          </section>
        </main>

        <!-- Rodapé -->
        <footer>
          <p class="rodape__texto">&copy; André Cruz - 2023 / <span id="ano"></span> - Banco de Sangue</p>
        </footer>


        <script src="../js/preencheTabelaTipoSangue.js"></script>
        <script src="../js/manipulaBotoesTS.js"></script>
        <script src="../js/selecionaLinhaNaTabela.js"></script>
        <script src="../js/preencheInputsTS.js"></script>
        <script src="../js/filtraHospital.js"></script>
        <script src="../js/ano.js"></script>
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