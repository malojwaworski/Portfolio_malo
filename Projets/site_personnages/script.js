const paysElement = document.querySelector('.pays');

function showPays() {
  paysElement.style.transform = 'rotateY(0)';
  paysElement.style.transition = 'transform 1s';
  paysElement.style.opacity = '1';
}

function hidePays() {
  paysElement.style.transform = 'rotateY(180deg)';
  paysElement.style.transition = 'transform 1s';
  paysElement.style.opacity = '1';
}

paysElement.addEventListener('mouseover', showPays);

paysElement.addEventListener('mouseout', hidePays);

// Appeler la fonction pour afficher le pays au chargement de la page
window.addEventListener('load', showPays);

document.addEventListener('DOMContentLoaded', function() {
  var productContainer = document.querySelector('.product-container');
  productContainer.classList.add('visible');
});

window.addEventListener('load', function() {
  var productDescription = document.querySelector('.product-description');
  productDescription.classList.add('visible');

});
