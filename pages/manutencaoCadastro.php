<?php 
  session_start(); 
?>

<?php
  if(isset($_SESSION['nome_usu_sessao'])){
    echo'
      <!DOCTYPE html>
      <html lang="pt-br">

      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/jpg" href="../img/logoBancoDeSangueNew.png">
        <link rel="stylesheet" type="text/css" href="../styles/header.css">
        <link rel="stylesheet" type="text/css" href="../styles/manutencaoCadastro.css">
        <link rel="stylesheet" type="text/css" href="../styles/footer.css">
        <title>Cadastrar</title>
      </head>

      <body>
        <header>
          <nav class="navbar">
            <div class="imagemLogo">
              <img src="../img/logoBancoDeSangueNew.png" alt="logo Doação">
            </div>
            <h2 class="loginTitulo">Manutenção Cadastro Doadores</h2>
            <ul class="login">
              <li><a href="./logado.php">Voltar</a></li>
            </ul>
          </nav>
        </header>

        <main>

          <div class="sessao">
            <p>Olá '.$_SESSION['nome_usu_sessao'].'!</P>
            <p>Aqui você atualiza ou cadastra os doadores</p>
          </div>

          <section class="caixa">
            <h2>Cadastro Doadores</h2>
            <label for="filtrarTabela" class="tituloFiltro">Filtre:</label>
            <input type="text" name="filtro" value="" id="filtrarTabela" placeholder="Digite o nome do doador">
            <button id="preencherTabela" class="btoPreencherTabela">Preencher Tabela</button>
            <div class="rolagem">
              <table>
                <thead class="cabecalhoFixo">
                  <tr>
                    <th colspan="10">Tabela Doadores</th>
                  </tr>
                  <tr>
                    <th rowspan="1">#</th>
                    <th rowspan="1">Nome Completo</th>
                    <th colspan="1">Tipo Sanguineo</th>
                    <th colspan="1">Data de Nascimento</th>
                    <th colspan="1">Última Doação</th>
                    <th colspan="1">CEP</th>
                    <th colspan="1">Bairro</th>
                    <th colspan="1">Cidade</th>
                    <th colspan="1">Estado</th>
                    <th colspan="1">E-mail/Login</th>
                  </tr>
                </thead>
                <tbody id="tabelaHospitais" class="rolagem">
                  <tr class="hospital" id="seleciona">
                    <td class="infoCodigo">1</td>
                    <td class="infoNome">Pafuncio</td>
                    <td class="infoApos">B+</td>
                    <td class="infoAneg">14/12/1970</td>
                    <td class="infoBpos">91123456</td>
                    <td class="infoBneg">Cristal</td>
                    <td class="infoABpos">Porto Alegre</td>
                    <td class="infoABneg">Rio Grande do Norte</td>
                    <td class="infoOpos">pafuncio@gmail.com</td>
                    <td class="infoOneg">123456789</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>

          <section class="formCaixaDiv1">
            <h2>Manutenção de Doadores</h2>
            <button id="preencherInputs" class="btoPreencherCampos" title="selecione um hospital na tabela e depois clique">Preencher Campos</button>
          
            <form id="cadastroForm" class="formCaixa" method="post">

              <div class="formCampos">
                <div class="formCamposDiv">

                  <div class="formCampoDivNome">
                    <label for="nomeDoador">Nome Completo</label>
                      <input
                        type="text" 
                        name="nomeDoador" 
                        id="nomeDoador" 
                        autocomplete="nomeDoador"
                        title="O nome não pode conter caracteres inválidos."
                        pattern="^[A-Za-zÀ-ÿ\s]+$"
                        required
                      >
                  </div>

                  <div class="formCampoDivTipo">
                    <label for="tipoSanguineoDoador">Tipo Sanguíneo</label>
                    <select name="tipoSanguineoDoador" id="tipoSanguineoDoador" required>
                      <option value="" selected disabled hidden>Selecione seu tipo sanguíneo</option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                      <option value="O+">O+</option>
                      <option value="O-">O-</option>
                    </select>
                  </div>

                  <div class="formCampoDivDataNasc">
                    <label for="dataNascimentoDoador">Data de Nascimento</label>
                      <input
                        type="date" 
                        name="dataNascimentoDoador" 
                        id="dataNascimentoDoador" 
                        autocomplete="dataNascimentoDoador"
                        required
                      >
                  </div>
                  
                  <div class="formCampoDivDataUltDoa">
                    <label for="dataUltimaDoacao">Data da última doação</label>
                      <input
                        type="date" 
                        name="dataUltimaDoacao" 
                        id="dataUltimaDoacao" 
                        autocomplete="dataUltimaDoacao"
                        required
                      >
                  </div>

                  <div class="formCampoDivCEP">
                    <label for="cepDoador">CEP</label>
                      <input
                        type="tel" 
                        name="cepDoador" 
                        id="cepDoador" 
                        autocomplete="cepDoador"
                        maxlength="8"
                        title="O cep deve ter 8 dígitos sem traço" 
                        pattern="[0-9]{8}"
                        required
                      >
                  </div>

                  <div class="formCampoDivBairro">
                    <label for="bairroDoador">Bairro</label>
                      <input
                        type="text" 
                        name="bairroDoador" 
                        id="bairroDoador" 
                        autocomplete="bairroDoador"
                        title="Apenas caracteres alfabéticos são permitidos" 
                        pattern="^[A-Za-zÀ-ÿ\s]+$"
                        required
                      >
                  </div>

                  <div class="formCampoDivCidade">
                    <label for="cidadeDoador">Cidade</label>
                      <input
                        type="text" 
                        name="cidadeDoador" 
                        id="cidadeDoador" 
                        autocomplete="cidadeDoador"
                        title="Apenas caracteres alfabéticos são permitidos" 
                        pattern="^[A-Za-zÀ-ÿ\s]+$"
                        required
                      >
                  </div>

                  <div class="formCampoDivUF">
                    <label for="ufdoador">Estado</label>
                      <input
                        type="text" 
                        name="ufdoador" 
                        id="ufdoador" 
                        autocomplete="ufdoador"
                        title="Apenas caracteres alfabéticos são permitidos" 
                        pattern="^[A-Za-zÀ-ÿ\s]+$"
                        required
                      >
                  </div>


                  <div class="formCampoDivEmail">
                    <label for="emailDoador">E-mail/Login</label>
                      <input
                      id="emailDoador" 
                      name="emailDoador" 
                      type="email" 
                      autocomplete="emailDoador"
                      placeholder="nome@dominio.com" 
                      title="O formato do e-mail deve ser: nome@dominio.com" 
                      pattern="[0-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
                      required
                      >
                  </div>

                  <div class="formCampoDivSenha">
                    <label for="senhaLogin">Senha</label>
                      <input
                        id="senhaLogin" 
                        name="senhaLogin" 
                        type="password" 
                        autocomplete="senhaLogin"
                        title="Ao atualizar a senha pode ser a mesma ou nova senha"
                        required
                      >
                  </div>

                  <div class="formCampoDivId">
                    <label for="idDoador">#</label>
                      <input
                        type="number" 
                        name="idDoador" 
                        id="idDoador" 
                        autocomplete="idDoador"
                        readonly
                        required
                      >
                  </div>

                </div>
              </div>

              <div class="formBotao">
                <button id="atualizarHosp" title="Atualiza os dados do doador selecionado" name="action" value="atualizar">Atualizar</button>
                <button id="cadastrarHosp" title="Cadastra um novo doador" name="action" value="cadastrar">Cadastrar</button>
              </div>
            </form>
          </section>
        </main>

        <!-- Rodapé -->
        <footer>
          <p class="rodape__texto">&copy; André Cruz - 2023 / <span id="ano"></span> - Banco de Sangue</p>
        </footer>

        <script src="../js/preencheTabelaDoadores.js"></script>
        <script src="../js/manipulaBotoesDoadores.js"></script>
        <script src="../js/selecionaLinhaNaTabela.js"></script>
        <script src="../js/preencheInputsDoadores.js"></script>
        <script src="../js/filtroDataNasc.js"></script>
        <script src="../js/filtraHospital.js"></script>
        <script src="../js/ano.js"></script>
      </body>

      </html>
    ';
  }
?>