// Obtém o modal
var modal = document.getElementById("modal");

// Obtém a imagem e a insere no modal
var img = document.getElementById("modal-img");
var modalImg = document.getElementsByClassName("modal-content")[0];

// Abre o modal e define a imagem a ser exibida
function openModal(imageUrl) {
  modal.style.display = "block";
  modalImg.src = imageUrl;
}

// Fecha o modal quando o usuário clica no botão "x" ou fora do modal
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
