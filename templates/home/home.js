const swiperProjects = () => {
  const swiperProjects = new Swiper('.swiper-project', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next--project',
      prevEl: '.swiper-button-prev--project',
    }
  });
}
    
window.addEventListener('DOMContentLoaded', ()=>{
  swiperProjects();
})