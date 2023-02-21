//Toggle Dark Mode
const checkbox = document.querySelector("#toggle");
const html = document.querySelector("html");

checkbox.addEventListener("click", function () {
    checkbox.checked
        ? html.classList.add("dark")
        : html.classList.remove("dark");
});

//Sticky Nav
window.onscroll = function () {
    const navbar = document.querySelector("#navbar");
    const fixedNav = navbar.offsetTop;

    if (window.pageYOffset > fixedNav) {
        navbar.classList.add("navbar-fixed");
    } else navbar.classList.remove("navbar-fixed");
};
