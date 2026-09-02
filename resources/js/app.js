import './bootstrap';
import 'bootstrap';
import './header';

import Swiper from 'swiper';
import { Navigation, Autoplay } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';


document.addEventListener('DOMContentLoaded', () => {


    /* =====================================================
       PROJECTS SWIPER
    ===================================================== */

    const projectsElement = document.querySelector('.projectsSwiper');

    if (projectsElement) {

        /*
         * Navigation buttons الخاصة بالـProjects
         * موجودة بعد الـSwiper داخل نفس الـsection
         */

        const projectsSection = projectsElement.closest('.projects-section');

        const projectsPrev =
            projectsSection?.querySelector('.client-prev');

        const projectsNext =
            projectsSection?.querySelector('.client-next');


        const projectsSwiper = new Swiper(projectsElement, {

            modules: [Navigation],

            /* =========================
               DEFAULT
            ========================= */

            slidesPerView: 1,

            spaceBetween: 30,

            loop: true,

            speed: 700,


            /* =========================
               NAVIGATION
            ========================= */

            navigation: {

                nextEl: projectsNext,

                prevEl: projectsPrev,

            },


            /* =========================
               RESPONSIVE
            ========================= */

            breakpoints: {

                /* Mobile */

                0: {

                    slidesPerView: 1,

                    spaceBetween: 20,

                },


                /* Tablet */

                768: {

                    slidesPerView: 2,

                    spaceBetween: 25,

                },


                /* Desktop */

                1200: {

                    slidesPerView: 3,

                    spaceBetween: 30,

                },

            },

        });

    }



    /* =====================================================
       CLIENTS SWIPER
    ===================================================== */

    const clientsElement = document.querySelector('.clientsSwiper');

    if (clientsElement) {

        /*
         * البحث عن Navigation الخاص بالـClients
         * داخل قسم Clients فقط
         */

        const clientsSection =
            clientsElement.closest('.clients-section') ||
            clientsElement.parentElement;

        const clientsPrev =
            clientsSection?.querySelector('.client-prev');

        const clientsNext =
            clientsSection?.querySelector('.client-next');


        new Swiper(clientsElement, {

            modules: [Navigation, Autoplay],

            slidesPerView: 2,

            spaceBetween: 30,

            loop: true,

            speed: 700,


            /* =========================
               AUTOPLAY
            ========================= */

            autoplay: {

                delay: 1000,

                disableOnInteraction: false,

                pauseOnMouseEnter: true,

            },


            /* =========================
               NAVIGATION
            ========================= */

            navigation: {

                nextEl: clientsNext,

                prevEl: clientsPrev,

            },


            /* =========================
               RESPONSIVE
            ========================= */

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