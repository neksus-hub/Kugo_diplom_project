<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <title>Kugo - Главная страница</title>
  </head>
  <body>
    <nav class="navbar">
      <div class="container">
        <div class="navbar-menu">
          <ul class="navbar-menu-list">
            <li class="navbar-menu-item">
              <a href="#" class="nav-menu-item-link">Сервис</a>
            </li>
            <li class="navbar-menu-item">
              <a href="#" class="nav-menu-item-link">Сотрудничество</a>
            </li>
            <li class="navbar-menu-item">
              <a href="#" class="nav-menu-item-link">Заказать звонок</a>
            </li>
            <li class="navbar-menu-item navbar-networks-link">
              <a href="#" class="nav-menu-social-vb">
                <svg class="nav-social-icon" width="0.8rem" height="0.8rem">
                  <use href="img/sprite.svg#vb"></use>
                </svg>
              </a>
              <a href="#" class="nav-menu-social-ws">
                <svg class="nav-social-icon" width="0.8rem" height="0.8rem">
                  <use href="img/sprite.svg#ws"></use>
                </svg>
              </a>
              <a href="#" class="nav-menu-social-tg">
                <svg class="nav-social-icon" width="0.8rem" height="0.8rem">
                  <use href="img/sprite.svg#tg"></use>
                </svg>
              </a>
            </li>
          </ul>
          <!-- /.navbar-menu-list -->
          <div class="header-phone">
            <a href="tel:+78005055461" class="header-phone-link"
              >+7 (800) 505-54-61</a
            >
          </div>
        </div>
        <!-- /.navbar-menu -->
      </div>
      <!-- /.container -->
      <hr class="seporator" />
    </nav>
    <!-- /.navbar -->

    <div class="navbar-bottom">
      <div class="container">
        <div class="navbar-bottom-wrapper">
          <div class="logo-block">
            <h1 class="logo">KUGOO</h1>
          </div>
          <button class="catalog-button button">
            <div class="line-block">
              <div class="line-catalog-button line-catalog-button-first"></div>
              <div class="line-catalog-button line-catalog-button-second"></div>
              <div class="line-catalog-button line-catalog-button-third"></div>
            </div>
            <a href="#" class="catalog-button-link">Каталог</a>
          </button>
        <!-- /.catalog -->
        <div class="search-box">
          <input
            type="text"
            class="search-txt"
            type="text"
            name=""
            placeholder="Искать самокат KUGO"
          />
          <a href="#" class="search-btn">
            <svg class="nav-social-icon" width="1rem" height="1rem">
              <use href="img/sprite.svg#search"></use>
            </svg>
          </a>
        </div>
        <div class="favorites">
          <div class="favorites-icon-block">
            <img src="img/scales.svg" alt="scales" class="scales-icon">
            <svg class="favorites-icon" width="1.25rem" height="1.25rem">
              <use href="img/sprite.svg#heart"></use>
            </svg>
          </div>
          <!-- /.favorits-icon-block -->
          <div class="shopping-cart-block">
            <svg class="shopping-cart-icon" width="1.25rem" height="1.25rem">
              <use href="img/sprite.svg#shopping-cart"></use>
            </svg>
            <span class="shopping-cart-title">Корзина</span>
          </div>
          </div>
        </div>
        <!-- /.favorits -->
        </div>
        <!-- /.navbar-bottom-wrapper -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.navbar-bottom -->

    <header class="header header-img">
      <div class="header-content-wrapper">
        <div class="container">
          <div class="contacts-header">
            <div class="contacts-header-wrapper">
              <div class="header-adress-block">
                <svg class="header-adress-icon" width="0.9rem" height="0.9rem">
                  <use href="img/sprite.svg#pin"></use>
                </svg>
                <address class="header-adress">
                  <a href="#" class="header-adress-link">
                    Восточно-Кругликовская улица, 86
                  </a>
                </address>
              </div>
              <!-- /.header-adress -->
              <div class="schedule-block">
                <p class="schedule">Вт - Сб 10:00 - 20:00</p>
              </div>
            </div>
            <!-- /.contacts-header-wrapper -->
          </div>
          <!-- /.contacts-header -->
          <div class="header-content">
            <h1 class="header-content-title">Запишитесь на бесплатный тест-драйв электросамокатов</h1>
            <p class="header-content-text">в Москве без ограничения по времени</p>
            <div class="header-features">
              <div class="header-features-item">
                <div class="shell-features-icon">
                  <svg class="header-adress-icon" width="1.6rem" height="1.6rem">
                    <use href="img/sprite.svg#scooter"></use>
                  </svg>
                </div>
                <p class="header-features-text">Поймете, какая модель вам подходит</p>
              </div>
              <div class="header-features-item">
                <div class="shell-features-icon">
                  <svg class="header-adress-icon" width="1.6rem" height="1.6rem">
                    <use href="img/sprite.svg#energy"></use>
                  </svg>
                </div>
                <p class="header-features-text">Проверите лучшие самокаты в деле</p>
              </div>
            </div>
            <!-- /.header-features -->
            <button class="button-light button-header-content">Записаться</button>
          </div>
          <!-- /.header-content -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.header-content-wrapper -->
    </header>
    <!-- /.header -->

    <section class="support">
      <div class="container">
        <div class="support-wrapper">
          <div class="support-info">
            <h1 class="support-info-title">Определите максимально подходящую вам модель
              не теоретически, а на практике</h1>
              <p class="support-info-text"><b>Тест-драйв поможет:</b></p>
              <ul class="support-info-list">
                <li class="support-list-item">
                  <svg class="support-list-icon" width="1.6rem" height="1.6rem">
                    <use href="img/sprite.svg#success"></use>
                  </svg>
                  <p class="support-list-text"><b>Понять</b> подходит ли вам конкретная модель;</p>
                </li>
                <li class="support-list-item">
                  <svg class="support-list-icon" width="1.6rem" height="1.6rem">
                    <use href="img/sprite.svg#success"></use>
                  </svg>
                  <p class="support-list-text"><b>Испытать</b> самокат в «реальной жизни»;</p>
                </li>
                <li class="support-list-item">
                  <svg class="support-list-icon" width="1.6rem" height="1.6rem">
                    <use href="img/sprite.svg#success"></use>
                  </svg>
                  <p class="support-list-text"><b>Оценить</b> удобство хранения и эксплуатации;</p>
                </li>
                <li class="support-list-item">
                  <svg class="support-list-icon" width="1.6rem" height="1.6rem">
                    <use href="img/sprite.svg#success"></use>
                  </svg>
                  <p class="support-list-text"><b>Узнать</b> реальные характеристики и возможности модели.</p>
                </li>
              </ul>
              <!-- /.support-info-list -->
          </div>
          <!-- /.support-info -->
          <div class="support-img-block">
            <img src="./img/scooter.png" alt="scooter" class="support-img">
          </div>
        </div>
        <!-- /.support-wrapper -->
      </div>
      <!-- /.container -->
    </section>

    <section class="education">
      <div class="container">
        <div class="education-wrapper">
          <div class="education-img-block">
            <img src="./img/scooter-double.png" alt="scooter" class="education-img">
          </div>
          <div class="education-info">
            <h1 class="education-info-title">Научим правильной и безопасной езде в городе вас или вашего ребенка</h1>
              <p class="education-info-text"><b>На обучении специалист расскажет:</b></p>
              <ul class="education-info-list">
                <li class="education-list-item">
                  <svg class="education-list-icon" width="1.375rem" height="1.375rem">
                    <use href="img/sprite.svg#success"></use>
                  </svg>
                  <p class="education-list-text">Как подготовить самокат к поездке;</p>
                </li>
                <li class="education-list-item">
                  <svg class="education-list-icon" width="1.375rem" height="1.375rem">
                    <use href="img/sprite.svg#success"></use>
                  </svg>
                  <p class="education-list-text">Как «завести» самокат;</p>
                </li>
                <li class="education-list-item">
                  <svg class="education-list-icon" width="1.375rem" height="1.375rem">
                    <use href="img/sprite.svg#success"></use>
                  </svg>
                  <p class="education-list-text">Как вести себя во время поездки и обезопасить себя и окружающих;</p>
                </li>
                <li class="education-list-item">
                  <svg class="education-list-icon" width="1.375rem" height="1.375rem">
                    <use href="img/sprite.svg#success"></use>
                  </svg>
                  <p class="education-list-text">Как складывать и раскладывать электросамокат;</p>
                </li>
                <li class="education-list-item">
                  <svg class="education-list-icon" width="1.375rem" height="1.375rem">
                    <use href="img/sprite.svg#success"></use>
                  </svg>
                  <p class="education-list-text">Как ухаживать за своим девайсом.</p>
                </li>
              </ul>
              <!-- /.education-info-list -->
          </div>
          <!-- /.education-info -->
        </div>
        <!-- /.education-wrapper -->
      </div>
      <!-- /.container -->
    </section>



    <section class="cards">
      <div class="container">
        <div class="cards-title-block">
          <h1 class="cards-title">Сейчас для тест-драйва и обучения доступны следующие модели</h1>
        </div>

        <!-- Слайдер -->
        <div class="swiper">
          <!--Обертка-->
          <div class="swiper-wrapper">
            <!-- Слайды -->
            <div class="swiper-slide">
              <div class="cards-item">
                <div class="card-img-wrapper">
                  <div class="card-features">
                    <div class="card-feature-text-block">
                      <p class="card-feature-text">ХИТ</p>
                    </div>
                    <img src="/img/scales-grey.svg" alt="scales" class="card-feature-icon">
                  </div>
                  <img src="./img/scooter-card-2.png" alt="scooter" class="card-img">
                </div>
                <div class="card-info">
                <div class="cards-options">
                  <h3 class="card-title">Kugoo Kirin M4</h3>
                  <ul class="card-options-list">
                    <li class="card-options-item">
                      <svg class="education-list-icon" width="18px" height="18px">
                        <use href="img/sprite.svg#accumulator"></use>
                      </svg>
                      <p class="option-text">2000 mAh</p>
                    </li>
                    <li class="card-options-item">
                      <svg class="education-list-icon" width="18px" height="18px">
                        <use href="img/sprite.svg#speed"></use>
                      </svg>
                      <p class="option-text">60 км/ч</p>
                    </li>
                    <li class="card-options-item">
                      <svg class="education-list-icon" width="18px" height="18px">
                        <use href="img/sprite.svg#power"></use>
                      </svg>
                      <p class="option-text">1,2 л.с.</p>
                    </li>
                    <li class="card-options-item">
                      <svg class="education-list-icon" width="18px" height="18px">
                        <use href="img/sprite.svg#timer"></use>
                      </svg>
                      <p class="option-text">5 часов</p>
                    </li>
                  </ul>
                </div>
                <!-- /.cards-options -->
                <div class="price">
                  <div class="price-text">
                    <p class="old-price">39 900 ₽</p>
                    <h3 class="new-price">29 900 ₽</h3>
                  </div>
                  <div class="price-icons">
                    <div class="price-icon-item">
                      <svg class="price-icon" width="20px" height="20px">
                        <use href="img/sprite.svg#basket-light"></use>
                      </svg>
                    </div>
                    <div class="price-icon-item">
                      <svg class="price-icon" width="20px" height="20px">
                        <use href="img/sprite.svg#heart-light"></use>
                      </svg>
                    </div>
                  </div>
                </div>
                <!-- /.price -->
                <button class="button card-button">Записаться на тест-драйв</button>
                </div>
              </div>
              <!-- /.cards-item -->
            </div>
            <div class="swiper-slide">
              <div class="cards-item">
                <div class="card-img-wrapper">
                  <div class="card-features">
                    <div class="card-feature-new-block">
                      <p class="card-feature-text-new">Новинка</p>
                    </div>
                    <img src="/img/scales-grey.svg" alt="scales" class="card-feature-icon">
                  </div>
                  <img src="./img/scooter-card-2.png" alt="scooter" class="card-img">
                </div>
                <div class="card-info">
                <div class="cards-options">
                  <h3 class="card-title">Kugoo Kirin M4</h3>
                  <ul class="card-options-list">
                    <li class="card-options-item">
                      <svg class="education-list-icon" width="18px" height="18px">
                        <use href="img/sprite.svg#accumulator"></use>
                      </svg>
                      <p class="option-text">2000 mAh</p>
                    </li>
                    <li class="card-options-item">
                      <svg class="education-list-icon" width="18px" height="18px">
                        <use href="img/sprite.svg#speed"></use>
                      </svg>
                      <p class="option-text">60 км/ч</p>
                    </li>
                    <li class="card-options-item">
                      <svg class="education-list-icon" width="18px" height="18px">
                        <use href="img/sprite.svg#power"></use>
                      </svg>
                      <p class="option-text">1,2 л.с.</p>
                    </li>
                    <li class="card-options-item">
                      <svg class="education-list-icon" width="18px" height="18px">
                        <use href="img/sprite.svg#timer"></use>
                      </svg>
                      <p class="option-text">5 часов</p>
                    </li>
                  </ul>
                </div>
                <!-- /.cards-options -->
                <div class="price">
                  <div class="price-text">
                    <p class="old-price">39 900 ₽</p>
                    <h3 class="new-price">29 900 ₽</h3>
                  </div>
                  <div class="price-icons">
                    <div class="price-icon-item">
                      <svg class="price-icon" width="20px" height="20px">
                        <use href="img/sprite.svg#basket-light"></use>
                      </svg>
                    </div>
                    <div class="price-icon-item">
                      <svg class="price-icon" width="20px" height="20px">
                        <use href="img/sprite.svg#heart-light"></use>
                      </svg>
                    </div>
                  </div>
                </div>
                <!-- /.price -->
                <button class="button card-button">Записаться на тест-драйв</button>
                </div>
              </div>
              <!-- /.cards-item -->
            </div>
            <div class="swiper-slide">
              <div class="cards-item">
                <div class="card-img-wrapper">
                  <div class="card-features">
                    <div class="card-feature-text-block">
                      <p class="card-feature-text">ХИТ</p>
                    </div>
                    <img src="/img/scales-grey.svg" alt="scales" class="card-feature-icon">
                  </div>
                  <img src="./img/scooter-card-2.png" alt="scooter" class="card-img">
                </div>
                <div class="card-info">
                <div class="cards-options">
                  <h3 class="card-title">Kugoo Kirin M4</h3>
                  <ul class="card-options-list">
                    <li class="card-options-item">
                      <svg class="education-list-icon" width="18px" height="18px">
                        <use href="img/sprite.svg#accumulator"></use>
                      </svg>
                      <p class="option-text">2000 mAh</p>
                    </li>
                    <li class="card-options-item">
                      <svg class="education-list-icon" width="18px" height="18px">
                        <use href="img/sprite.svg#speed"></use>
                      </svg>
                      <p class="option-text">60 км/ч</p>
                    </li>
                    <li class="card-options-item">
                      <svg class="education-list-icon" width="18px" height="18px">
                        <use href="img/sprite.svg#power"></use>
                      </svg>
                      <p class="option-text">1,2 л.с.</p>
                    </li>
                    <li class="card-options-item">
                      <svg class="education-list-icon" width="18px" height="18px">
                        <use href="img/sprite.svg#timer"></use>
                      </svg>
                      <p class="option-text">5 часов</p>
                    </li>
                  </ul>
                </div>
                <!-- /.cards-options -->
                <div class="price">
                  <div class="price-text">
                    <p class="old-price">39 900 ₽</p>
                    <h3 class="new-price">29 900 ₽</h3>
                  </div>
                  <div class="price-icons">
                    <div class="price-icon-item">
                      <svg class="price-icon" width="20px" height="20px">
                        <use href="img/sprite.svg#basket-light"></use>
                      </svg>
                    </div>
                    <div class="price-icon-item">
                      <svg class="price-icon" width="20px" height="20px">
                        <use href="img/sprite.svg#heart-light"></use>
                      </svg>
                    </div>
                  </div>
                </div>
                <!-- /.price -->
                <button class="button card-button">Записаться на тест-драйв</button>
                </div>
              </div>
              <!-- /.cards-item -->
            </div>
            <div class="swiper-slide">
              <div class="cards-item">
                <div class="card-img-wrapper">
                  <div class="card-features">
                    <div class="card-feature-new-block">
                      <p class="card-feature-text-new">Новинка</p>
                    </div>
                    <img src="/img/scales-grey.svg" alt="scales" class="card-feature-icon">
                  </div>
                  <img src="./img/scooter-card-2.png" alt="scooter" class="card-img">
                </div>
                <div class="card-info">
                <div class="cards-options">
                  <h3 class="card-title">Kugoo Kirin M4</h3>
                  <ul class="card-options-list">
                    <li class="card-options-item">
                      <svg class="education-list-icon" width="18px" height="18px">
                        <use href="img/sprite.svg#accumulator"></use>
                      </svg>
                      <p class="option-text">2000 mAh</p>
                    </li>
                    <li class="card-options-item">
                      <svg class="education-list-icon" width="18px" height="18px">
                        <use href="img/sprite.svg#speed"></use>
                      </svg>
                      <p class="option-text">60 км/ч</p>
                    </li>
                    <li class="card-options-item">
                      <svg class="education-list-icon" width="18px" height="18px">
                        <use href="img/sprite.svg#power"></use>
                      </svg>
                      <p class="option-text">1,2 л.с.</p>
                    </li>
                    <li class="card-options-item">
                      <svg class="education-list-icon" width="18px" height="18px">
                        <use href="img/sprite.svg#timer"></use>
                      </svg>
                      <p class="option-text">5 часов</p>
                    </li>
                  </ul>
                </div>
                <!-- /.cards-options -->
                <div class="price">
                  <div class="price-text">
                    <p class="old-price">39 900 ₽</p>
                    <h3 class="new-price">29 900 ₽</h3>
                  </div>
                  <div class="price-icons">
                    <div class="price-icon-item">
                      <svg class="price-icon" width="20px" height="20px">
                        <use href="img/sprite.svg#basket-light"></use>
                      </svg>
                    </div>
                    <div class="price-icon-item">
                      <svg class="price-icon" width="20px" height="20px">
                        <use href="img/sprite.svg#heart-light"></use>
                      </svg>
                    </div>
                  </div>
                </div>
                <!-- /.price -->
                <button class="button card-button">Записаться на тест-драйв</button>
                </div>
              </div>
              <!-- /.cards-item -->
            </div>
          </div>
          <!-- Переключение -->
          <div class="slider-button-wrapper">
            <div class="slider-buttons">
              <div class="slider-button-prev">
                <svg class="slider-button-icon" width="36px" height="24px">
                  <use href="img/sprite.svg#arrow-prev"></use>
                </svg>
              </div>
              <div class="slider-button-next">
                <svg class="slider-button-icon" width="36px" height="24px">
                  <use href="img/sprite.svg#arrow-next"></use>
                </svg>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- /.cards -->

    <section class="cta">
      <div class="container">
        <form action="handler.php" method="POST" class="cta-form">
          <div class="cta-wrapper">
            <div class="cta-info">
              <h1 class="cta-title">
                Нет нужной модели, которую хотите протестировать?
              </h1>
              <p class="cta-text">Оставьте заявку, и менеджер подберет нужный самокат</p>
              <div class="input-group">
                <input type="text" class="cta-input" placeholder="+7 (___) __ - __ - __" id="phone" name="userphone">
                <button class="button cta-button" type="submit">Оставить заявку на тест-драйв</button>
              </div>
              <div class="checkbox-wrapper">
                <input type="checkbox" class="checkbox" id="checkbox" name="checkbox">
                <label for="checkbox" class="checkbox-label">Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и политикой конфиденциальности</label>
              </div>
            </div>
            <!-- /.card-info -->
            <img src="/img/cta-img.png" alt="cta" class="cta-img">
          </div>
          <!-- /.cta-wrapper -->
        </form>
      </div>
    </section>

    <script src="js/just-validate.production.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
