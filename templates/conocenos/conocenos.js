"use strinct";

const testimonialSwiper = () => {
  const swiperProgram = document.querySelector(
    ".content-conoce-nuestro-equipo_swiper"
  );

  const swiper = new Swiper(swiperProgram, {
    spaceBetween: 50,
    slidesPerView: 2,
    centeredSlides: true,
    navigation: {
      nextEl: ".swiper-button-next--paginations",
      prevEl: ".swiper-button-prev--paginations",
    },
    autoplay: {
      delay: 2000,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        autoplay: {
          delay: 100000,
        },
      },
      768: {
        slidesPerView: 2,
        autoplay: {
          delay: 100000,
        },
      },
      1024: {
        slidesPerView: 2,
        autoplay: {
          delay: 100000,
        },
      },
    },
    initialSlide: 1,
  });

  swiperToSlide(swiperProgram, swiper);
};

window.addEventListener("DOMContentLoaded", () => {
  testimonialSwiper();
});

document.addEventListener("DOMContentLoaded", function () {
  const years = document.querySelectorAll(".year");
  const contents = document.querySelectorAll(".content");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");
  const yearsContainer = document.querySelector(".years");
  let currentIndex = 0;
  const totalYears = years.length;

  function showContent(index) {
    years.forEach((year) => year.classList.remove("active"));
    contents.forEach((content) => {
      content.classList.remove("active");
      content.style.display = "none";
    });

    years[index].classList.add("active");
    contents[index].classList.add("active");

    setTimeout(() => {
      contents[index].style.display = "block";
    }, 0);
  }

  function updateSliderPosition() {
    const yearWidth = years[currentIndex].offsetWidth;
    const containerWidth = yearsContainer.offsetWidth;

    // Mueve las fechas para centrar la fecha activa sin que se salga del contenedor
    const offset = -currentIndex * (yearWidth + 20); // Calcula el desplazamiento
    yearsContainer.style.transform = `translateX(${offset}px)`;
  }

  prevBtn.addEventListener("click", () => {
    currentIndex--;
    if (currentIndex < 0) {
      currentIndex = totalYears - 1;
    }
    showContent(currentIndex);
    updateSliderPosition();
  });

  nextBtn.addEventListener("click", () => {
    currentIndex++;
    if (currentIndex >= totalYears) {
      currentIndex = 0;
    }
    showContent(currentIndex);
    updateSliderPosition();
  });

  // Inicializa el primer contenido y la posición del slider
  showContent(currentIndex);
  updateSliderPosition();
});

document.addEventListener("DOMContentLoaded", function () {
  const accordionHeaders = document.querySelectorAll(".accordion-header");

  accordionHeaders.forEach((header) => {
    header.addEventListener("click", function () {
      const activeHeader = document.querySelector(".accordion-header.active");
      if (activeHeader && activeHeader !== header) {
        activeHeader.classList.remove("active");
        activeHeader.nextElementSibling.style.maxHeight = 0;
        activeHeader.nextElementSibling.style.padding = "0 15px";
      }

      header.classList.toggle("active");
      const accordionContent = header.nextElementSibling;
      if (header.classList.contains("active")) {
        accordionContent.style.maxHeight = accordionContent.scrollHeight + "px";
        accordionContent.style.padding = "15px";
      } else {
        accordionContent.style.maxHeight = 0;
        accordionContent.style.padding = "0 15px";
      }
    });
  });
});
