(function(){
    const sliders= [...document.querySelectorAll('.cursos__cuerpo')];
    const buttonNext = document.querySelector('#despues');
    const buttonBefore = document.querySelector('#antes');
    //console.log(sliders)
    let value;

    buttonNext.addEventListener('click', ()=>{
        changePosition(1);
    });

    buttonBefore.addEventListener('click', ()=>{
        changePosition(-1);
    });

    const changePosition = (add)=>{
        const currentCursos = document.querySelector('.cursos__cuerpo--show').dataset.id;
        value = Number(currentCursos);
        value+= add;

        sliders[Number(currentCursos)-1].classList.remove('cursos__cuerpo--show');
        if(value === sliders.length+1||value===0){
            value = value === 0 ? sliders.length : 1;
        }
            sliders[value-1].classList.add('cursos__cuerpo--show');

    }
})();