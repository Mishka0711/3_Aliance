<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    /> -->
    <!-- <link rel="stylesheet" href="./css/swiper-bundle.min.css" /> -->
    <!-- <link rel="stylesheet" href="./css/normalize.css" /> -->
    <link rel="stylesheet" href="./css/style.css" />
    <script>
          /*! modernizr 3.6.0 (Custom Build) | MIT *
    * https://modernizr.com/download/?-webp-setclasses !*/
      !function(e,n,A){function o(e,n){return typeof e===n}function t(){var e,n,A,t,a,i,l;for(var f in r)if(r.hasOwnProperty(f)){if(e=[],n=r[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(t=o(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)i=e[a],l=i.split("."),1===l.length?Modernizr[l[0]]=t:(!Modernizr[l[0]]||Modernizr[l[0]]instanceof Boolean||(Modernizr[l[0]]=new Boolean(Modernizr[l[0]])),Modernizr[l[0]][l[1]]=t),s.push((t?"":"no-")+l.join("-"))}}function a(e){var n=u.className,A=Modernizr._config.classPrefix||"";if(c&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+A+"no-js(\\s|$)");n=n.replace(o,"$1"+A+"js$2")}Modernizr._config.enableClasses&&(n+=" "+A+e.join(" "+A),c?u.className.baseVal=n:u.className=n)}function i(e,n){if("object"==typeof e)for(var A in e)f(e,A)&&i(A,e[A]);else{e=e.toLowerCase();var o=e.split("."),t=Modernizr[o[0]];if(2==o.length&&(t=t[o[1]]),"undefined"!=typeof t)return Modernizr;n="function"==typeof n?n():n,1==o.length?Modernizr[o[0]]=n:(!Modernizr[o[0]]||Modernizr[o[0]]instanceof Boolean||(Modernizr[o[0]]=new Boolean(Modernizr[o[0]])),Modernizr[o[0]][o[1]]=n),a([(n&&0!=n?"":"no-")+o.join("-")]),Modernizr._trigger(e,n)}return Modernizr}var s=[],r=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout(function(){n(A[e])},0)},addTest:function(e,n,A){r.push({name:e,fn:n,options:A})},addAsyncTest:function(e){r.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var f,u=n.documentElement,c="svg"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;f=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,A){return e.call(n,A)}}(),l._l={},l.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},l._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout(function(){var e,o;for(e=0;e<A.length;e++)(o=A[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){l.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,n,A){function o(n){var o=n&&"load"===n.type?1==t.width:!1,a="webp"===e;i(e,a&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],A=n.shift();e(A.name,A.uri,function(A){if(A&&"load"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)})}),t(),a(s),delete l.addTest,delete l.addAsyncTest;for(var p=0;p<Modernizr._q.length;p++)Modernizr._q[p]();e.Modernizr=Modernizr}(window,document);
    </script>
    <title>Aliance Production</title>
  </head>
  <body class="front-page">
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="./about.php" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./contracts.php" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a href="./product_autohim.php" class="mobile-submenu-link">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link"
                >Дезинфицирующие средства"</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link"
                >Косметическая продукция</a
              >
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./trademarks.php" class="mobile-menu-link">Собственные торговые марки</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a href="./AG-Tech.php" class="mobile-submenu-link">Автохимия AG-Tech</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Автохимия AP</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <svg class="phone-icon">
          <use href="img/sprite.svg#mestop"></use>
        </svg>
        <address class="mobile-info-adress">
          г. Мосвка, Холодильный пер. 4к1с8
        </address>
      </div>
      <div class="mobile-info">
        <svg class="phone-icon">
          <use href="img/sprite.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
          a.dragunov@tdaliance.ru
        </a>
      </div>
      <!-- /.mobile-info -->
      <div class="social-info">
        <a href="#" class="social-logo">
          <svg class="social-icon">
            <use href="img/sprite.svg#VK"></use>
          </svg>
        </a>
        <a href="#" class="social-logo">
          <svg class="social-icon">
            <use href="img/sprite.svg#inst"></use>
          </svg>
        </a>
      </div>
      <!-- /.social -->
    </div>
    <nav class="navbar">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
        <svg class="logo-svg logo-light">
          <use href="img/sprite.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark">
          <use href="img/sprite.svg#logo"></use>
        </svg>
        <!-- <svg class="logo-svg"> старый режим логотипа
          <use href="img/sprite.svg#logo-light"></use>
        </svg> -->
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="./about.php" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="./contracts.php" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контакты</a>
        </li>
      </ul>
      <div class="header-phone">
        <svg class="phone-icon">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link"
          >+7 (499) 686-10-14</a
        >
      </div>
      <!-- /.header-phone -->
      <button class="navbar-button button" data-toggle="modal"  data-target="#feedback-modal">
        <svg class="button-icon" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
    <header class="header header-image">
      <div class="container">
        <div class="header-content">
          <div class="separator"></div>
          <h1 class="header-title">
            <?php  echo "Комплексное обеспечение товарами и расходными материалами бизнеса"; ?>
          </h1>
          <p class="header-text">
            Высокий уровень вовлечения представителей целевой аудитории является
            четким доказательством простого факта: высококачественный прототип
            будущего проекта напрямую зависит от анализа существующих паттернов
            поведения.
          </p>
          <button class="company-button button" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</button>
        </div>
        <!-- /.header-content -->

        <!-- основной блок слайдера -->
        <div class="swiper">
          <!-- обертка слайдера -->
          <ul class="swiper-wrapper header-features">
            <!-- слайды -->
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#1_time"></use>
              </svg>
              <p class="header-features-text">Непрерывная работа c 2017 года</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#2_sert"></use>
              </svg>
              <p class="header-features-text">Вся продукция сертифицирована</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#3_control"></use>
              </svg>
              <p class="header-features-text">
                Контроль качества на всех этапах
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#4_delivery"></use>
              </svg>
              <p class="header-features-text">
                Возможны поставки по всей России
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#5_speed"></use>
              </svg>
              <p class="header-features-text">Оперативное производство</p>
            </li>
          </ul>

          <!-- кнопки вперед назад -->
          <div class="primary-buttons-wrapper slider-buttons">
            <div class="slider-button-prev">
              <svg class="button-arrow-wh" width="36" height="24">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-button-next">
              <svg class="button-arrow-wh" width="36" height="24">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </header>
    <section class="section section-light">
      <div class="container">
        <div class="separator"></div>
        <h2 class="section-title">схема работы</h2>
        <!-- основной блок слайдера -->
        <div class="swiper2">
          <!-- обертка слайдера -->
          <ul class="swiper-wrapper steps">
            <!-- слайды -->
            <li class="swiper-slide steps-item">
              <span class="steps-num">01</span>
              <h3 class="steps-title">Знакомство</h3>
              <p class="steps-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
              <a href="#" class="button-link" data-toggle="modal" data-target="#feedback-modal">Оставить заявку</a>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">02</span>
              <h3 class="steps-title">Заключение договора</h3>
              <p class="steps-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">03</span>
              <h3 class="steps-title">Производство</h3>
              <p class="steps-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">04</span>
              <h3 class="steps-title">Доставка</h3>
              <p class="steps-text">
                В частности, экономическая повестка сегодняшнего дня говорит о
                возможностях приоритизации разума над эмоциями.
              </p>
            </li>
          </ul>

          <!-- кнопки вперед назад -->
          <div class="steps-slider-buttons primary-buttons-wrapper">
            <div class="steps-slider-button-prev primary-button-prev">
              <svg class="features-icon button-arrow-wh" width="36" height="24">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="steps-slider-button-next primary-button-next">
              <svg class="features-icon button-arrow-wh" width="36" height="24">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <section class="section production">
      <div class="container">
        <div class="separator"></div>
        <h2 class="section-title">Контрактное производство</h2>
        <div class="cards">
          <a href="./product_autohim.php" class="card">
            <div class="card-content">
              <h3 class="card-title">Автомобильная химия</h3>
              <p class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>
            <!-- /.card-content -->

            <img
              src="./img/avto-him.png"
              alt="Автомобильная химия"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Бытовая химия</h3>
              <p class="card-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </div>
            <!-- /.card-content -->

            <img
              src="./img/bit-him.png"
              alt="Бытовая химия"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Дезинфицирующие средства</h3>
              <p class="card-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </div>
            <!-- /.card-content -->

            <img
              src="./img/dezinfect.png"
              alt="Дезинфицирующие средства"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Пищевые аэрозоли</h3>
              <p class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>
            <!-- /.card-content -->

            <img
              src="./img/dezinfect.png"
              alt="Пищевые аэрозоли"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Косметическая продукция</h3>
              <p class="card-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </div>
            <!-- /.card-content -->

            <img
              src="./img/avto-him.png"
              alt="Косметическая продукция"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Краски аэрозольные</h3>
              <p class="card-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </div>
            <!-- /.card-content -->

            <img
              src="./img/bit-him.png"
              alt="Краски аэрозольные"
              class="card-image"
            />
          </a>
        </div>
        <!-- /.cards -->
      </div>
    </section>

    <?php $block_title= "Собственные торговые марки"; include_once('./template-parts/trademarks-block.php')?>

    <section class="section founder-section">

      <!-- <picture class="founder-photo founder-photo-left">
        <source type="image/webp" srcset="img/founder.webp">
        <source type="image/jpeg" srcset="img/founder.jpg">
        <img src="img/founder.jpg"  alt="Краски аэрозольные"/>
      </picture> -->
      <img src="img/founder.jpg" class="founder-photo founder-photo-left" alt="Краски аэрозольные"/>
      <div class="container">
        <div class="founder-content-wrapper  f-c-w-right">
          <div class="founder-content">
            <div class="separator"></div>
            <h2 class="section-title section-title-founder">
              Отношение к делу <br />
              и к клиентам
            </h2>
            <p class="founder-text">
              Кстати, интерактивные прототипы описаны максимально подробно.
              Повседневная практика показывает, что укрепление и развитие
              внутренней структуры говорит о возможностях соответствующих
              условий активизации. Внезапно, независимые государства, которые
              представляют собой яркий пример континентально-европейского типа
              политической культуры, будут подвергнуты целой серии независимых
              исследований. С учётом сложившейся международной обстановки,
              синтетическое тестирование выявляет срочную потребность системы
              массового участия.
            </p>
            <p class="founder-text founder-text2">
              А ещё действия представителей оппозиции, превозмогая сложившуюся
              непростую экономическую ситуацию, в равной степени предоставлены
              сами себе. Не следует, однако, забывать, что выбранный нами
              инновационный путь в значительной степени обусловливает важность
              дальнейших направлений развития.
            </p>
            <a href="./about.php" class="button-link">
              <p class="founder-link-1920">Подробнее о компании</p>
              <p class="founder-link-375">О нашей миссии</p></a
            >
          </div>
          <!-- /.founder-content -->
        </div>
        <!-- /.founder-content-wrapper -->
      </div>
    </section>
    <div class="section section clients">
      <div class="container">
        <div class="separator"></div>
        <div class="clients-wrapper">
          <div class="clients-content">
            <h2 class="section-title section-title-client">
              Производим аэрозольную продукцию для разных сфер
            </h2>
            <ul class="clients-list">
              <li class="clients-list-item">
                <svg width="30" height="30" class="client-list-icon">
                  <use href="img/sprite.svg#cl_him"></use>
                </svg>
                Химические производства
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="client-list-icon">
                  <use href="img/sprite.svg#cl_car"></use>
                </svg>
                Автомойки
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="client-list-icon">
                  <use href="img/sprite.svg#cl_eat"></use>
                </svg>
                Пищевая продукция
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="client-list-icon">
                  <use href="img/sprite.svg#cl_brush"></use>
                </svg>
                Лаки и краски
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="client-list-icon">
                  <use href="img/sprite.svg#cl_cosmetic"></use>
                </svg>
                Косметические средства
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="client-list-icon">
                  <use href="img/sprite.svg#cl_car-cosm"></use>
                </svg>
                Автомобильная косметика
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="client-list-icon">
                  <use href="img/sprite.svg#cl_shirt"></use>
                </svg>
                Косметика по уходу за одеждой
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="client-list-icon">
                  <use href="img/sprite.svg#cl_boots"></use>
                </svg>
                Косметика по уходу за обувью
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="client-list-icon">
                  <use href="img/sprite.svg#cl_bricks"></use>
                </svg>
                Строительные материалы
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="client-list-icon">
                  <use href="img/sprite.svg#cl_more"></use>
                </svg>
                И многих других
              </li>
            </ul>
          </div>
          <!-- /.clients-content -->
          <div class="clients-logo-list">
            <a href="#" class="clients-logo-item">
             
            <picture class="clients-logo">
              <source type="image/webp" srcset="img/client.webp">
              <source type="image/png" srcset="img/client.png">
              <img src="img/client.png"  height="70" width="70" alt="Краски аэрозольные"/>
            </picture>
            </a>
            <a href="#" class="clients-logo-item">
             
            <picture class="clients-logo">
              <source type="image/webp" srcset="img/client.webp">
              <source type="image/png" srcset="img/client.png">
              <img src="img/client.png"  height="70" width="70" alt="Краски аэрозольные"/>
            </picture>
            </a>
            <a href="#" class="clients-logo-item">
             
            <picture class="clients-logo">
              <source type="image/webp" srcset="img/client.webp">
              <source type="image/png" srcset="img/client.png">
              <img src="img/client.png"  height="70" width="70" alt="Краски аэрозольные"/>
            </picture>
            </a>
            <a href="#" class="clients-logo-item">
             
            <picture class="clients-logo">
              <source type="image/webp" srcset="img/client.webp">
              <source type="image/png" srcset="img/client.png">
              <img src="img/client.png"  height="70" width="70" alt="Краски аэрозольные"/>
            </picture>
            </a>
            <a href="#" class="clients-logo-item">
             
            <picture class="clients-logo">
              <source type="image/webp" srcset="img/client.webp">
              <source type="image/png" srcset="img/client.png">
              <img src="img/client.png"  height="70" width="70" alt="Краски аэрозольные"/>
            </picture>
            </a>
            <a href="#" class="clients-logo-item">
             
            <picture  class="clients-logo">
              <source type="image/webp" srcset="img/client.webp">
              <source type="image/png" srcset="img/client.png">
              <img src="img/client.png" height="70" width="70" alt="Краски аэрозольные"/>
            </picture>
            </a>
            <a href="#" class="clients-logo-item">
             
            <picture class="clients-logo">
              <source type="image/webp" srcset="img/client.webp">
              <source type="image/png" srcset="img/client.png">
              <img src="img/client.png"  height="70" width="70" alt="Краски аэрозольные"/>
            </picture>
            </a>
            <a href="#" class="clients-logo-item">
             
            <picture class="clients-logo">
              <source type="image/webp" srcset="img/client.webp">
              <source type="image/png" srcset="img/client.png">
              <img src="img/client.png"  height="70" width="70" alt="Краски аэрозольные"/>
            </picture>
            </a>
            <a href="#" class="clients-logo-item">
             
            <picture class="clients-logo">
              <source type="image/webp" srcset="img/client.webp">
              <source type="image/png" srcset="img/client.png">
              <img src="img/client.png"  height="70" width="70" alt="Краски аэрозольные"/>
            </picture>
            </a>
          </div>
          <!-- /.clients-logo -->
        </div>
        <!-- /.clients-wrapper -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.section section clients -->
    <section class="section section-blog">
      <div class="container">
        <div class="separator"></div>
        <h2 class="section-title section-title-blog section-title-blog-main">
          Блог экспертов в области производства
        </h2>
        <!-- Slider main container -->
        <div class="blog-slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="./blog_more.php" class="swiper-slide blog-card"
              ><img src="./img/blog-photo1.jpg" alt="" class="blog-card-image" />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
            <a href="./blog_more.php" class="swiper-slide blog-card"
              ><img src="./img/blog-photo2.jpg" alt="" class="blog-card-image" />
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на независимые элементы. Безусловно,
                высокотехнологичная...
              </p>
            </a>
            <a href="./blog_more.php" class="swiper-slide blog-card"
              ><img src="./img/blog-photo2.jpg" alt="" class="blog-card-image" />
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на независимые элементы. Безусловно,
                высокотехнологичная...
              </p>
            </a>
          </div>

          <div class="blog-slider-footer">
            <a href="./all-blog.php" class="button-link button-link-main">Весь блог</a>
            <!-- кнопки вперед назад -->
            <div class="blog-buttons primary-buttons-wrapper">
              <div class="blog-button-prev primary-button-prev">
                <svg class="button-arrow-wh" width="36" height="24">
                  <use href="img/sprite.svg#arrow-prev"></use>
                </svg>
              </div>
              <div class="blog-button-next primary-button-prev ">
                <svg class="button-arrow-wh" width="36" height="24">
                  <use href="img/sprite.svg#arrow-next"></use>
                </svg>
              </div>
            </div>
            <!-- blog-buttons -->
          </div>
          <!-- /.blog-slider-footer -->
        </div>
      </div>
      <!-- /.container -->
    </section>

    <? include_once('footer.php');?>

