const navbar = document.querySelector(".navbar");
//const logo = document.querySelector(".logo-svg use"); //старый режим смены логотипа
const logoLight = document.querySelector(".logo-light"); //новый режим смены логотипа
const logo = document.querySelector(".logo"); //новый режим смены логотипа
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logo.style.display = "block"; //новый режим смены логотипа
  logoLight.style.display = "none"; //новый режим смены логотипа
  // logo.href.baseVal = "img/sprite.svg#logo";//старый режим смены логотипа
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.style.display = "none"; //новый режим смены логотипа
  logoLight.style.display = "block"; //новый режим смены логотипа
  // logo.href.baseVal = "img/sprite.svg#logo";//старый режим смены логотипа
};

const openMenu = (event) => {
  //функция открывания меню
  menu.classList.add("is-open"); //вешает класс is-open
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden"; //запрет прокрутки сайта подменю
  lightModeOn();
};
const closeMenu = (event) => {
  //функция закрывания меню
  menu.classList.remove("is-open"); //удалить класс is-open
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = ""; //разрешение прокрутки сайта подменю
  lightModeOff();
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper = new Swiper(".swiper", {
  speed: 400,
  // autoHeight: true,
  slidesPerView: 1,
  navigation: {
    prevEl: ".slider-button-prev",
    nextEl: ".slider-button-next",
  },
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
      // centeredSlides: true,
      // slidesOffsetBefore: -100,
      // slidesOffsetAfter: 60,
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 4,
    },
    1200: {
      slidesPerView: 5,
    },
  },
});

const swiper2 = new Swiper(".swiper2", {
  speed: 400,
  autoHeight: true,
  slidesPerView: 1,
  // spaceBetween: 30,
  navigation: {
    prevEl: ".steps-slider-button-prev",
    nextEl: ".steps-slider-button-next",
  },

  // Responsive breakpoints

  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    },
  },
});

const swiperBlog = new Swiper(".blog-slider", {
  speed: 400,
  slidesPerView: 1,
  autoHeight: true,
  spaceBetween: 30,
  navigation: {
    prevEl: ".blog-button-prev",
    nextEl: ".blog-button-next",
  },
  breakpoints: {
    576: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
  },
});

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) &&
      modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    event.preventDefault();
    modal.classList.remove("is-open");
  }
});

// modalToggle.forEach((element) => {
//   element.addEventListener("click", (event) => {
//     event.preventDefault ();
//     modal.classList.add("is-open");
//   });
// });

// const modalToggle = document.querySelectorAll("[data-toggle=modal]");
// const modalClose = document.querySelector(".modal-close");

// modalClose.addEventListener("click", (event) => {
//   event.preventDefault();
//   modal.classList.remove("is-open");
// });

// //ДЗ к уроку модальное окно
// document.addEventListener("keydown", function (e) {
//   if (e.keyCode == 27) {
//     event.preventDefault();
//     modal.classList.remove("is-open");
//   }
// });

//не работает закрытие по клику на фон вне окна
// document.addEventListener("click", (event) => {
//   const withinBoundaries = event.composedPath().includes(modalDialog);
//   if (!withinBoundaries) {
//     event.preventDefault();
//        modal.classList.remove("is-open");
//      console.log(event.target);
//   }
// });
