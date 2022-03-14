let headerMenu = document.querySelector(".header__menu");
let headerBurger = document.querySelector(".header__burger");

headerBurger.addEventListener("click", () => {
    headerMenu.classList.toggle("is-active");
    headerBurger.classList.toggle("is-active");
});