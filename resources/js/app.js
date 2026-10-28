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


document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('newsletter-form');

    if (!form) {
        return;
    }

    const message = document.getElementById('newsletter-message');
    const button = document.getElementById('newsletter-button');

    let resetTimer;

    form.addEventListener('submit', async function (event) {
        event.preventDefault();

        if (!form.reportValidity()) {
            return;
        }

        clearTimeout(resetTimer);

        button.disabled = true;
        button.textContent = 'SUBSCRIBING...';

        message.hidden = true;
        message.classList.remove('is-error');

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: new FormData(form),
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            const data = await response.json();

            if (!response.ok) {
                const errors = data.errors || {};
                const firstError = Object.values(errors).flat()[0];

                throw new Error(
                    firstError || 'Something went wrong. Please try again.'
                );
            }

            message.textContent =
                'Thank you for your message. We will get in touch with you shortly.';

            message.classList.remove('is-error');
            message.hidden = false;

            form.hidden = true;
            form.reset();

            resetTimer = setTimeout(function () {
                message.hidden = true;
                form.hidden = false;
            }, 5000);

        } catch (error) {
            message.textContent = error.message;
            message.classList.add('is-error');
            message.hidden = false;

        } finally {
            button.disabled = false;
            button.textContent = 'SUBSCRIBE';
        }
    });
});
