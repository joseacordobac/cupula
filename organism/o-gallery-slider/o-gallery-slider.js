const swiperGallery = (getGallerySwiper) => {

  const gallerySwiper = new Swiper(getGallerySwiper, {
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,
      grabCursor: true,
      slidesPerView: 2,
      navigation: {
        nextEl: '.swiper-button-next--gallery',
        prevEl: '.swiper-button-prev--gallery',
      },
      pagination: {
        el: '.swiper-pagination--gallery',
        clickable: true,
      }
  });

}


window.addEventListener('DOMContentLoaded', ()=>{
  const getGallerySwiper = document.querySelector('.o-gallery-slider__swiper');
  if(getGallerySwiper){
    swiperGallery(getGallerySwiper);
  }
})