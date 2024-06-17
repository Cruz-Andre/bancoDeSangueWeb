
document.getElementById('cadastroForm').addEventListener('submit', function(event) {
    var action = event.submitter.value; // Obter o valor do botão que foi clicado

    if (action === 'cadastrar') {
        this.action = '../php/insertBD/cadastroDoadores.php'; // URL para a ação de cadastro
    } else if (action === 'atualizar') {
        this.action = '../php/updateBD/atualizaDoadores.php'; // URL para a ação de atualizar
    }
});