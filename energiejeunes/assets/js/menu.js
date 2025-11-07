const menuHamburger = document.querySelector(".menu-hamburger");
const menuClose = document.querySelector(".menu-close");
const navLinksMobile = document.querySelector(".nav-links.menu-mobile");
const navLinksDesktop = document.querySelector(".nav-links.menu-desktop");
const navLoupe = document.querySelector(".nav-loupe");


menuHamburger.addEventListener('click',()=>{
    menuHamburger.classList.add('active');
    menuClose.classList.add('active');
    navLinksMobile.classList.toggle('menuM');
    navLoupe.style.display = 'none';
})
menuHamburger.addEventListener('click',()=>{
    menuHamburger.classList.add('active');
    menuClose.classList.add('active');
    navLinksDesktop.classList.toggle('menuD');
    navLoupe.style.display = 'none';
})

menuClose.addEventListener('click', function() {
    menuHamburger.classList.remove('active');
    menuClose.classList.remove('active');
    navLinksMobile.classList.remove('menuM');
    navLoupe.style.display = 'block';
});
menuClose.addEventListener('click', function() {
    menuHamburger.classList.remove('active');
    menuClose.classList.remove('active');
    navLinksDesktop.classList.remove('menuD');
    navLoupe.style.display = 'block';
});