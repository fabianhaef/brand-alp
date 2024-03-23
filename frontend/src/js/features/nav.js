const navTrigger = document.querySelector('.header__target')
const burger = document.querySelector('.header__burger')
const navWrapper = document.querySelector('.nav__wrapper')
const nav = document.getElementById('nav')

function initNav() {
    navTrigger.addEventListener('click', () => {
        toggleNav();
        toggleBurger();
    })
}

function toggleNav() {
    nav.classList.toggle('nav--active');
}

function toggleBurger() {
    burger.classList.toggle('active');
}

if (navTrigger && nav) {
    initNav()
}