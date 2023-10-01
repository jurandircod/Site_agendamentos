// Obtém o container dos cards e o botão de adicionar
var cardContainer = document.getElementById("card-container");
var addCardButton = document.getElementById("add-card-button");

// Adiciona um evento de clique ao botão de adicionar
addCardButton.addEventListener("click", function() {
  // Cria um novo elemento de card
  var newCard = document.createElement("div");
  newCard.className = "card";
  // Personalize o novo card conforme necessário

  // Adicione o novo card ao container
  cardContainer.appendChild(newCard);
});