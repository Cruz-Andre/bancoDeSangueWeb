
document.getElementById('formPlasma').addEventListener('submit', function(event) {
    var action = event.submitter.value; // Obter o valor do botão que foi clicado

    if (action === 'cadastrar') {
        this.action = '../php/insertBD/cadPlasma.php'; // URL para a ação de cadastro
    } else if (action === 'atualizar') {
        this.action = '../php/updateBD/atualizaPlasma.php'; // URL para a ação de atualizar
    }
});