const swiperProjects = () => {
  const swiperProjects = new Swiper(".swiper-project", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next--project",
      prevEl: ".swiper-button-prev--project",
    },
    pagination: {
      el: ".swiper-pagination--content-project",
      clickable: true,
    },
  });
};

window.addEventListener("DOMContentLoaded", () => {
  swiperProjects();
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
