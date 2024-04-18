// import Swiper JS
import Swiper from 'swiper';

// import Swiper and modules styles
import 'swiper/css';

const swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    breakpoints: {
        768: {
            slidesPerView: 2,
            centeredSlides: false
        }
    }
});
