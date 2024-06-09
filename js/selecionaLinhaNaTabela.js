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
        });
    });
}



// let selecionaLinhaNaTabela = document.querySelector("#tabelaHospitais")

// selecionaLinhaNaTabela.addEventListener("click", function (evento) {

//     console.log(evento.target.parentNode);
//     let alvoDoClique = evento.target;
//     let paiDoAlvo = alvoDoClique.parentNode;
//     console.log(paiDoAlvo);
//     console.log(paiDoAlvo.cells);
//     console.log(paiDoAlvo.cells[0].innerText);
// })
