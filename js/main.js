const navbar = document.querySelector(".navbar");
const navbarButton = document.querySelector(".navbar-button");
//const logo = document.querySelector(".logo-svg use"); //старый режим смены логотипа
const logoLight = document.querySelector(".logo-light"); //новый режим смены логотипа
const logo = document.querySelector(".logo"); //новый режим смены логотипа
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const mobileMenus = document.querySelectorAll(".mobile-menu-line");
const isFront = document.body.classList.contains("front-page");

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

const changeNavHeight = (height) => {
  navbar.style.height = height;
};

const mobileMenuLine = (translateY) => {
  navbar.style.height = height;
};

const openMenu = (event) => {
  //функция открывания меню
  menu.classList.add("is-open"); //вешает класс is-open
  navbar.classList.add("navbar-modal");
  // navbarButton.classList.add("navbar-button-modal");
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden"; //запрет прокрутки сайта подменю
  lightModeOn();
};
const closeMenu = (event) => {
  //функция закрывания меню
  menu.classList.remove("is-open"); //удалить класс is-open
  navbar.classList.remove("navbar-modal");
  // navbarButton.classList.remove("navbar-button-modal");
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = ""; //разрешение прокрутки сайта подменю
  lightModeOff();
};

window.addEventListener("scroll", () => {
  // this.scrollY > 1 ? lightModeOn() : lightModeOff();
  this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  mobileMenus.forEach((mobileMenu) => {
    this.scrollY > 1
      ? mobileMenu.classList.add("mobile-menu-line-scr")
      : mobileMenu.classList.remove("mobile-menu-line-scr");
  });
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
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
    992: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    576: {
      slidesPerView: 1,
    },
  },
});

let currentModal; //текущее модельное окно
let modalDialog; //белое диалоговое окно
let alertModal = document.querySelector("#alert-modal"); //окно с предупреждением
// находим вызыватели или переключатели модальных окон
const modalButtons = document.querySelectorAll("[data-toggle=modal]");
modalButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    //отмена стандартного поведения при клике
    event.preventDefault();
    //клик по переключателю
    // определяем текущее открытое окно
    currentModal = document.querySelector(button.dataset.target);
    //открываем текущее окно присваивая класс is-open
    currentModal.classList.toggle("is-open");
    //назначаем новое диалоговое окно
    modalDialog = currentModal.querySelector(".modal-dialog");
    modal_to_main = currentModal.querySelector(".mf-btn-thanks");
    console.log(button.dataset.target);
    //отслеживаем события клика внутри диалогового окна, клик по окну и пустым областям
    currentModal.addEventListener("click", (event) => {
      //если клик в пустую область вне окна, закрываем окно удаляя класс
      if (!event.composedPath().includes(modalDialog)) {
        //закрытие окна
        currentModal.classList.remove("is-open");
      }
    });
  });
});

//костыль который при отправке заявки через СТА минуя первую модалку, заранее устанавливает currentModal
const staButton = document.querySelector(".cta-form-button");
staButton.addEventListener("click", (event) => {
  // console.log("click");
  currentModal = alertModal;
});

//отлавливаем событие нажатия на кнопки
document.addEventListener("keyup", (event) => {
  //проверка что это escape и текущее окно открыто( склассом из-опен). Если все ок то окно закрывается
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    event.preventDefault();
    currentModal.classList.toggle("is-open");
  }
});

const forms = document.querySelectorAll("form"); //Собираем все формы

//Перебираем каждую форму через foreach
forms.forEach((form) => {
  //создаем новый обьект для проверки
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation
    //проверка поля для ввода фио
    .addField("[name=username]", [
      {
        //если ничего не введено
        rule: "required",
        errorMessage: "Укажите имя",
      },
      {
        // если превышено макс символов
        rule: "maxLength",
        value: 50,
        errorMessage: "Максимально 50 символов",
      },
      {
        // если мало символов
        rule: "minLength",
        value: 2,
        errorMessage: "Имя от 2 символов",
      },
    ])
    //проверка поля ввода номера
    .addField("[name=userphone]", [
      {
        // если ничего не найдено
        rule: "required",
        errorMessage: "Укажите телефон",
      },
      {
        // если мало символов
        rule: "minLength",
        value: 16,
        errorMessage: "Неполный номер",
      },
    ])
    // в случае успешной проверки полей берем данные формы и через указанный метод отправляем на хэндлер
    .onSuccess((event) => {
      const thisForm = event.target; //Наша форма
      const formData = new FormData(thisForm); //данные из нашей форсы
      const ajaxsend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
          // если ответ 200 то закрываем модалку с полями и открываем модалку с подтверждением
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            //у текущего модокна удаляем класс из-опен(делаем невидимым) здесть получается финт, что если идет через 2 модалки то логично что закрывает сначала предыдущую, а если через cta то он просто впустую  отнимает класс которого нет потом снова его присваивая. но думаю сойдет
            currentModal.classList.remove("is-open");
            currentModal = alertModal;
            currentModal.classList.add("is-open");
            modalDialog = currentModal.querySelector(".modal-dialog");
            //отслеживаем события клика внутри диалогового окна, клик по окну и пустым областям

            currentModal.addEventListener("click", (event) => {
              //если клик в пустую область вне окна, закрываем окно удаляя класс
              if (!event.composedPath().includes(modalDialog)) {
                //закрытие окна
                currentModal.classList.remove("is-open");
              }
              if (event.composedPath().includes(modal_to_main)) {
                //возврат к главной странице
                document.location.href = "/";
              }
            });
            // event.preventDefault();
            // currentModal.classList.toggle("is-open");
            // modalThanks.classList.toggle("is-open");
            //document.location.href = "/";
          } else {
            alert(response.statusText);
          }
        });
        4;
      };
      ajaxsend(formData);
      console.log(event.target.getAttribute("method"));
    });
});

/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7(";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7(";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7(9";
  }
  /* в других случаях просто 7 (  */
  return "7(";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
// UPD: удалены пробелы у скобок из за которых номер не читался телегой как ссылка
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ")";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const content = document.querySelector(".all-blog-container");
  const pag_block = document.querySelector(".blog-cards-wrapper");
  console.log(content);
  const itemsPerPage = 10;
  let currentPage = 0;
  const items = Array.from(content.getElementsByTagName("a"));
  //const items = Array.from(content.children);
  console.log(items);
  // const children = Array.from(content.children);
  // console.log(children);

  function showPage(page) {
    const startIndex = page * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    items.forEach((item, index) => {
      item.classList.toggle("hidden", index < startIndex || index >= endIndex);
    });
    updateActiveButtonStates();
  }

  function createPageButtons() {
    const totalPages = Math.ceil(items.length / itemsPerPage);
    const paginationContainer = document.createElement("div");
    const paginationDiv = document.body.appendChild(paginationContainer);
    paginationContainer.classList.add("pagination");

    // Add page buttons
    for (let i = 0; i < totalPages; i++) {
      const pageButton = document.createElement("button");
      pageButton.textContent = i + 1;
      pageButton.addEventListener("click", () => {
        currentPage = i;
        showPage(currentPage);
        updateActiveButtonStates();
      });

      content.appendChild(paginationContainer);
      paginationDiv.appendChild(pageButton);
    }
  }

  function updateActiveButtonStates() {
    const pageButtons = document.querySelectorAll(".pagination button");
    pageButtons.forEach((button, index) => {
      if (index === currentPage) {
        button.classList.add("active");
      } else {
        button.classList.remove("active");
      }
    });
  }

  createPageButtons(); // Call this function to create the page buttons initially
  showPage(currentPage);
});
