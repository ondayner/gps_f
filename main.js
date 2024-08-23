const buttonNavbar = document.getElementById("navbar-button");
const menu = document.getElementById("menu-nav");
const salirNavbar = document.getElementById("salir");
const oscuro = document.getElementById("oscuro-nav");

buttonNavbar.addEventListener("click", () => {
    menu.style.right ="0%"
})
buttonNavbar.addEventListener("click", () => {
    oscuro.style.display ="block"
})


salirNavbar.addEventListener("click", () => {
    menu.style.right ="-100%"
})
salirNavbar.addEventListener("click", () => {
    oscuro.style.display ="none"
})