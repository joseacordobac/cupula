function cardProjectSlide(){
  const getCardProject = document.querySelectorAll('.m-card-project__swiper');

  getCardProject.forEach((project)=>{
    const swiper = new Swiper(project, {
      slidesPerView: 1,
      loop: true,
      autoplay: {
        delay: 5000,
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