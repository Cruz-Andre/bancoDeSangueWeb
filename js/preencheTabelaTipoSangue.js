function preencheTabelaTS() {

    fetch('http://localhost/inf4n221/bancoDeSangueWeb/php/selectBD/buscaTipoSangue.php')
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
            <td>${hospital.idHosp}</td>
            <td class="infoNome">${hospital.nomeHospital}</td>
            <td>${hospital.aPos}</td>
            <td>${hospital.aNeg}</td>
            <td>${hospital.bPos}</td>
            <td>${hospital.bNeg}</td>
            <td>${hospital.abPos}</td>
            <td>${hospital.abNeg}</td>
            <td>${hospital.oPos}</td>
            <td>${hospital.oNeg}</td>
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

document.addEventListener('DOMContentLoaded', preencheTabelaTS);
document.getElementById('preencherTabela').addEventListener('click', preencheTabelaTS);