const leningStart = () => {

    const lenis = new Lenis({
        lerp: 0.05,
        infinite: false,
        duration: 2,
    })

    function raf(time) {
        lenis.raf(time)
        requestAnimationFrame(raf)
    }

    requestAnimationFrame(raf)
}

const gIsMobile = () =>  window.innerWidth < 780;

// swiper to slide
const swiperToSlide = (swiperProgram, swiper) => {
    const getSlider = swiperProgram.querySelectorAll('.swiper-slide');
    getSlider.forEach((slide, index) => {
        slide.addEventListener('click', () => {
            swiper.slideTo(index);
        })
    })
}

const stringNumDecimal = (num) => {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

window.addEventListener('load', () => {
    
})