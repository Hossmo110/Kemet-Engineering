import './bootstrap';
import 'bootstrap';
import './header';

import Swiper from 'swiper';
import { Navigation, Autoplay } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';

document.addEventListener('DOMContentLoaded', () => {

    /* ==========================
       PROJECTS SWIPER
    ========================== */

    const projectsElement = document.querySelector('.projectsSwiper');

    if (projectsElement) {

        new Swiper(projectsElement, {

            modules: [Navigation],

            slidesPerView: 1,

            spaceBetween: 30,

            navigation: {
                nextEl: '.project-next',
                prevEl: '.project-prev',
            },

            breakpoints: {

                576: {
                    slidesPerView: 1,
                },

                768: {
                    slidesPerView: 2,
                },

                1200: {
                    slidesPerView: 3,
                },

            },

            speed: 700,

            loop: true,

        });

    }


    /* ==========================
       CLIENTS SWIPER
    ========================== */

    const clientsElement = document.querySelector('.clientsSwiper');

    if (clientsElement) {

        new Swiper(clientsElement, {

            modules: [Navigation, Autoplay],

            slidesPerView: 2,

            spaceBetween: 30,

            loop: true,

            speed: 700,

            autoplay: {
                delay: 1000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },

            navigation: {
                nextEl: '.client-next',
                prevEl: '.client-prev',
            },

            breakpoints: {

                576: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },

                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },

                1200: {
                    slidesPerView: 6,
                    spaceBetween: 30,
                },

            },

        });

    }

});
