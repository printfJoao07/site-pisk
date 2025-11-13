let proximo = document.querySelector('#proximo')
let voltar = document.querySelector('#voltar')
let cont = document.querySelectorAll('.item-carrossel').length
let ativo = 0

voltar.onclick = () => {
    let exAtivo = document.querySelector('.ativo')
    
    exAtivo.classList.remove('ativo')

    ativo = ativo <= 0? cont - 1 : ativo - 1

    carrossel[ativo].classList.add('ativo')

}

proximo.onclick = () => {
    let exAtivo = document.querySelector('.ativo')
    
    exAtivo.classList.remove('ativo')

    ativo = ativo >= cont - 1? 0 : ativo + 1


    carrossel[ativo].classList.add('ativo')

}