//Selecionando elementos DOM
const elForm = document.querySelector('form');
const elSubmit = elForm.querySelector('.submit');
const seachBtn = document.querySelector('.seach-btn');
const elId = elForm.querySelector('#id');
const elName = elForm.querySelector('#name');
const elTelefone = elForm.querySelector('#telefone');
const elEmail = elForm.querySelector('#email');

seachBtn.addEventListener('click', () => {
    const id = elId.value;

    if (isNaN(id)) {
        alert('O valor de id precisa ser um numero');
    } else {
        $.ajax({
            url: '/api/find',
            method: 'get',
            data: { id },
            success: response => {
                if (response.status == 'success') {
                    elName.value = response.data.nome
                    elTelefone.value = response.data.telefone
                    elEmail.value = response.data.email
                } else alert(response.message);
            },
            error: err => {
                alert('Lamento, algo deu errado');
            }
        });
    }
});
//Cancelando envio de formulario com o submit 
elSubmit.addEventListener('click', (e) => {
    e.preventDefault();

    const id = elId.value;
    const nome = elName.value;
    const telefone = elTelefone.value;
    const email = elEmail.value;

    if (!(nome && telefone && email && !isNaN(id))) {
        alert('Preencha todos os campos');
        return
    }

    $.ajax({
        url: '/api/update',
        method: 'post',
        data: { nome, telefone, email, id },
        success: response => {
            if (response.status == 'success') {
                alert('Cliente atualizado');
                window.location.assign('/')

            } else if (response.status == 'failed') {
                alert(response.message)
            }
        }
    });

});

//Cancelando envio de formulario com a tecla Enter 
elForm.addEventListener('keydown', (e) => {
    if (e.key == "Enter") e.preventDefault();
});

