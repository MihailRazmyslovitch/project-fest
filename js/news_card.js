const btnCard = document.querySelectorAll('.btn-card');
    btnCardOpen = document.querySelectorAll('.news-card-is-open');
    sectionThird = document.querySelector('.section-third-index');
    sectionFourth = document.querySelector('.section-fourth-index');
    footer = document.querySelector('.footer-index');


for(let value of btnCard){
    value.addEventListener("click", ()=>{
        for(let value2 of btnCardOpen){
            console.log(value2.id)
            console.log(value.id)
            sectionThird.classList.add("display-none")
            sectionFourth.classList.add("display-none")
            footer.classList.add("display-none")
            value2.classList.remove("display-none")
        }
    })
}