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
          let row = `<tr class="hospital" id="seleciona">
            <td>${cadDoador.idDoador}</td>
            <td class="infoNome">${cadDoador.nomeDoador}</td>
            <td>${cadDoador.tipoSanguineoDoador}</td>
            <td>${cadDoador.dataNascimentoDoador}</td>
            <td>${cadDoador.cepDoador}</td>
            <td>${cadDoador.bairroDoador}</td>
            <td>${cadDoador.cidadeDoador}</td>
            <td>${cadDoador.ufdoador}</td>
            <td>${cadDoador.emailDoador}</td>
          </tr>`;
          tabela.innerHTML += row;
        }

        selecionaLinhaNaTabela();
      })
      .catch(error => {
        console.error('Erro ao buscar dados:', error);
        alert('Erro ao buscar dados: ' + error.message);
      });
};

document.addEventListener('DOMContentLoaded', preencheTabelaDoadores);
document.getElementById('preencherTabela').addEventListener('click', preencheTabelaDoadores);