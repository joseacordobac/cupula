const swiperProjects = () => {
  const swiperProjects = new Swiper('.swiper-project', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });
}
    


window.addEventListener('DOMContentLoaded', ()=>{
  swiperProjects();
})