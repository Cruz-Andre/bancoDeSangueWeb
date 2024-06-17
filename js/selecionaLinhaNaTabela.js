function selecionaLinhaNaTabela() {

    let linhas = document.querySelectorAll("#tabelaHospitais tr");
    linhas.forEach(function (linha) {
        linha.addEventListener("click", function () {
            // Remover a classe de todas as linhas
            linhas.forEach(function (outraLinha) {
                outraLinha.classList.remove("selecionado");
            });

            // Adicionar a classe apenas à linha clicada
            linha.classList.add("selecionado");

            console.log(linha)
            console.log(linha.cells)
            console.log(linha.cells.length)
            console.log(linha.cells[0].innerText)
        });
    });
}
