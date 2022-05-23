<!DOCTYPE html>
<html lang="ru_RU" dir="ltr">

<head>
  <meta name="keywords" content="отели, гостиницы, бронирований отелей, бронирование гостиниц, проживание, скидки на отели, сравнение цен на отели" />
  <meta name="description" content="Все гостиницы России с ценами, бронирование отелей от недорогих до гостиниц премиум класса" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossOrigin="anonymous" referrerPolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossOrigin="anonymous"></script>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    GuestHouse - Все гостиницы России с ценами, бронирование отелей от
    недорогих до гостиниц премиум класса
  </title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Kurale&family=Macondo&family=Oleo+Script+Swash+Caps&family=Playfair+Display&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="shortcut icon" href="./public/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="./src/css/global.css" />
  <?php
  if ($_GET['page'] == 'shop')
    // echo '<link rel="stylesheet" href="./src/css/products.css">';
  ?>
  <!-- <link rel="stylesheet" href="./src/css/header.css" />
  <link rel="stylesheet" href="./src/css/footer.css" />
  <link rel="stylesheet" href="./src/css/basket.css" /> -->
  <?php
if ($_GET['page'] == 'openCard')
  // echo '<link rel="stylesheet" href="./src/css/product.css" />';
  ?>
  <?php
if ($_GET['page'] == 'profile' || $_GET['page'] == 'admin' || $_GET['page'] == 'register')
  // echo '<link rel="stylesheet" href="./src/css/auth.css" />';
  ?>
  <script defer src="./src/js/basket.js"></script>
  <script defer src="./src/js/jquery.js"></script>
  <script defer src="./src/js/site.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

</head>

<body>
  <div class="wrapper__contentPage">
    <header class="header header-realy-big">
      <div class="header-image-wrap">
        <div class="header-image" id="bgPict"></div>
      </div>
      <div class="header-shadow"></div>
      <div class="block-width height100">
        <div class="auth-container" data-role="auth-container"></div>
        <div class="header-location">
          <a href="#" class="header-location-info">
            <span class="header-location-name">
              Нижний Новгород, Россия
            </span>
            <span class="header-location-counter">Отели и гостиницы</span>
          </a>
        </div>
        <a class="logo logo_header" href="#" title="Поиск и бронирование отелей">
          <img src="./src/images/logo/logo.png" width="135" height="75" alt="GuestHouse" />
        </a>
        <div class="header-form-area">
          <h1>Поиск отелей, хостелов и апартаментов</h1>
          <div class="header-subtitle">
            Забронируйте номер по выгодной цене!
          </div>
          <div class="form-wrap form-wrap_line">
            <form class="form form_line" action="" method="get" target="_blank">
              <ul class="form-list">
                <li class="form-item form-autocomplete ui-front">
                  <div class="hlf-input hlf-input--ac">
                    <input type="text" placeholder="Укажите город, отель или место" tabindex="31" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="ui-autocomplete-input" />
                    <div class="icon-load"></div>
                    <i class="icon-close"></i>
                    <div class="hint">
                      Введите, пожалуйста, название города или отеля
                    </div>
                  </div>
                </li>
                <li class="form-item form-datepicker">
                  <div class="hlf-input hlf-input--calendar">
                    <input type="text" placeholder="Прибытие" tabindex="32" height="60" />
                    <input type="text" class="datepicker-hidden hasDatepicker" id="dp1652801999505" />

                    <div class="hint"></div>
                    <div class="pseudo-placeholder">
                      Прибытие
                    </div>
                  </div>
                </li>
                <li class="form-item form-datepicker">
                  <div class="hlf-input hlf-input--calendar">
                    <input type="text" placeholder="Выезд" tabindex="33" height="60" />
                    <input type="text" class="datepicker-hidden hasDatepicker" id="dp1652801999506" />

                    <div class="hint"></div>
                    <div class="pseudo-placeholder">
                      Выезд
                    </div>
                  </div>
                </li>
                <li class="form-item form-submit">
                  <button tabindex="35">
                    Поиск
                  </button>
                </li>
              </ul>
            </form>
          </div>
        </div>
        <div class="header-banner">
          <div id="doubleclick_content_header_banner"></div>
        </div>
      </div>
      <div class="header-triangle">
        <div class="header-triangle-elem header-triangle-elem_left"></div>
        <div class="header-triangle-elem header-triangle-elem_right"></div>
      </div>
    </header>