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
        document.getElementById("idHosp").value = cells[0].innerText;
        document.getElementById("nomeHosp").value = cells[1].innerText;
        document.getElementById("Amais").value = cells[2].innerText;
        document.getElementById("Amenos").value = cells[3].innerText;
        document.getElementById("Bmais").value = cells[4].innerText;
        document.getElementById("Bmenos").value = cells[5].innerText;
        document.getElementById("ABmais").value = cells[6].innerText;
        document.getElementById("ABmenos").value = cells[7].innerText;
        document.getElementById("Omais").value = cells[8].innerText;
        document.getElementById("Omenos").value = cells[9].innerText;
        
    } else {
        alert("Selecione uma linha na tabela!");
    }
}