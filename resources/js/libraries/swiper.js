import Swiper from 'swiper';
import {Navigation, Pagination} from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

const mySwiper = new Swiper('.swiper', {

    // Swiper options here
    modules: [Navigation,Pagination],
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction:true,
    },
    loop:true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    pagination: {
        el: '.swiper-pagination',
    },

    // If we need pagination
    // And if we need scrollbar
});
