var selecionaLinhaNaTabela = document.querySelector("#tabelaHospitais")

selecionaLinhaNaTabela.addEventListener("click", function(clique) {
    console.log(clique.target);
    var alvoDoClique = clique.target;
    var paiDoAlvo = alvoDoClique.parentNode;
    console.log(paiDoAlvo);
    console.log(paiDoAlvo.cells);
    console.log(paiDoAlvo.cells[0].innerText);
})