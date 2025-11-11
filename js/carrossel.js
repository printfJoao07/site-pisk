let carrossel = document.getElementsByClassName('item-carrossel')
let cont = carrossel.length
let ativo = 0

console.log(carrossel)

document.getElementById('voltar').addEventListener(() => {
    let exAtivo = document.querySelector('.ativo')
    
    exAtivo.classList.remove('ativo')

    if(ativo < cont - 1){
        ativo += 1
    
    }else{
        ativo = 0
    }

    carrossel[ativo].classList.add('ativo')

})

document.getElementById('proximo').addEventListener(() => {
    let exAtivo = document.querySelector('.ativo')
    
    exAtivo.classList.remove('ativo')

    if(ativo > 0){
        ativo -= 1
    
    }else{
        ativo = cont - 1
    }

    carrossel[ativo].classList.add('ativo')

})