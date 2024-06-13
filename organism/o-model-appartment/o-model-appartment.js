const swiperAppartments = (getSlider) => {
  const swiper = new Swiper(getSlider, {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next--project',
      prevEl: '.swiper-button-prev--project',
    },
    pagination: {
      el: '.swiper-pagination--content-project',
      clickable: true,
    }
  });
}


const sliderAppartments = () => {
  const getSlider = document.querySelector('.o-model-appartment__slider');
  if(getSlider){
    swiperAppartments(getSlider);
  }
}

window.addEventListener('DOMContentLoaded', ()=>{
  sliderAppartments();
})