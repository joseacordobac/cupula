const starMainSwipper = () =>{

  const swiper = new Swiper('.js-conocenos-banner', {
  direction: 'horizontal', 
  speed: 400,
  spaceBetween: 100,
  autoHeight: true, 
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next--bannerfull',
    prevEl: '.swiper-button-prev--bannerfull',
  }
  });

}

window.addEventListener('DOMContentLoaded', ()=>{
  starMainSwipper();
})