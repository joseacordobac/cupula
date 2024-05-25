const swiperProjects = () => {
  const swiperProjects = new Swiper('.swiper-project', {
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
    
window.addEventListener('DOMContentLoaded', ()=>{
  swiperProjects();
})