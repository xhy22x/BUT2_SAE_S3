const menuHamburger = document.querySelector(".menu-hamburger");
const menuClose = document.querySelector(".menu-close");
const navLinksOthersM = document.querySelector(".menu-mobile .nav-others");
const navLinksOthersD = document.querySelector(".menu-desktop .nav-others");
const navLinksMobile = document.querySelector(".nav-links.menu-mobile");
const navLinksDesktop = document.querySelector(".nav-links.menu-desktop");
const navLoupe = document.querySelector(".nav-loupe");
const btnDon = document.querySelector(".nav-links.menu-desktop .btn-Don");


menuHamburger.addEventListener('click',()=>{
    menuHamburger.classList.add('active');
    menuClose.classList.add('active');
    navLinksOthersM.classList.add('active');
    navLinksMobile.classList.toggle('menuM');
    navLoupe.style.display = 'none';
})
menuClose.addEventListener('click', function() {
    menuHamburger.classList.remove('active');
    menuClose.classList.remove('active');
    navLinksOthersM.classList.remove('active');
    navLinksMobile.classList.remove('menuM');
    navLoupe.style.display = 'block';
});

menuHamburger.addEventListener('click',()=>{
    menuHamburger.classList.add('active');
    menuClose.classList.add('active');
    navLinksOthersD.classList.add('active');
    navLinksDesktop.classList.toggle('menuD');
    navLoupe.style.display = 'none';
    btnDon.classList.add('active');
})
menuClose.addEventListener('click', function() {
    menuHamburger.classList.remove('active');
    menuClose.classList.remove('active');
    navLinksOthersD.classList.remove('active');
    navLinksDesktop.classList.remove('menuD');
    navLoupe.style.display = 'block';
    btnDon.classList.remove('active');
});