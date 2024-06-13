document.getElementById('cadastroForm').addEventListener('submit', function(event) {
    var dataNascimento = new Date(document.getElementById('dataNascimentoDoador').value);
    var dataAtual = new Date();
    var idadeMinima = new Date(dataAtual.getFullYear() - 18, dataAtual.getMonth(), dataAtual.getDate());

    if (dataNascimento > idadeMinima) {
      alert('Você deve ter pelo menos 18 anos para se cadastrar.');
      event.preventDefault();
    }
});