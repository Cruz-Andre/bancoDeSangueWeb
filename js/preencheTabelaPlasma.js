function preencheTabelaPS() {

    fetch('http://localhost/inf4n221/bancoDeSangueWeb/php/selectBD/buscaPlasma.php')
      .then(response => response.json())
      .then(data => {
        if (data.error) {
            console.error('Erro: ' + data.error);
            alert('Erro: ' + data.error);
            return;
        }
        let tabela = document.getElementById('tabelaHospitais');
        tabela.innerHTML = '';
        data.forEach(hospital => {
          let row = `<tr class="hospital" id="seleciona">
            <td>${hospital.idPlasma}</td>
            <td class="infoNome">${hospital.nomeHospital}</td>
            <td>${hospital.plasma}</td>
          </tr>`;
          tabela.innerHTML += row;
        });

        selecionaLinhaNaTabela();
      })
      .catch(error => {
        console.error('Erro ao buscar dados:', error);
        alert('Erro ao buscar dados: ' + error.message);
      });
};

document.addEventListener('DOMContentLoaded', preencheTabelaPS);
document.getElementById('preencherTabela').addEventListener('click', preencheTabelaPS);