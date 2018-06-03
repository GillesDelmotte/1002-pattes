require('./scss/main.scss')

document.addEventListener('click', (e)=>{

    const buttonDon = document.querySelector('.don')
    const exitDon = document.querySelector('.exitDon')
    const exitCross = document.querySelector('.fa-times')
    const divDon = document.querySelector('.head__don')

    if(e.target === buttonDon){
        if(divDon.style.display === 'block'){
            divDon.style.display = 'none'
        }else{
            divDon.style.display = 'block'
        }
    }

    if(e.target === exitDon || e.target === exitCross){
        divDon.style.display = 'none'
    }
})