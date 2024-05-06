const starMainSwipperHeroSlider = () =>{

  const swiper = new Swiper('.js-hero-banner', {
  direction: 'horizontal', 
  speed: 400,
  spaceBetween: 100,
  loop: true,
  autoplay: {
      delay: 10000,
  },
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

const gsapStartHero = () =>{

  const tl = gsap.timeline({
      scrollTrigger: {
          start: "bottom bottom",    
          trigger: ".hero-banner",
          scrub: true,
          end: "+=1000",
          markers: false,
      }
  })
  
  gsap.from('.js-title', {
      duration: 3,
      text: "",
      y: 0,
  });

  tl.to('.js-hero-banner .a-btn', {
      x: 200,
  }, 0)     
}

const gsapStartTranning = () =>{

  const tl = gsap.timeline({
      scrollTrigger: {
          scrub: 1,
          trigger: ".hero-banner",
          start: "bottom bottom",
          endTrigger: ".trainning",
          end: "top top",
      },
  })

  tl.to(".incon-brand", {
      rotateZ: 360,
      duration: 1.5,
  });

  const windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
if (windowWidth > 780) {
  tl.to(".trainning", {
      y: -100,
  }, 0);
}

}


window.addEventListener('DOMContentLoaded', ()=>{
  starMainSwipperHeroSlider();
})