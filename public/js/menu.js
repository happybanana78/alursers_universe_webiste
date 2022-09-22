const menuBtn = document.getElementById("menu_btn");
const mobileMenu = document.getElementById("menu");

menuBtn.addEventListener("click", function () {
    menuBtn.classList.toggle("open");
    mobileMenu.classList.toggle("flex");
    mobileMenu.classList.toggle("hidden");
    mobileMenu.classList.toggle("test");
});