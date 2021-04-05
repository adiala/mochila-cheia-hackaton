const mobMenu = document.querySelector('#btnHamburguer');
const body = document.querySelector('body');
const header = document.querySelector('.header');
const overlay = document.querySelector('.overlay');
const fadeElems = document.querySelectorAll('.has-fade');

mobMenu.addEventListener('click', function(){

    if (header.classList.contains('open')) { // Close Menu
        body.classList.remove('no-scroll');
        header.classList.remove('open');        
        fadeElems.forEach(function(element){
            element.classList.remove('fade-in');
            element.classList.add('fade-out');
        });
        
    } 
    else { // Open Menu
        body.classList.add('no-scroll');
        header.classList.add('open');
        fadeElems.forEach(function(element){
            element.classList.remove('fade-out');
            element.classList.add('fade-in');
        });
        
    }
});

var Valor = 0;

function updateLabel() {
  var totalLabel = document.querySelectorAll('.total');
  for(let i = 0; i < totalLabel.length; i++){
    totalLabel[i].innerHTML = Valor;
  }
  
}

function handleClick(checkbox) {
  if (checkbox.checked) {
    Valor += parseFloat(checkbox.value);
    updateLabel();
    return;
  }

  Valor -= parseFloat(checkbox.value);
  updateLabel();
}