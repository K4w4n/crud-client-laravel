//Selecionando elementos DOM
const elForm = document.querySelector('form');
const elSubmit = elForm.querySelector('.submit');
const elName = elForm.querySelector('#name');
const elTelefone = elForm.querySelector('#telefone');
const elEmail = elForm.querySelector('#email');

//Cancelando envio de formulario com o submit 
elSubmit.addEventListener('click', (e) => {
    e.preventDefault();
    const nome = elName.value;
    const telefone = elTelefone.value;
    const email = elEmail.value;

    if (!(nome && telefone && email)) {
        alert('Preencha todos os campos');
        return
    }

    $.ajax({
        url: '/api/create',
        method: 'post',
        data: { nome, telefone, email },
        success: response => {
            console.log(response);
        }
    });
});

//Cancelando envio de formulario com a tecla Enter 
elForm.addEventListener('keydown', (e) => {
    if (e.key == "Enter") e.preventDefault();
});