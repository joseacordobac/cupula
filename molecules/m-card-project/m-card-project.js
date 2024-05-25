function cardProjectSlide(){
  const getCardProject = document.querySelectorAll('.m-card-project__swiper');

  getCardProject.forEach((project)=>{
    const swiper = new Swiper(project, {
      slidesPerView: 1,
      loop: true,
      autoplay: {
          delay: 5000,
          disableOnInteraction: true,
      },
      navigation: {
        nextEl: '.swiper-button-next--card-project',
        prevEl: '.swiper-button-prev--card-project',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      }
    })
  })

}


window.addEventListener('load', ()=>{
  cardProjectSlide();
})