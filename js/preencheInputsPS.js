document.addEventListener("DOMContentLoaded", function() {
    selecionaLinhaNaTabela();

    document.getElementById("preencherInputs").addEventListener("click", function() {
        preencherCampos();
    });
});


function preencherCampos() {
    let linhaSelecionada = document.querySelector("#tabelaHospitais tr.selecionado");
    console.log(linhaSelecionada)

    if (linhaSelecionada) {
        let cells = linhaSelecionada.cells;
        document.getElementById("idPlasma").value = cells[0].innerText;
        document.getElementById("nomeHosp").value = cells[1].innerText;
        document.getElementById("plasma").value = cells[2].innerText;

    } else {
        alert("Selecione uma linha na tabela!");
    }
}