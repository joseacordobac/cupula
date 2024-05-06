const starMainSwipperEvents = () =>{

  const swiper = new Swiper('.events-resources-swipe', {
    speed: 400,
    spaceBetween: 20,
    slidesPerView: 3,
    pagination: {
        el: '.events_resource-swiper__pagination',
        clickable: true,
    },
    loopAddBlankSlides: true,
    autoplay: {
        delay: 10000,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 3,
        },
    }
  });

}



window.addEventListener('DOMContentLoaded', ()=>{
  starMainSwipperEvents();
})