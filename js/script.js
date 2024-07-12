const btn_widget = document.querySelector('.btn-widget'),
    widget = document.querySelector('.widget'),
    day = document.querySelector('.widget__day'),
    day_2 = document.querySelector('.widget__day_2'),
    day_hovered = document.querySelector('.widget__day_is-hovered'),
    nav_img_arr = document.querySelector('.navigation__arrow'),
    nav_item = document.querySelector('.navigation__item_arr'),
    btn_img = document.querySelector('.btn__img')
    btn = document.querySelector('.btn');


btn_widget.addEventListener("click", () => {
    widget.classList.toggle("widget__is-open")
    document.querySelector('.btn-widget_img').classList.toggle("transform-rotate-180")
    document.querySelector('.widget__line').classList.toggle("opasity-1")
})

day.addEventListener("mouseover", ()=>{
    day.classList.add("widget__day_is-selected")
    day_2.classList.remove("widget__day_is-selected")
    day_hovered.style.transform = "translateY(0rem)"

})

day_2.addEventListener("mouseover", ()=>{
    day_2.classList.add("widget__day_is-selected")
    day.classList.remove("widget__day_is-selected")
    day_hovered.style.transform = "translateY(8rem)"
})

nav_item.addEventListener("mouseover", ()=>{
    nav_img_arr.src = "icons/arrow-orange.png"
})

nav_item.addEventListener("mouseout", ()=>{
    nav_img_arr.src = "icons/arrow-black.png"
})

btn.addEventListener("mouseover", ()=>{
    btn_img.src = "icons/btn-img-white.png"
})

btn.addEventListener("mouseout", ()=>{
    btn_img.src = "icons/btn-img-black.png"
})