const btnCard = document.querySelectorAll('.btn-card');
    btnCardOpen = document.querySelectorAll('.news-card-is-open');


for(let value of btnCard){
    value.addEventListener("click", ()=>{
    console.log(value.id)
        for(let value_2 of btnCardOpen){
            if(value_2.id == value.id){
                value_2.classlist.remove("display-none")
            }
        }
    })
}