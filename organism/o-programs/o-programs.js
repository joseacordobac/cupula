'use strict'

const constProgramSwiper = () => {
    const swiper = new Swiper('.js-programs', {
        speed: 400,
        spaceBetween: 14,
        slidesPerView: 3,
        loop: true,
        pagination: {
            el: '.swiper-pagination-programs',
            clickable: true,
        },
        autoplay: {
            delay: 3000, 
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
                autoplay: {
                    delay: 5000,
                },
            },
        }
    });

}

window.addEventListener('DOMContentLoaded', () => {
    const windowWidth = window.innerWidth;
    if(windowWidth >= 510) {
        constProgramSwiper();
    }
})