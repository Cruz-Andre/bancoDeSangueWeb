document.addEventListener("DOMContentLoaded", function () {
    let inputFiltro = document.getElementById("filtrarTabela");
    
    inputFiltro.addEventListener("input", function () {
        
        // console.log(inputFiltro.value);

        let filtro = inputFiltro.value.toLowerCase();
        let hospitais = document.querySelectorAll(".hospital");

        hospitais.forEach(function (hospital) {
            let nomeHospital = hospital.querySelector(".infoNome").textContent.toLowerCase();

            if (nomeHospital.includes(filtro)) {
                hospital.style.display = "table-row";
            } else {
                hospital.style.display = "none";
            }
        });
    });
});
