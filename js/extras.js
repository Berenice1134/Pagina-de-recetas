(function(){
    const titleExtras =[...document.querySelectorAll('.extras__title')];

    titleExtras.forEach(question =>{
        question.addEventListener('click', ()=>{
            let height=0;
            let answer = question.nextElementSibling;
            let addPadding = question.parentElement.parentElement;

            addPadding.classList.toggle('extras__padding--add');

            question.children[0].classList.toggle('extras__flecha--rotate');

            if(answer.clientHeight == 0){
                height = answer.scrollHeight;
            }
            answer.style.height=`${height}px`;
        })
    })
})();