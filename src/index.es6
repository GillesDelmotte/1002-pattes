require('./scss/main.scss')

document.addEventListener('click', (e)=>{


    console.log(e.target)
    const buttonDon = document.querySelector('.don')
    const exitDon = document.querySelector('.exitDon')
    const exitCrossDon = document.querySelector('.fa-times')
    const exitCrossEvent = document.querySelector('.cross')
    const divDon = document.querySelector('.head__don')
    const buttonEvent = document.querySelector('.event')
    const exitEvent = document.querySelector('.exitEvent')
    const divEvent = document.querySelector('.head__event')

    if(e.target === buttonDon){
        if(divDon.style.display === 'block'){
            divDon.style.display = 'none'
        }else{
            divDon.style.display = 'block'
            divEvent.style.display = 'none'
        }
    }

    if(e.target === exitDon || e.target === exitCrossDon){
        divDon.style.display = 'none'
    }

    if(e.target === buttonEvent){
        if(divEvent.style.display === 'block'){
            divEvent.style.display = 'none'
        }else{
            divEvent.style.display = 'block'
            divDon.style.display = 'none'

        }
    }

    if(e.target === exitEvent || e.target === exitCrossEvent){
        divEvent.style.display = 'none'
    }



})