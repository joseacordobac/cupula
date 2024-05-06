const startPrograToSwiper = () =>{
    
    const withScreen = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    const swiperProgram = document.querySelector('.o-iprogram__wrapper');

    if(withScreen < 780 ) return;

    const swiper = new Swiper(swiperProgram, {
        spaceBetween: 20,
        pagination: {
            el: '.o-iprogram__pagination',
            dynamicBullets: true,
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 3,
            }
        }
    });

}

window.addEventListener('DOMContentLoaded', () => {
    startPrograToSwiper();
})