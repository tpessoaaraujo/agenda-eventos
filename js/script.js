const novoEvento = document.getElementById('novoEvento')
const formNovoEvento = document.getElementById('formNovoEvento')

// Botões da aplicação
const btnNovoEvento = document.getElementById('btnNovoEvento')
const btnCancelarNovoEvento = document.getElementById('btnCancelarNovoEvento')

// Inputs da aplicação
const inputNomeEvento = document.getElementById('nomeEvento')
const inputDataEvento = document.getElementById('dataEvento')
const inputHoraInicio = document.getElementById('horaInicio')
const inputHoraTermino = document.getElementById('horaTermino')

// Tabela de eventos
const tabelaEventos = document.getElementById('tabelaEventos')
const listaEventos = []

// Atualizar a tabela de eventos
atualizarTabelaEventos = () => {
    if (listaEventos.length === 0) {
        tabelaEventos.innerHTML = '<tr><td colspan="5">Nenhum evento</td></tr>'
        return
    }
    tabelaEventos.innerHTML = ''

    for (i = 0; i < listaEventos.length; i++) {
        const evento = listaEventos[i]
        const linha = document.createElement('tr')
        const celulaData = document.createElement('td')
        const celulaInicio = document.createElement('td')
        const celulaTermino = document.createElement('td')
        const celulaNome = document.createElement('td')

        celulaData.innerText = evento.data
        celulaInicio.innerText = evento.inicio
        celulaTermino.innerText = evento.termino
        celulaNome.innerText = evento.nome

        const btnExcluir = document.createElement('button')
        btnExcluir.setAttribute('data-evento', i)
        btnExcluir.innerText = 'Remover'
        btnExcluir.classList.add('btn')
        btnExcluir.classList.add('btn-danger')
        btnExcluir.addEventListener('click', removerEvento)

        linha.appendChild(celulaData)
        linha.appendChild(celulaInicio)
        linha.appendChild(celulaTermino)
        linha.appendChild(celulaNome)
        linha.appendChild(btnExcluir)

       tabelaEventos.appendChild(linha)
    }
}

// Criação de um novo evento
adicionarNovoEvento = () => {
    novoEvento.classList.remove('d-none')
}

btnNovoEvento.addEventListener('click', adicionarNovoEvento)

// Cancelar a criação de novo evento
limparNovoEvento = () => {
    inputNomeEvento.value = ''
    inputDataEvento.value = ''
    inputHoraInicio.value = ''
    inputHoraTermino.value = ''
}

cancelarNovoEvento = () => {
    novoEvento.classList.add('d-none')
    limparNovoEvento()
    inputDataEvento.classList.remove('is-invalid')
}

btnCancelarNovoEvento.addEventListener('click', cancelarNovoEvento)

// Verificar se o novo evento é válido
novoEventoValido = (dataEvento, horaInicio, horaTermino) => {
    eventoValido = true

    const timestampEvento = Date.parse(dataEvento)
    const timestampAtual = new Date()

    if (isNaN(timestampEvento) || timestampEvento < timestampAtual) {
        inputDataEvento.classList.add('is-invalid')
        eventoValido = false
    } else {
        inputDataEvento.classList.remove('is-invalid')
    }

    if (horaInicio > horaTermino) {
        inputHoraInicio.classList.add('is-invalid')
        inputHoraTermino.classList.add('is-invalid')
        eventoValido = false
    } else {
        inputHoraInicio.classList.remove('is-invalid')
        inputHoraTermino.classList.remove('is-invalid')
    }

    return eventoValido
}

// Salvar o novo evento
salvarNovoEvento = (event) => {
    event.preventDefault()
    
    const nomeEvento = inputNomeEvento.value
    const dataEvento = new Date(inputDataEvento.value)
    const dataEventoBr = ((dataEvento.getDate() + 1)) + "/" + ((dataEvento.getMonth() + 1)) + "/" + dataEvento.getFullYear()
    const horaInicio = inputHoraInicio.value
    const horaTermino = inputHoraTermino.value

    if (novoEventoValido (dataEvento, horaInicio, horaTermino, nomeEvento)) {
        listaEventos.push({
            data: dataEventoBr,
            inicio: horaInicio,
            termino: horaTermino,
            nome: nomeEvento
        })
        atualizarTabelaEventos()
        cancelarNovoEvento()
        return
    }
}

formNovoEvento.addEventListener('submit', salvarNovoEvento)

// Excluir um evento criado
removerEvento = (event) => {
    const i = event.target.getAttribute('data-evento')
    listaEventos.splice(i, 1)
    atualizarTabelaEventos()
}

window.addEventListener('load', atualizarTabelaEventos)