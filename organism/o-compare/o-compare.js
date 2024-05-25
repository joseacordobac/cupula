const swiperCompare = (getCompare) => {

  const swiper = new Swiper(getCompare, {
    speed: 400,
    spaceBetween: 20,
    slidesPerView: 1,
    navigation: {
      nextEl: ".swiper-button-next--compare",
      prevEl: ".swiper-button-prev--compare",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        pagination: {
          el:'.swiper-pagination--compare',
          clickable: true,
        }
      },
      780: {
        slidesPerView: 1,
      },
    }
  })
};

window.addEventListener('load', ()=>{
  const getCompare = document.querySelector('.o-compare-slider');
  if(getCompare){
    swiperCompare(getCompare);
  }
})