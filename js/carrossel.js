let carrossel = document.querySelectorAll('.item-carrossel')
let proximo = document.querySelector('#proximo')
let voltar = document.querySelector('#voltar')
let cont = carrossel.length
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

// const myObserver = new IntersectionObserver( (entries) => {
//     entries.forEach((entry) => {
//         let lastScrollTop = 0
//         let wHeight = window.innerHeight

//         console.log(entry.isIntersecting)

//         if (entry.isIntersecting){
//             window.addEventListener('scroll', () => {
//                 let st = document.documentElement.scrollTop

//                 if(st > lastScrollTop){
//                     window.scroll(0, wHeight + 10)
//                     console.log(entry.isIntersecting)

//                 }else{
//                     window.scroll(0, - (st))
//                     console.log(entry.isIntersecting)

//                 }

//                 lastScrollTop = st
//             })
//         }
//     })
// })

// const carrosselBody = document.querySelector('#carrossel')

// myObserver.observe(carrosselBody)