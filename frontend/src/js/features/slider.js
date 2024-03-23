// import Swiper JS
import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';

const swiper = new Swiper('.swiper', {
    modules: [Navigation],
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    navigation: {
        prevEl: '.swiper-button-prev',
        nextEl: '.swiper-button-next'
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
            centeredSlides: false
        }
    }
});
