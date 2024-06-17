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
        document.getElementById("idDoador").value = cells[0].innerText;
        document.getElementById("nomeDoador").value = cells[1].innerText;
        document.getElementById("tipoSanguineoDoador").value = cells[2].innerText;
        document.getElementById("dataNascimentoDoador").value = formataData(cells[3].innerText);
        document.getElementById("dataUltimaDoacao").value = formataData(cells[4].innerText);
        document.getElementById("cepDoador").value = cells[5].innerText;
        document.getElementById("bairroDoador").value = cells[6].innerText;
        document.getElementById("cidadeDoador").value = cells[7].innerText;
        document.getElementById("ufdoador").value = cells[8].innerText;
        document.getElementById("emailDoador").value = cells[9].innerText;
        document.getElementById("senhaLogin").value = cells[10].innerText;
        
    } else {
        alert("Selecione uma linha na tabela!");
    }
}

function formataData(data) {
    console.log(data)
    let parteData = data.split("/");
    console.log(parteData)
    if (parteData.length === 3) {
        let dia = parteData[0];
        let mes = parteData[1];
        let ano = parteData[2];
        return `${ano}-${mes}-${dia}`
    } else {
        return alert('data não está no formato correto!') // Retorna uma string vazia se a data não estiver no formato esperado
    }
}