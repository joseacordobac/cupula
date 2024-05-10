const starMainSwipper = () =>{

  const swiper = new Swiper('.js-conocenos-banner', {
  direction: 'horizontal', 
  speed: 400,
  spaceBetween: 100,
  loop: true,
//   autoplay: {
//       delay: 10000,
//   },
  pagination: {
          el: '.swiper-pagination__main-banner', 
          clickable: true,  
      },
  breakpoints: {
      0: {
          direction: 'horizontal',
          autoplay: {
              delay: 10000,
          },
      },
      768: {
          direction: 'horizontal',
          autoplay: {
              delay: 10000,
          },
      },
  }
  });

}

window.addEventListener('DOMContentLoaded', ()=>{
  starMainSwipper();
})