var linhas = document.querySelectorAll("#tabelaHospitais tr");

linhas.forEach(function (linha) {
    linha.addEventListener("click", function () {
        // Remover a classe de todas as linhas
        linhas.forEach(function (outraLinha) {
            outraLinha.classList.remove("selecionado");
        });

        // Adicionar a classe apenas à linha clicada
        linha.classList.add("selecionado");
    });
});




var selecionaLinhaNaTabela = document.querySelector("#tabelaHospitais")

selecionaLinhaNaTabela.addEventListener("click", function (clique) {
    console.log(clique.target);
    var alvoDoClique = clique.target;
    var paiDoAlvo = alvoDoClique.parentNode;
    console.log(paiDoAlvo);
    console.log(paiDoAlvo.cells);
    console.log(paiDoAlvo.cells[0].innerText);
})


