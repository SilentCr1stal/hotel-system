<div class="wrapper__contentPage">
  <header class="header header-realy-big">
    <div class="header-image-wrap">
      <div class="header-image" id="bgPict"></div>
    </div>
    <div class="header-shadow"></div>
    <div class="block-width height100">
      <div class="auth-container" data-role="auth-container">
        <div class="header__user-profile">
          <div class="user-profile__wrapper dropdown">
            <a class="nav-link d-flex" href="" id="userProfileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="user-profile__pin">
                <i class="fas fa-user"></i>
              </div>
              <div class="user-profile__text ps-2">
                <span class="text">Личный кабинет</span>
              </div>
            </a>
            <ul class="dropdown-menu user-profile__list" aria-labelledby="userProfileDropdown">
              <div class="user-profile__auth p-3">
                <?php
                if (!isset($_SESSION['email_user']) && !isset($_SESSION['password_user'])) {
                ?>
                  <div class="auth__description-block">
                    <span class="description">
                      Зарегистрируйтесь или войдите в
                      существующую учетную запись
                    </span>
                  </div>
                  <div class="auth__form-block d-grid gap-2 py-2">
                    <a href="./authorization/form_register.php" class="btn btn-primary btn-reg link-profile" style="font-size: 1.2rem;">
                      Регистрация
                    </a>
                    <a href="./authorization/form_auth.php" class="btn btn-primary btn-log link-profile" style="font-size: 1.2rem;">
                      Авторизация
                    </a>
                  </div>
                <?php
                } else {
                ?>
                  <div class="auth__form-block d-grid gap-2 py-2">
                    <a href="index.php?page=profile" class="btn btn-primary btn-log link-profile" style="font-size: 1.2rem;">
                      Личный кабинет
                    </a>
                    <a href="./authorization/logout.php" class="btn btn-primary btn-reg link-profile" style="font-size: 1.2rem;">
                      Выход
                    </a>
                  </div>
                <?php
                }
                ?>
              </div>
            </ul>
          </div>
        </div>
      </div>
      <div class="header-location">
        <a href="index.php?page=catalog&city_category=6" class="header-location-info">
          <span class="header-location-name">
            Нижний Новгород, Россия
          </span>
          <span class="header-location-counter">Отели и гостиницы</span>
        </a>
      </div>
      <a class="logo logo_header" href="index.php?page=index" title="Поиск и бронирование отелей">
        <img src="./src/images/logo/logo.png" width="135" height="75" alt="GuestHouse" />
      </a>
      <div class="header-form-area">
        <h1>Поиск отелей, хостелов и апартаментов</h1>
        <div class="header-subtitle">
          Забронируйте номер по выгодной цене!
        </div>
        <div class="form-wrap form-wrap_line">
          <form class="form form_line" action="./index.php?page=catalog&city_category=all" method="POST">
            <ul class="form-list">
              <li class="form-item form-autocomplete ui-front">
                <div class="hlf-input hlf-input--ac">
                  <input type="search" name="search" placeholder="Укажите город, отель или место" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="ui-autocomplete-input" />
                  <div class="icon-load"></div>
                  <div class="hint">
                    Введите, пожалуйста, название города или отеля
                  </div>
                </div>
              </li>
              <li class="form-item form-submit">
                <button type="submit">
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