const btnCard = document.querySelectorAll('.btn-card');
    btnCardOpen = document.querySelectorAll('.news-card-is-open');
    footer = document.querySelector('.footer-index');
    thirdSection = document.querySelector('.third-section');


for(let value of btnCard){
    value.addEventListener("click", ()=>{
        for(let value2 of btnCardOpen){
            console.log(value2.id)
            console.log(value.id)
            footer.classList.add("display-none")
            thirdSection.classList.add("display-none")
            value2.classList.remove("display-none")
        }
    })
}