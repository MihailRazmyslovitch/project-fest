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
    homeIndex = document.querySelector('.navigation_mini_index');
    arrHomeIndex = document.querySelector('.style-link__arrow_index');


    /* наведение на кнопку "на главную" */
home.addEventListener("mouseover", ()=>{
    arrHome.src = "../icons/arr-left-orange.png"
})

homeIndex.addEventListener("mouseover", ()=>{
    arrHomeIndex.src = "../icons/arr-left-orange.png"
})

home.addEventListener("mouseout", ()=>{
    arrHome.src = "../icons/arr-left.png"
})

homeIndex.addEventListener("mouseout", ()=>{
    arrHomeIndex.src = "../icons/arr-left.png"
})

/* наведение на иконки почты и вк */
for(let value of contactsItems){
    value.addEventListener("mouseover", ()=>{
        if(value.classList.contains("footer__item__mail") == true){
            iconMail.src = "../icons/mail-orange.png"
        } else if(value.classList.contains("footer__item__vk") == true){
            iconVk.src = "../icons/vk-orange.png"
        }else{
        }
    })
    value.addEventListener("mouseout", ()=>{
        if(value.classList.contains("footer__item__mail") == true){
            iconMail.src = "../icons/mail.png"
        } else if(value.classList.contains("footer__item__vk") == true){
            iconVk.src = "../icons/vk.png"
        }else{
        }
    })
}

for(let value of contactsItemsIndex){
    value.addEventListener("mouseover", ()=>{
        if(value.classList.contains("footer__item__mail") == true){
            iconMailIndex.src = "../icons/mail-orange.png"
        } else if(value.classList.contains("footer__item__vk") == true){
            iconVkIndex.src = "../icons/vk-orange.png"
        }else{
        }
    })
    value.addEventListener("mouseout", ()=>{
        if(value.classList.contains("footer__item__mail") == true){
            iconMailIndex.src = "../icons/mail.png"
        } else if(value.classList.contains("footer__item__vk") == true){
            iconVkIndex.src = "../icons/vk.png"
        }else{
        }
    })
}

/* наведение на иконку телеграма */
iconTelegram.addEventListener("mouseover", ()=>{
    iconTelegram.src = "../icons/telegram-orange.png"
})

iconTelegram.addEventListener("mouseout", ()=>{
    iconTelegram.src = "../icons/telegram.png"
})

iconTelegramIndex.addEventListener("mouseover", ()=>{
    iconTelegramIndex.src = "../icons/telegram-orange.png"
})

iconTelegramIndex.addEventListener("mouseout", ()=>{
    iconTelegramIndex.src = "../icons/telegram.png"
})

/* наведение на иконку ватсапа */

iconWhatsap.addEventListener("mouseover", ()=>{
    iconWhatsap.src = "../icons/whatsapp-orange.png"
})

iconWhatsapIndex.addEventListener("mouseover", ()=>{
    iconWhatsapIndex.src = "../icons/whatsapp-orange.png"
})

iconWhatsap.addEventListener("mouseout", ()=>{
    iconWhatsap.src = "../icons/whatsapp.png"
})

iconWhatsapIndex.addEventListener("mouseout", ()=>{
    iconWhatsapIndex.src = "../icons/whatsapp.png"
})


/* наведение на эллементы нав меню */
for(let value of nav_items){
    value.addEventListener("mouseover", ()=>{
        value.classList.add("navigation__link_is-hovered")
    })
    value.addEventListener("mouseout", ()=>{
        value.classList.remove("navigation__link_is-hovered")
    })
}