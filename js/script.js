const btn_widget = document.querySelector('.btn-widget'),
    widget = document.querySelector('.widget'),
    day = document.querySelector('.widget__day'),
    day_2 = document.querySelector('.widget__day_2'),
    day_hovered = document.querySelector('.widget__day_is-hovered'),
    nav_img_arr = document.querySelector('.navigation__arrow'),
    nav_item_arr = document.querySelector('.navigation__item_arr'),
    nav_item_arr_desc = document.querySelector('.navigation__item_arr-desc');
    btn_img = document.querySelector('.btn__img'),
    btn = document.querySelector('.btn'),
    nav_items = document.querySelectorAll('.navigation__item'),
    date_1 = document.querySelector('.widget__date__date-1'),
    date_2 = document.querySelector('.widget__date__date-2'),
    nav_levl_2 = document.querySelector('.navigation__levl-2'),
    sub_title_img = document.querySelector('.sub-title__img'),
    sub_title = document.querySelector('.sub-title'),
    sub_title_2 = document.querySelector('.sub-title_2'),
    sub_title_img_2 = document.querySelector('.sub-title__img_2')
    galleryItem = document.querySelectorAll('.gallery__item')
    galleryItemHover = document.querySelectorAll('.gallery__item_is-hovered');

/* кнопка открывания виджета */
btn_widget.addEventListener("click", () => {
    widget.classList.toggle("widget__is-open")
    document.querySelector('.btn-widget_img').classList.toggle("transform-rotate-180")
    document.querySelector('.widget__line').classList.toggle("opasity-1")
    if(day.classList.contains("widget__day_is-selected") == true &&
    widget.classList.contains("widget__is-open") == true){
        date_1.classList.remove("display-none")
    }else if(day_2.classList.contains("widget__day_is-selected") == true &&
        widget.classList.contains("widget__is-open") == true){
        date_2.classList.remove("display-none")
    }else if(widget.classList.contains("widget__is-open") == false){
        date_1.classList.add("display-none")
        date_2.classList.add("display-none")
    }
})




/* наведение на програму фестиваля день 1 */
day.addEventListener("mouseover", ()=>{
    day.classList.add("widget__day_is-selected")
    day_2.classList.remove("widget__day_is-selected")
    day_hovered.style.transform = "translateY(0rem)"
})

/* клик на програму фестиваля день 1 */
day.addEventListener("click", ()=>{
    if(widget.classList.contains("widget__is-open") == true){
        date_1.classList.remove("display-none")
        date_2.classList.add("display-none")
    }else if(widget.classList.contains("widget__is-open") == false){
        date_1.classList.add("display-none")
        date_2.classList.add("display-none")
    }
})

/* наведение на програму фестиваля день 2 */
day_2.addEventListener("mouseover", ()=>{
    day_2.classList.add("widget__day_is-selected")
    day.classList.remove("widget__day_is-selected")
    day_hovered.style.transform = "translateY(8rem)"
})

/* клик на програму фестиваля день 2 */
day_2.addEventListener("click", ()=>{
    if(widget.classList.contains("widget__is-open") == true){
    date_2.classList.remove("display-none")
    date_1.classList.add("display-none")
    }else if(widget.classList.contains("widget__is-open") == false){
        date_1.classList.add("display-none")
        date_2.classList.add("display-none")
    }
})

/* наведение на эллемент нав меню со стрелочкой, функция ОТКРЫВАЕТ 2 уровень нав меню, окрашивает цвет текста, окрашивает стрелку и переваречивает ее */
nav_item_arr.addEventListener("mouseover", ()=>{
    nav_img_arr.src = "icons/arrow-orange.png"
    nav_img_arr.style.transform = "rotate(180deg) translateY(-0.2rem)"
    nav_item_arr_desc.classList.add("color-orange")
    nav_levl_2.classList.toggle("navigation__levl-2_is-open")
})

/* наведение на эллемент нав меню со стрелочкой, функция ЗАКРЫВАЕТ 2 уровень нав меню, окрашивает цвет текста, окрашивает стрелку и переваречивает ее */
nav_item_arr.addEventListener("mouseout", ()=>{
    nav_img_arr.src = "icons/arrow-black.png"
    nav_img_arr.style.transform = "rotate(0deg) translateY(0.2rem)"
    nav_item_arr_desc.classList.remove("color-orange")
    nav_levl_2.classList.toggle("navigation__levl-2_is-open")
})

/* наведение на эллементы нав меню 2 уровня */
nav_levl_2.addEventListener("mouseover", ()=>{
    nav_item_arr_desc.classList.add(".color-orange")
})

/* наведение на эллементы нав меню 2 уровня */
nav_levl_2.addEventListener("mouseout", ()=>{
    nav_item_arr_desc.classList.remove(".color-orange")
})

/* открашивание иконки загрузки при наведении */
btn.addEventListener("mouseover", ()=>{
    btn_img.src = "icons/btn-img-white.png"
})

/* открашивание иконки загрузки при наведении */
btn.addEventListener("mouseout", ()=>{
    btn_img.src = "icons/btn-img-black.png"
})

/* наведение на эллементы нав меню 2 уровня */
for(let value of nav_items){
    if(value.classList.contains("navigation__item_levl-2") == false){
    value.addEventListener("mouseover", ()=>{
        value.classList.add("navigation__link_is-hovered")
    })
    value.addEventListener("mouseout", ()=>{
        value.classList.remove("navigation__link_is-hovered")
    })
}
}

/* изменение цвета стрелки при наведении во 2 и 3 секции */
sub_title.addEventListener("mouseover", ()=>{
    sub_title_img.src = "/icons/arr-left-orange.png"
})

sub_title.addEventListener("mouseout", ()=>{
    sub_title_img.src = "/icons/arr-left.png"
})

sub_title_2.addEventListener("mouseover", ()=>{
    sub_title_img_2.src = "/icons/arr-left-orange.png"
})

sub_title_2.addEventListener("mouseout", ()=>{
    sub_title_img_2.src = "/icons/arr-left.png"
})


/* при наведении картинка галлереи блюрится */
for(let value of galleryItem){
        value.addEventListener("mouseover", ()=>{
            if(galleryItem[0] == galleryItemHover[0]){
                galleryItemHover[0].classList.remove("display-none")
            }
            if(galleryItem[1] == galleryItemHover[1]){
                galleryItemHover[1].classList.remove("display-none")
            }
            if(galleryItem[2] == galleryItemHover[2]){
                galleryItemHover[2].classList.remove("display-none")
            }
            if(galleryItem[3] == galleryItemHover[3]){
                galleryItemHover[3].classList.remove("display-none")
            }
            if(galleryItem[4] == galleryItemHover[4]){
                galleryItemHover[4].classList.remove("display-none")
            }
            if(galleryItem[5] == galleryItemHover[5]){
                galleryItemHover[5].classList.remove("display-none")
            }
        })
    /* value.addEventListener("mouseout", ()=>{
        value.lastChild.classList.remove("display-none")
    }) */
}

console.log(galleryItem.length == galleryItemHover.length);