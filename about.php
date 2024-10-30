<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>О компании</title>
  </head>
  <body>
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Автомобильная химия</a>
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
          <a href="#" class="mobile-menu-link">Собственные торговые марки</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Автохимия AG-Tech</a>
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
    <nav class="navbar navbar-light">
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
          <a href="#" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Собственные торговые марки</a>
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
      <button class="navbar-button button" data-toggle="modal">
        <svg class="button-icon" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->

    <section class="bg-grey header_inner1">
      <div class="container">
        <div class="separator"></div>
        <h1 class="section-title-about">О компании</h1>
        <ul class="breadcrumb breadcrumb_light">
          <li>
            <a class="breadcrumb_li" href="../index.php">Главная</a>
          </li>
          <li><a class="breadcrumb_li" href="../about.php">О компании</a></li>
        </ul>
      </div>
    </section>
    <!-- section header_inner -->

    <section class="section founder">
      <img src="img/founder.jpg" alt="" class="founder-photo" />
      <div class="container">
        <div class="founder-content-wrapper">
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
            <a href="#" class="button-link">
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
            <div class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </div>
            <div class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </div>
            <div class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </div>
            <div class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </div>
            <div class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </div>
            <div class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </div>
            <div class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </div>
            <div class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </div>
            <div class="clients-logo-item">
              <img src="img/client.png" alt="" class="clients-logo" />
            </div>
          </div>
          <!-- /.clients-logo -->
        </div>
        <!-- /.clients-wrapper -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.section section clients -->
    <? include_once('footer.php');?>
