const swiperGallery = (getGallerySwiper) => {

  const gallerySwiper = new Swiper(getGallerySwiper, {
      spaceBetween: 10,
      centeredSlides: true,
      loop: true,
      grabCursor: true,
      slidesPerView: 2,
      loopAddBlankSlides: true,
      breakpoints: {
        0: {
          slidesPerView: 2,
          autoplay: {
            delay: 3000,
          },
        },
        780: {
          slidesPerView: 2,
          autoplay: {
            delay: 3000,
          },
        },
      },
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
  const getGallerySwiper = document.querySelectorAll('.o-gallery-slider__swiper');
  if(getGallerySwiper){
    getGallerySwiper.forEach((gallery)=>{
      swiperGallery(gallery);
    })
  }
})