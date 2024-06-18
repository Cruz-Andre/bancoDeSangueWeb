function preencheTabelaDoadores() {

  fetch('http://localhost/inf4n221/bancoDeSangueWeb/php/selectBD/buscaDoadores.php')
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        console.error('Erro: ' + data.error);
        alert('Erro: ' + data.error);
        return;
      }

      let tabela = document.getElementById('tabelaHospitais');
      tabela.innerHTML = '';
      let tamanhoTabela = Math.max(data.arrayD.length, data.arrayL.length);

      for (let i = 0; i < tamanhoTabela; i++) {
        let cadDoador = data.arrayD[i] || {};
        let logDoador = data.arrayL[i] || {};

        // Calcule se a última doação foi há mais de 90 dias
        let podeDoar = "Informação não disponível";
        if (cadDoador.dataUltimaDoacao) {
          const ultimaDoacao = new Date(parseDateBR(cadDoador.dataUltimaDoacao));
          const dataAtual = new Date();
          // diffTempo é a diferença em milissegundos entre a data atual e a data da última doação
          const diffTempo = Math.abs(dataAtual - ultimaDoacao);
          // Converte a diferença de milissegundos para dias
          // 1000 milissegundos em um segundo, 60 segundos em um minuto, 60 minutos em uma hora, 24 horas em um dia
          const diffDias = Math.ceil(diffTempo / (1000 * 60 * 60 * 24));
          podeDoar = diffDias > 90 ? "Sim" : "Ainda não";
        }

        let row = `<tr class="hospital" id="seleciona">
          <td>${cadDoador.idDoador}</td>
          <td class="infoNome">${cadDoador.nomeDoador}</td>
          <td>${cadDoador.tipoSanguineoDoador}</td>
          <td>${cadDoador.dataNascimentoDoador}</td>
          <td>${cadDoador.dataUltimaDoacao}</td>
          <td class="podeDoar">${podeDoar}</td>
          <td>${cadDoador.cepDoador}</td>
          <td>${cadDoador.bairroDoador}</td>
          <td>${cadDoador.cidadeDoador}</td>
          <td>${cadDoador.ufdoador}</td>
          <td>${cadDoador.emailDoador}</td>
        </tr>`;
        tabela.innerHTML += row;
      }

      selecionaLinhaNaTabela()
      applyConditionalStyling()
    })
    .catch(error => {
      console.error('Erro ao buscar dados:', error);
      alert('Erro ao buscar dados: ' + error.message);
    });
};

// Coloca a data no formato JS
function parseDateBR(dateString) {
  let parts = dateString.split('/');
  return new Date(parts[2], parts[1] - 1, parts[0]);
}


document.addEventListener('DOMContentLoaded', preencheTabelaDoadores);
document.getElementById('preencherTabela').addEventListener('click', preencheTabelaDoadores);

//
function applyConditionalStyling() {
  document.querySelectorAll('.podeDoar').forEach(function (div) {
    if (div.textContent === 'Sim') {
      div.style.color = 'rgb(155 6 2)';
      div.style.fontWeight = 'bold';
    }
  });
}