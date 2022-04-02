const clientsContainer = document.querySelector('.clients-list');
$.ajax({
    url: '/api/select',
    method: 'get',
    data: {},
    processData: false,
    contentType: false,
    success: response => {
        if(response.status == 'success' ){
            response.data.forEach(drawClient);
        }
    },
    error: err => {
        alert('Lamento, algo deu errado');
    }
});
const drawClient = (client) => {
    const sectionClient = document.createElement('section');
    sectionClient.setAttribute('class', 'border p-2 mb-2');
    
    for (const line in client) {
        client[line]

        const paragraph  = document.createElement('p');
        const boldTitle = document.createElement('b');
        const spanContent = document.createElement('span');

        boldTitle.textContent = line[0].toUpperCase() + line.slice(1) + ': ';
        spanContent.textContent = client[line];

        paragraph.appendChild(boldTitle);
        paragraph.appendChild(spanContent);

        sectionClient.append(paragraph);
    }

    clientsContainer.append(sectionClient);
}