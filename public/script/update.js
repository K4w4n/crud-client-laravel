//Selecionando elementos DOM
const elSubmit = document.querySelector('.submit');
const elForm = document.querySelector('form');

//Cancelando envio de formulario com o submit 
elSubmit.addEventListener('click', (e) => e.preventDefault());

//Cancelando envio de formulario com a tecla Enter 
elForm.addEventListener('keydown', (e) => {
    if(e.key == "Enter") e.preventDefault();
});