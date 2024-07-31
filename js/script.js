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
    iconTelegram = document.querySelector('.footer__icon_tg');
    iconWhatsap = document.querySelector('.footer__icon_wh');
    iconMail = document.querySelector('.footer__icon_mail');
    iconVk = document.querySelector('.footer__icon_vk');
    contactsItems = document.querySelectorAll('.footer__item');
    iconTelegramIndex = document.querySelector('.footer__icon_tg_index');
    iconWhatsapIndex = document.querySelector('.footer__icon_wh_index');
    iconMailIndex = document.querySelector('.footer__icon_mail_index');
    iconVkIndex = document.querySelector('.footer__icon_vk_index');
    contactsItemsIndex = document.querySelectorAll('.footer__item_index');
    arrHome = document.querySelector('.style-link__arrow_2');
    home = document.querySelector('.navigation_mini-bottom');


    /* наведение на кнопку "на главную" */
home.addEventListener("mouseover", ()=>{
    arrHome.src = "icons/arr-left-orange.png"
})

home.addEventListener("mouseout", ()=>{
    arrHome.src = "icons/arr-left.png"
})

/* наведение на иконки почты и вк */
for(let value of contactsItems){
    value.addEventListener("mouseover", ()=>{
        if(value.classList.contains("footer__item__mail") == true){
            iconMail.src = "icons/mail-orange.png"
        } else if(value.classList.contains("footer__item__vk") == true){
            iconVk.src = "icons/vk-orange.png"
        }else{
        }
    })
    value.addEventListener("mouseout", ()=>{
        if(value.classList.contains("footer__item__mail") == true){
            iconMail.src = "icons/mail.png"
        } else if(value.classList.contains("footer__item__vk") == true){
            iconVk.src = "icons/vk.png"
        }else{
        }
    })
}

for(let value of contactsItemsIndex){
    value.addEventListener("mouseover", ()=>{
        if(value.classList.contains("footer__item__mail") == true){
            iconMailIndex.src = "icons/mail-orange.png"
        } else if(value.classList.contains("footer__item__vk") == true){
            iconVkIndex.src = "icons/vk-orange.png"
        }else{
        }
    })
    value.addEventListener("mouseout", ()=>{
        if(value.classList.contains("footer__item__mail") == true){
            iconMailIndex.src = "icons/mail.png"
        } else if(value.classList.contains("footer__item__vk") == true){
            iconVkIndex.src = "icons/vk.png"
        }else{
        }
    })
}

/* наведение на иконку телеграма */
iconTelegram.addEventListener("mouseover", ()=>{
    iconTelegram.src = "icons/telegram-orange.png"
})

iconTelegram.addEventListener("mouseout", ()=>{
    iconTelegram.src = "icons/telegram.png"
})

iconTelegramIndex.addEventListener("mouseover", ()=>{
    iconTelegramIndex.src = "icons/telegram-orange.png"
})

iconTelegramIndex.addEventListener("mouseout", ()=>{
    iconTelegramIndex.src = "icons/telegram.png"
})

/* наведение на иконку ватсапа */

iconWhatsap.addEventListener("mouseover", ()=>{
    iconWhatsap.src = "icons/whatsapp-orange.png"
})

iconWhatsapIndex.addEventListener("mouseover", ()=>{
    iconWhatsapIndex.src = "icons/whatsapp-orange.png"
})

iconWhatsap.addEventListener("mouseout", ()=>{
    iconWhatsap.src = "icons/whatsapp.png"
})

iconWhatsapIndex.addEventListener("mouseout", ()=>{
    iconWhatsapIndex.src = "icons/whatsapp.png"
})

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
    nav_levl_2.classList.toggle("navigation__levl-2_is-open")
})

/* наведение на эллемент нав меню со стрелочкой, функция ЗАКРЫВАЕТ 2 уровень нав меню, окрашивает цвет текста, окрашивает стрелку и переваречивает ее */
nav_item_arr.addEventListener("mouseout", ()=>{
    nav_img_arr.src = "icons/arrow-black.png"
    nav_img_arr.style.transform = "rotate(0deg) translateY(0.2rem)"
    nav_levl_2.classList.toggle("navigation__levl-2_is-open")
})

/* наведение на эллементы нав меню 2 уровня */
nav_levl_2.addEventListener("mouseover", ()=>{
    nav_item_arr_desc.classList.add("color-orange")
})

/* наведение на эллементы нав меню 2 уровня */
nav_levl_2.addEventListener("mouseout", ()=>{
    nav_item_arr_desc.classList.remove("color-orange")
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
    sub_title_img.src = "icons/arr-left-orange.png"
})

sub_title.addEventListener("mouseout", ()=>{
    sub_title_img.src = "icons/arr-left.png"
})

sub_title_2.addEventListener("mouseover", ()=>{
    sub_title_img_2.src = "icons/arr-left-orange.png"
})

sub_title_2.addEventListener("mouseout", ()=>{
    sub_title_img_2.src = "icons/arr-left.png"
})


/* при наведении картинка галлереи блюрится */
/* for(let value of galleryItem){
        value.addEventListener("mouseover", ()=>{
            if(value.classList.contains("gallery__item__hover") == false){
                value.classList.add("gallery__item__hover")
                value.innerHTML = '<img src="img/img-1.jpeg" alt="" class="gallery__item-img"><div class="gallery__item_is-hovered"><h4 class="news-card__title margin-bottom-100px">Первые фестивальные кадры 2024 г.</h4><a href="#" class="btn-card">Узнать больше &rarr;</a></div>'
            }
        })
        value.addEventListener("mouseout", ()=>{
            if(value.classList.contains("gallery__item__hover") == true){
                value.classList.remove("gallery__item__hover")
                value.innerHTML = '<img src="img/img-1.jpeg" alt="" class="gallery__item-img">'
            }
        })
     value.addEventListener("mouseout", ()=>{
        value.lastChild.classList.remove("display-none")
    })
} */











