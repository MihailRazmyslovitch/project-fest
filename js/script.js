
document.querySelector('.btn-widget').addEventListener("click", () => {
    document.querySelector('.widget').classList.toggle("widget__is-open")
    document.querySelector('.btn-widget').classList.toggle("transform-rotate-180")
    document.querySelector('widget__days::after').style.display = "block"
})

console.log(document.querySelector('widget__days::after'));