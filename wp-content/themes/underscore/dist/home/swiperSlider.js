const persons = document.querySelectorAll(".person");

var reviewSwiper = new Swiper(".reviewSwiper", {
  pagination: {
    el: ".swiper-review-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".slideNext-review-btn",
    prevEl: ".slidePrev-review-btn",
  },
  slidesPerView: 1,
  spaceBetween: 5,
});
reviewSwiper.on("slideChange", function () {
  persons.forEach((person, index) => {
    person.classList.remove("bg-white");
    person.classList.add("bg-secondary-100");
    if (index === reviewSwiper.activeIndex) {
      person.classList.remove("bg-secondary-100");
      person.classList.add("bg-white");
    }
  });
});

var swiper = new Swiper(".contentSwiper", {
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".slideNext-btn",
    prevEl: ".slidePrev-btn",
  },
  slidesPerView: 1,
  spaceBetween: 5,
  breakpoints: {
    500: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  },
});

var swiper = new Swiper(".tabSwiper", {
  direction: getDirection(),
  slidesPerView: 1.5,
  spaceBetween: 5,
  breakpoints: {
    600: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  },
});

function getDirection() {
  var windowWidth = window.innerWidth;
  var direction = windowWidth > 1024 ? "vertical" : "horizontal";
  return direction;
}
