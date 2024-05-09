'use strinct'

const testimonialSwiper = () => {
    const swiperProgram = document.querySelector('.o-testimonials__swiper');

    const swiper = new Swiper(swiperProgram, {
        spaceBetween: 20,
        slidesPerView: 2,
        centeredSlides: true,
        pagination: {
            el: '.swiper-pagination--testimonials',
            clickable: true,
        },
        autoplay: {
            delay: 2000,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                autoplay: {
                    delay: 100000,
                },
            },
            768: {
                slidesPerView: 2,
                autoplay: {
                    delay: 100000,
                },
            },
            1024: {
                slidesPerView: 3,
                autoplay: {
                    delay: 100000,
                },
            },
        },
        initialSlide: 1,
    });

    swiperToSlide(swiperProgram, swiper);

}

window.addEventListener('DOMContentLoaded', () => {
    testimonialSwiper();
})