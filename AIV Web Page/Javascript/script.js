const menu_main = document.querySelector(".menu_main");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");
menu_main.addEventListener('click', ()=>{
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });
});
