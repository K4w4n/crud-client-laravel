const clientsContainer = document.querySelector('.clients-list');
$.ajax({
    url: '/api/select',
    method: 'get',
    data: {},
    processData: false,
    contentType: false,
    success: response => {
        if (response.status == 'success') {
            response.data.forEach(drawClient);
        }
    },
    error: () => {
        alert('Lamento, algo deu errado');
    }
});
const drawClient = (client) => {
    const sectionClient = document.createElement('section');
    sectionClient.setAttribute('class', 'border p-2 mb-2');

    for (const line in client) {
        client[line]

        const paragraph = document.createElement('p');
        const boldTitle = document.createElement('b');
        const spanContent = document.createElement('span');

        boldTitle.textContent = line[0].toUpperCase() + line.slice(1) + ': ';
        spanContent.textContent = client[line];

        paragraph.appendChild(boldTitle);
        paragraph.appendChild(spanContent);

        sectionClient.append(paragraph);
    }

    const btnDelete = document.createElement('input');

    btnDelete.setAttribute('type', 'button');
    btnDelete.setAttribute('value', 'Deletar');
    btnDelete.setAttribute('class', 'btn btn-danger');
    btnDelete.addEventListener('click', () => {
        $.ajax({
            url: '/api/delete?id=' + client.id,
            method: 'delete',
            success: response => {
                if (sectionClient.parentNode) {
                    sectionClient.parentNode.removeChild(sectionClient);
                }
            },
            error: err => {
                alert('Lamento, algo deu errado');
            }
        });
    });

    sectionClient.appendChild(btnDelete);
    clientsContainer.append(sectionClient);
}