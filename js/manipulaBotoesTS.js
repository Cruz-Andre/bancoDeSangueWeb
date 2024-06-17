
document.getElementById('formTS').addEventListener('submit', function(event) {
    var action = event.submitter.value; // Obter o valor do botão que foi clicado

    if (action === 'cadastrar') {
        this.action = '../php/insertBD/cadTipoSangue.php'; // URL para a ação de cadastro
    } else if (action === 'atualizar') {
        this.action = '../php/updateBD/atualizaTipoSangue.php'; // URL para a ação de atualizar
    }
});