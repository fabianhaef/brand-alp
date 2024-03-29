const navTrigger = document.querySelector('.header__target')
const burger = document.querySelector('.header__burger')
const navWrapper = document.querySelector('.nav__wrapper')
const nav = document.getElementById('nav')
const header = document.getElementById('header')
const navLinks = document.querySelectorAll('.nav__link.mobile');

function initNav() {
    navTrigger.addEventListener('click', () => {
        toggleNav();
        toggleBurger();
    })
}

function toggleNav() {
    nav.classList.toggle('nav--active');
    header.classList.toggle('nav--active');
}

function toggleBurger() {
    burger.classList.toggle('active');
}

if (navTrigger && nav) {
    initNav()
}

navLinks.forEach(link => {
    link.addEventListener('click', () => {
        nav.classList.remove('nav--active');
        header.classList.remove('nav--active');    
        burger.classList.remove('active');
    })
})