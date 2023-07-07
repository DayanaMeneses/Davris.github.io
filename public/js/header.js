const btnNavbar = document.querySelector('.header__container-openNavbarMobile');
const navbar = document.querySelector('.header__nav');

btnNavbar.addEventListener('click',()=> {
    navbar.classList.toggle('header__navOn');
});

const btnCloseNavbar = document.querySelector('.header__container-closeNavbarMobile');

btnCloseNavbar.addEventListener('click',()=> {
    navbar.classList.remove('header__navOn');
});






