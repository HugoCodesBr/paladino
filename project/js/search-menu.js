let headerSearch = document.querySelector(".header__search svg");
let searchInput = document.querySelector(".header__search form input");

headerSearch.addEventListener("click", () => {
    searchInput.classList.toggle("is-active");
});