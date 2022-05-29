<?php
$query = 'Select * from hotels where id_hotel = ' . $_GET['hotelId'];
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
$idHotel = $row['id_hotel'];
$fullNameHotel = $row['fullName_hotel'];
$locationHotel = $row['location_hotel'];
$addressHotel = $row['address_hotel'];
$descriptionHotel = $row['description_hotel'];
$imageHotel = $row['image_hotel'];
$priceFromHotel = $row['priceFrom_hotel'];
$ratingHotel = $row['rating_hotel'];
$starsHotel = $row['stars_hotel'];
$hasWifiHotel = $row['hasWifi_hotel'];
$yearHotel = $row['year_hotel'];
?>
<div class="hotel-page__wrapper">
  <div class="zen-roomspage-hotel">
    <div class="zen-roomspage-header zen-roomspage-header-interactive">
      <div class="zen-roomspage-header zen-roomspage-header-has-stars">
        <div class="zen-roomspage-header-content-wrapper">
          <div class="zen-roomspage-header-content">
            <div class="zen-roomspage-header-inner">
              <div class="zen-roomspage-header-title-wrapper">
                <div class="zen-roomspage-title">
                  <div class="zen-roomspage-title-stars-wrapper">
                    <div class="zen-roomspage-title-stars">
                      <!-- <div class="zen-ui-stars">
                        <div class="zen-ui-stars-wrapper">
                          <div class="zen-ui-stars-star"></div>
                        </div>
                        <div class="zen-ui-stars-wrapper">
                          <div class="zen-ui-stars-star"></div>
                        </div>
                        <div class="zen-ui-stars-wrapper">
                          <div class="zen-ui-stars-star"></div>
                        </div>
                        <div class="zen-ui-stars-wrapper">
                          <div class="zen-ui-stars-star"></div>
                        </div>
                      </div> -->
                      <span class="card-stars">
                        <?php
                        for ($i = 0; $i < $starsHotel; $i++) {
                          echo '<i class="fa-solid fa-star" style="color: #ff8e00"></i>';
                        }
                        ?>
                      </span>
                    </div>
                  </div>
                  <div class="zen-roomspage-title-name-wrapper">
                    <h2 class="zen-roomspage-title-name"><?= $fullNameHotel ?></h2>
                  </div>
                  <div class="zen-roomspage-location">
                    <div class="zenroomspagelocation">
                      <div class="zenroomspagelocation-content"><span class="zenroomspagelocation-address link"><?= $addressHotel ?></span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="zen-roomspage-header-calltoaction">
                <div class="zen-roomspage-calltoaction-fixed ">
                  <div class="zen-roomspage-calltoaction-roomtypes">
                    <div class="zen-roomspage-calltoaction-roomtypes-price">
                      <div class="zen-roomspage-calltoaction-roomtypes-price-wrapper">от <strong class="zen-roomspage-calltoaction-roomtypes-price-value"><?= $priceFromHotel ?>&nbsp;₽</strong></div>
                      <a href="#price" class="zen-roomspage-calltoaction-button button-view-primary button-size-s ">Посмотреть цены</a>
                      <div class="zen-roomspage-calltoaction-roomtypes-loyalty"></div>
                      <div class="zen-roomspage-calltoaction-roomtypes-mir"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="zen-roomspage-picks"></div>
            </div>
          </div>
          <div class="zen-roomspage-content">
            <div class="zen-roomspage-content-rating">
              <div class="zenroomspageperks-rating">
                <div class="zenroomspageperks-rating-info-total"><span class="zenroomspageperks-rating-info-total-value zenroomspageperks-rating-info-total-value-10"><?= $ratingHotel ?></span>
                  <p class="zenroomspageperks-rating-info-total-description">Оценка гостей</p>
                </div>
                <div class="zenroomspageperks-rating-review">
                  <p class="zenroomspageperks-rating-review-title">Гости отметили</p>
                  <div class="zenroomspageperks-rating-review-inner">
                    <ul class="zenroomspagereviewscores">
                      <li class="zenroomspagereviewscores-item">
                        <p class="zenroomspagereviewscores-item-title">«Приятный персонал»</p>
                        <p class="zenroomspagereviewscores-item-count">22 отзыва</p>
                      </li>
                      <li class="zenroomspagereviewscores-item">
                        <p class="zenroomspagereviewscores-item-title">«Хорошее расположение»</p>
                        <p class="zenroomspagereviewscores-item-count">22 отзыва</p>
                      </li>
                      <li class="zenroomspagereviewscores-item">
                        <p class="zenroomspagereviewscores-item-title">«Парковка понравилась»</p>
                        <p class="zenroomspagereviewscores-item-count">5 отзывов</p>
                      </li>
                      <li class="zenroomspagereviewscores-item">
                        <p class="zenroomspagereviewscores-item-title">«Нормальное место»</p>
                        <p class="zenroomspagereviewscores-item-count">22 отзыва</p>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="zenroomspageperks-rating-button-wrapper"><button class="zenroomspageperks-rating-button button-view-light button-size-s">Читать все отзывы</button></div>
              </div>
            </div>
            <div class="zen-roomspage-gallery-wrapper">
              <div class="zen-roomspage-gallery-mir"></div>
              <div class="zen-roomspage-gallery">
                <div class="zen-roomspage-gallery-inner">
                  <div class="zen-tablet-gallery">
                    <div class="zen-tablet-gallery-scroll-zone">
                      <?= '<img style="height: auto; width: 100%;" src="data:image/jpeg;base64,' . base64_encode($imageHotel) . '"/>' ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="zen-roomspage-perks-wrapper">
              <div class="zen-roomspage-perks">
                <div class="zen-roomspage-perks-amenities">
                  <div class="zenroomspageperks-amenities" style="text-align: left;">
                    <h2 class="zenroomspageperks-amenities-title">Главные удобства отеля</h2>
                    <ul class="zenroomspageperks-amenities-list">
                      <?php
                      if ($hasWifiHotel) {
                      ?>
                        <li class="zenroomspageperks-amenities-item">
                          <span class="zenroomspageperks-amenities-item-multi-amenity zenroomspageperks-amenities-item-multi-amenity-has_internet">Wi-Fi</span>
                        </li>
                      <?php
                      }
                      ?>
                      <li class="zenroomspageperks-amenities-item">
                        <p class="zenroomspageperks-amenities-item-multi-amenity zenroomspageperks-amenities-item-multi-amenity-has_airport_transfer">Трансфер</p>
                      </li>
                      <li class="zenroomspageperks-amenities-item">
                        <p class="zenroomspageperks-amenities-item-multi-amenity zenroomspageperks-amenities-item-multi-amenity-has_parking">Парковка</p>
                      </li>
                      <li class="zenroomspageperks-amenities-item">
                        <p class="zenroomspageperks-amenities-item-multi-amenity zenroomspageperks-amenities-item-multi-amenity-has_meal">Бар или ресторан</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="zen-roomspage-stretchedtop-ads"></div>
        <div class="zenroomspage-header-banner"></div>
      </div>
    </div>
    <?php
    $query = 'Select * from rooms where id_hotel = ' . $_GET['hotelId'];
    $result = mysqli_query($link, $query);
    ?>
    <div class="zenroomspagerates">
      <div class="zen-roomspage-rooms zen-roomspage-rooms-new-rg-design">
        <div class="zen-roomspage-rooms-content">
          <div class="zenroomspage-rooms">
            <div class="zen-roomspagerooms-inner">
              <div class="zen-roomspagerooms-room">
                <div class="zenroomspage-b2c-rates" id="price">
                  <div class="zenroomspage-b2c-rates-header">
                    <div class="zenroomspage-rates-roomheader">
                      <div class="zenroomspage-rates-roomheader-content">
                        <div class="zenroomspage-rates-roomheader-column-right">
                          <div class="zenroomspage-rates-roomheader-name">
                            <div class="zenroomspagerate-name">
                              <div class="zenroomspagerate-name-title">Двухместный номер Standard <span class="zenroomspagerate-name-title-additional">2 отдельные кровати</span></div>
                            </div>
                          </div>
                          <div class="zenroomspage-rates-roomheader-amenities">
                            <div class="zenroomspageroom-header-content-amenities">
                              <div class="zenroomspageroom-header-content-amenities-wrap">
                                <div class="zenroomspageroom-header-content-amenity zenroomspageroom-header-content-amenity-square"><span>23&nbsp;м<sup>2</sup></span></div>
                                <div class="zenroomspageroom-header-content-amenity zenroomspageroom-header-content-amenity-private-bathroom"><span>Собственная ванная комната</span></div>
                                <div class="zenroomspageroom-header-content-amenity zenroomspageroom-header-content-amenity-window"><span>Окно</span></div>
                                <div class="zenroomspageroom-header-content-amenity zenroomspageroom-header-content-amenity-safe"><span>Сейф</span></div>
                                <div class="zenroomspageroom-header-content-amenity zenroomspageroom-header-content-amenity-mini-bar"><span>Минибар</span></div>
                                <div class="zenroomspageroom-header-content-amenity zenroomspageroom-header-content-amenity-pets-allowed"><span>Домашние животные разрешены</span></div>
                                <div class="zenroomspageroom-header-content-amenity zenroomspageroom-header-content-amenity-air-conditioning"><span>Кондиционер</span></div>
                                <div class="zenroomspageroom-header-content-space"></div>
                              </div><span class="zenroomspageroom-header-content-show-all"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <table class="zenroomspage-b2c-rates-table">
                    <?php
                    for (; $row = mysqli_fetch_assoc($result);) {
                      $idRoom = $row['id_room'];
                      $priceRoom = $row['price_room'];
                      $breakfastRoom = $row['breakfast_room'];
                      $squareRoom = $row['square_room'];
                      $smokingRoom = $row['smoking_room'];
                      $heatingRoom = $row['heating_room'];
                      $showerRoom = $row['shower_room'];
                    ?>
                      <tr class="zenroomspage-b2c-rates-table-row">
                        <td class="zenroomspage-b2c-rates-table-cell">
                          <div class="zenroomspage-b2c-rates-table-cell-content zenroomspage-b2c-rates-table-cell-content-bedding">
                            <div class="zenroomspage-b2c-rates-table-cell-content-bedding-icon zenroomspage-b2c-rates-table-cell-content-bedding-icon-twin"></div>
                          </div>
                        </td>
                        <td class="zenroomspage-b2c-rates-table-cell zenroomspage-b2c-rates-table-cell-valueadds">
                          <div class="zenroomspage-b2c-rates-table-cell-content zenroomspage-b2c-rates-table-cell-content-valueadds" style="width: 293px;">
                            <div class="valueadds-wrapper">
                              <ul class="valueadds" style="padding: 0;">
                                <?php
                                if ($breakfastRoom) {
                                ?>
                                  <li class="valueadds-item valueadds-item-has-popuptip valueadds-item-pointer valueadds-item-pro valueadds-item-meal">
                                    <div class="valueadds-item-title-wrapper">
                                      <div class="valueadds-item-title">
                                        <div class="valueadds-item-title-inner">Завтрак включён</div>
                                      </div>
                                    </div>
                                  </li>
                                <?php
                                }
                                if ($smokingRoom) {
                                ?>
                                  <div class="zenroomspageroom-header-content-amenity-air-smoke" style="margin: 7px 0 0 0;"><span style="padding: 0 0 0 25px;">Для курящих</span></div>
                                <?php
                                }
                                if ($showerRoom) {
                                ?>
                                  <div class="zenroomspageroom-header-content-amenity-shower" style="margin: 7px 0 0 0;"><span style="padding: 0 0 0 25px;">Душ</span></div>
                                <?php
                                }
                                ?>
                              </ul>
                            </div>
                          </div>
                        </td>
                        <td class="zenroomspage-b2c-rates-table-cell zenroomspage-b2c-rates-table-cell-cancellation">
                          <div class="zenroomspage-b2c-rates-table-cell-content zenroomspage-b2c-rates-table-cell-content-cancellation" style="width: 293px;">
                            <div class="valueadds-wrapper">
                              <ul class="valueadds">
                                <li class="valueadds-item valueadds-item-has-popuptip valueadds-item-pointer valueadds-item-pro valueadds-item-cancellation">
                                  <div class="valueadds-item-title-wrapper" style="text-align: left;">
                                    <div class="valueadds-item-title">
                                      <div class="valueadds-item-title-inner">Бесплатная отмена</div>
                                    </div>
                                  </div>
                                </li>
                                <li class="valueadds-item valueadds-item-has-popuptip valueadds-item-pointer valueadds-item-payment">
                                  <div class="valueadds-item-title-wrapper">
                                    <div class="valueadds-item-title">
                                      <div class="valueadds-item-title-inner">Оплата сейчас</div>
                                    </div>
                                  </div>
                                </li>
                                <div class="zenroomspageroom-header-content-amenity-heating" style="margin: 4px 0 0 0;"><span style="padding: 0px 0 0 30px;">Отопление</span></div>
                              </ul>
                            </div>
                          </div>
                        </td>
                        <td class="zenroomspage-b2c-rates-table-cell zenroomspage-b2c-rates-table-cell-price" style="text-align: left;">
                          <div class="zenroomspage-b2c-rates-table-cell-content zenroomspage-b2c-rates-table-cell-content-price" style="width: 116px;">
                            <div class="zenroomspage-b2c-rates-price">
                              <div class="zenroomspage-b2c-rates-price-amount"><?= $priceRoom ?>&nbsp;₽<div class="zenroomspage-b2c-rates-badge"></div>
                              </div>
                              <div class="zenroomspage-b2c-rates-price-tip"></div>
                            </div>
                            <div class="zenroomspage-b2c-rates-price-included">Все налоги включены</div>
                            <div class="zenroomspage-b2c-rates-price-nights-string">за ночь для 2 гостей</div>
                          </div>
                        </td>
                        <td class="zenroomspage-b2c-rates-table-cell zenroomspage-b2c-rates-table-cell-book">
                          <div class="zenroomspage-b2c-rates-table-cell-content zenroomspage-b2c-rates-table-cell-content-button">
                            <a class="zenroomspage-b2c-rates-book button-view-primary button-size-s" href="">Забронировать</a>
                          </div>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="zenroomspage-about" style="text-align: left;">
      <div class="zen-roomspage-about-wrapper">
        <div class="zen-roomspage-about">
          <h2 class="zen-roomspage-about-title">Описание отеля</h2>
          <div class="zen-roomspage-about-content zen-roomspage-about-content-expandable">
            <div class="zen-roomspage-about-items">
              <div class="zen-roomspage-about-item">
                <div class="zen-roomspage-about-item-description">
                  <p class="zen-roomspage-about-item-description-paragraph"><?= $descriptionHotel ?></p>
                </div>
              </div>
            </div>
            <div class="zen-roomspage-about-info-wrapper">
              <div class="zen-roomspage-about-info">
                <div class="zen-roomspage-about-info-title">Факты об отеле</div>
                <div class="zen-roomspage-about-info-items">
                  <div class="zen-roomspage-about-info-item">
                    <div class="zen-roomspage-about-info-item-title">Год постройки</div>
                    <div class="zen-roomspage-about-info-item-description"><?= $yearHotel ?> год</div>
                  </div>
                  <div class="zen-roomspage-about-info-item">
                    <div class="zen-roomspage-about-info-item-title">Количество номеров и этажей</div>
                    <div class="zen-roomspage-about-info-item-description">80 номеров • 4 этажа</div>
                  </div>
                  <?php
                  if ($hasWifiHotel) {
                  ?>
                    <div class="zen-roomspage-about-info-item">
                      <div class="zen-roomspage-about-info-item-title">Интернет</div>
                      <div class="zen-roomspage-about-info-item-description">Wi-Fi в номерах</div>
                    </div>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="zenroomspagereviews-wrapper">
      <div class="zenroomspagereviews">
        <div class="zenroomspagereviews-content">
          <p class="zenroomspagereviews-content-hotel-name">Отель Братья Карамазовы
          <div class="zenroomspagereviews-content-hotel-back"></div>
          <div class="zenroomspagereviews-content-hotel-close"></div>
          </p>
          <div class="zenroomspagereviews-content-inner">
            <p class="zenroomspagereviews-content-title">Отзывы</p>
            <form class="zenroomspagereviews-tabs">
              <ul class="zenroomspagereviews-tabs-list">
                <li class="zenroomspagereviews-tabs-item"><input class="zenroomspagereviews-tabs-input" id="all" name="tab" type="radio"><label class="zenroomspagereviews-tabs-all zenroomspagereviews-tabs-all-active" for="all"><span class="link">Все отзывы</span> ∙ 591</label></li>
              </ul>
            </form>
            <ul class="zenroomspagereviews-list">
              <li class="zenroomspagereviews-item">
                <div class="zenroomspagereviews-item-hotel">
                  <div class="zenroomspagereviews-item-hotel-info">
                    <div class="zenroomspagereviews-item-hotel-info-author"><span class="zenroomspagereviews-item-hotel-info-author-name">Andrey</span><span class="zenroomspagereviews-item-hotel-info-author-flag zenroomspagereviews-item-hotel-info-author-flag-ru"></span></div>
                    <p class="zenroomspagereviews-item-hotel-info-trip-type">отдых, пара</p>
                    <p class="zenroomspagereviews-item-hotel-info-date">май 2022</p>
                    <p class="zenroomspagereviews-item-hotel-info-room-type">Двухместный номер Standard (двуспальная кровать), 4 ночи</p>
                  </div>
                  <div class="zenroomspagereviews-item-hotel-content">
                    <div class="zenroomspagereviews-item-hotel-content-total">
                      <div class="zenroomspagereviews-item-hotel-content-total-rating">
                        <p class="zenroomspagereviews-item-hotel-content-total-rating-value zenroomspagereviews-item-hotel-content-total-rating-value-9">8,5</p>
                        <p class="zenroomspagereviews-item-hotel-content-total-rating-description">Отлично</p>
                        <p class="zenroomspagereviews-item-hotel-content-total-rating-details-link link">Раскрыть детали</p>
                      </div>
                      <div class="zenroomspagereviews-item-hotel-content-total-info">
                        <div class="zenroomspagereviews-item-hotel-content-total-info-author"><span class="zenroomspagereviews-item-hotel-content-total-info-author-name">Andrey</span><span class="zenroomspagereviews-item-hotel-content-total-info-author-flag zenroomspagereviews-item-hotel-content-total-info-author-flag-ru"></span></div>
                        <p class="zenroomspagereviews-item-hotel-content-total-info-date">май 2022</p>
                      </div>
                    </div>
                    <div class="zenroomspagereviews-item-hotel-content-inner">
                      <div class="zenroomspagehotelreviewcontent">
                        <div class="zenroomspagehotelreviewcontent-reviews">
                          <p class="zenroomspagehotelreviewcontent-plus-title">Что было хорошо</p>
                          <p class="zenroomspagehotelreviewcontent-plus-description">Все чисто в отеле и номере
                            Хорошо встретили, вежливый персонал</p>
                          <p class="zenroomspagehotelreviewcontent-minus-title">Что было плохо</p>
                          <p class="zenroomspagehotelreviewcontent-minus-description">После принятия душа, лужа в санузле</p>
                        </div>
                      </div>
                    </div>
                    <div class="zenroomspagereviews-item-hotel-content-spoiler"></div>
                  </div>
                </div>
              </li>
              <li class="zenroomspagereviews-item">
                <div class="zenroomspagereviews-item-tripadvisor">
                  <div class="zenroomspagereviews-item-tripadvisor-info">
                    <div class="zenroomspagereviews-item-tripadvisor-info-author"><span class="zenroomspagereviews-item-tripadvisor-info-author-name">Светлана Е</span></div>
                    <p class="zenroomspagereviews-item-tripadvisor-info-trip-type">семья</p>
                    <p class="zenroomspagereviews-item-tripadvisor-info-date">май 2022</p>
                  </div>
                  <div class="zenroomspagereviews-item-tripadvisor-content">
                    <div class="zenroomspagereviews-item-tripadvisor-content-total">
                      <div class="zenroomspagereviews-item-tripadvisor-content-total-rating-logo"></div>
                      <div class="zenroomspagereviews-item-tripadvisor-content-total-rating-value" style="background-image: url(&quot;https://www.tripadvisor.ru/img/cdsi/img2/ratings/traveler/s5.0-18579-5.svg&quot;);"></div>
                      <div class="zenroomspagereviews-item-tripadvisor-content-total-info">
                        <div class="zenroomspagereviews-item-tripadvisor-content-total-info-author"><span class="zenroomspagereviews-item-tripadvisor-content-total-info-author-name">Светлана Е</span></div>
                        <p class="zenroomspagereviews-item-tripadvisor-content-total-info-date">май 2022</p>
                      </div>
                    </div>
                    <div class="zenroomspagereviews-item-tripadvisor-content-inner">
                      <div class="zenroomspagetacontent">
                        <p class="zenroomspagetacontent-title">Братья Карамазовы - отличный отель недалеко от центра Питера</p>
                        <p class="zenroomspagetacontent-text">Расположение отеля удобное, можно дойти пешком до Дворцовой площади, Эрмитажа, Невского. Сам отель на тихой, спокойной улице, спать можно с открытыми окнами. Персонал на удивление доброжелательный, ребята отличные, создаётся ощущение, что они действительно рады твоему приезду)) Завтраки нормальные, </p>
                        <div class="zenroomspagetacontent-spoiler"></div>
                      </div>
                    </div>
                    <div class="zenroomspagereviews-item-tripadvisor-content-spoiler">
                      <div class="zen-spoiler zen-spoiler-fold zen-spoiler-close"><button class="zen-spoiler-button button-view-link button-size-s"><svg class="zen-spoiler-icon" width="16" height="12" viewBox="0 0 16 16">
                            <path d="M10.9 14.62l6.15-6.14c.5-.5.5-1.31 0-1.81l-.18-.18a1.3 1.3 0 0 0-1.81 0L10 11.55 4.94 6.5c-.5-.5-1.32-.5-1.81 0l-.18.18c-.5.5-.5 1.31 0 1.81l6.14 6.14c.5.5 1.32.5 1.82 0"></path>
                          </svg>
                          <div class="zen-spoiler-label">Развернуть отзыв</div>
                        </button></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="zenroomspagereviews-item">
                <div class="zenroomspagereviews-item-tripadvisor">
                  <div class="zenroomspagereviews-item-tripadvisor-info">
                    <div class="zenroomspagereviews-item-tripadvisor-info-author"><span class="zenroomspagereviews-item-tripadvisor-info-author-name">D8788CVekaterinap</span><span class="zenroomspagereviews-item-tripadvisor-info-author-flag zenroomspagereviews-item-tripadvisor-info-author-flag-at"></span></div>
                    <p class="zenroomspagereviews-item-tripadvisor-info-trip-type">пара</p>
                    <p class="zenroomspagereviews-item-tripadvisor-info-date">май 2022</p>
                  </div>
                  <div class="zenroomspagereviews-item-tripadvisor-content">
                    <div class="zenroomspagereviews-item-tripadvisor-content-total">
                      <div class="zenroomspagereviews-item-tripadvisor-content-total-rating-logo"></div>
                      <div class="zenroomspagereviews-item-tripadvisor-content-total-rating-value" style="background-image: url(&quot;https://www.tripadvisor.ru/img/cdsi/img2/ratings/traveler/s4.0-18579-5.svg&quot;);"></div>
                      <div class="zenroomspagereviews-item-tripadvisor-content-total-info">
                        <div class="zenroomspagereviews-item-tripadvisor-content-total-info-author"><span class="zenroomspagereviews-item-tripadvisor-content-total-info-author-name">D8788CVekaterinap</span><span class="zenroomspagereviews-item-tripadvisor-content-total-info-author-flag zenroomspagereviews-item-tripadvisor-content-total-info-author-flag-at"></span></div>
                        <p class="zenroomspagereviews-item-tripadvisor-content-total-info-date">май 2022</p>
                      </div>
                    </div>
                    <div class="zenroomspagereviews-item-tripadvisor-content-inner">
                      <div class="zenroomspagetacontent">
                        <p class="zenroomspagetacontent-title">Отзыв</p>
                        <p class="zenroomspagetacontent-text">Главный плюс этого отеля это персонал) все дружелюбны, готовы помочь. Отдельно хочу отметить чистоту отеля и номера👍🏻
                          Теперь о минусах: очень не удобный матрац, в котором чувствуются пружины, невкусный завтрак, расположение относительно далеко от центра.
                          На мой взгляд на заявленные 4 звёзды не тя</p>
                        <div class="zenroomspagetacontent-spoiler"></div>
                      </div>
                    </div>
                    <div class="zenroomspagereviews-item-tripadvisor-content-spoiler">
                      <div class="zen-spoiler zen-spoiler-fold zen-spoiler-close"><button class="zen-spoiler-button button-view-link button-size-s"><svg class="zen-spoiler-icon" width="16" height="12" viewBox="0 0 16 16">
                            <path d="M10.9 14.62l6.15-6.14c.5-.5.5-1.31 0-1.81l-.18-.18a1.3 1.3 0 0 0-1.81 0L10 11.55 4.94 6.5c-.5-.5-1.32-.5-1.81 0l-.18.18c-.5.5-.5 1.31 0 1.81l6.14 6.14c.5.5 1.32.5 1.82 0"></path>
                          </svg>
                          <div class="zen-spoiler-label">Развернуть отзыв</div>
                        </button></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="zenroomspagereviews-item">
                <div class="zenroomspagereviews-item-tripadvisor">
                  <div class="zenroomspagereviews-item-tripadvisor-info">
                    <div class="zenroomspagereviews-item-tripadvisor-info-author"><span class="zenroomspagereviews-item-tripadvisor-info-author-name">_P6290QZ</span></div>
                    <p class="zenroomspagereviews-item-tripadvisor-info-trip-type">семья</p>
                    <p class="zenroomspagereviews-item-tripadvisor-info-date">май 2022</p>
                  </div>
                  <div class="zenroomspagereviews-item-tripadvisor-content">
                    <div class="zenroomspagereviews-item-tripadvisor-content-total">
                      <div class="zenroomspagereviews-item-tripadvisor-content-total-rating-logo"></div>
                      <div class="zenroomspagereviews-item-tripadvisor-content-total-rating-value" style="background-image: url(&quot;https://www.tripadvisor.ru/img/cdsi/img2/ratings/traveler/s5.0-18579-5.svg&quot;);"></div>
                      <div class="zenroomspagereviews-item-tripadvisor-content-total-info">
                        <div class="zenroomspagereviews-item-tripadvisor-content-total-info-author"><span class="zenroomspagereviews-item-tripadvisor-content-total-info-author-name">_P6290QZ</span></div>
                        <p class="zenroomspagereviews-item-tripadvisor-content-total-info-date">май 2022</p>
                      </div>
                    </div>
                    <div class="zenroomspagereviews-item-tripadvisor-content-inner">
                      <div class="zenroomspagetacontent">
                        <p class="zenroomspagetacontent-title">Братья Карамазовы</p>
                        <p class="zenroomspagetacontent-text">Отличный отель для туристического путешествия. Вкусные завтраки. Чистота в номере. Всё было отлично. Удачное расположение. До метро 10 пешим шагом. По близости море заведений где можно перекусить. Советуем данный отель</p>
                        <div class="zenroomspagetacontent-spoiler"></div>
                      </div>
                    </div>
                    <div class="zenroomspagereviews-item-tripadvisor-content-spoiler"></div>
                  </div>
                </div>
              </li>
              <li class="zenroomspagereviews-item">
                <div class="zenroomspagereviews-item-hotel">
                  <div class="zenroomspagereviews-item-hotel-info">
                    <div class="zenroomspagereviews-item-hotel-info-author"><span class="zenroomspagereviews-item-hotel-info-author-name">Alexandr</span><span class="zenroomspagereviews-item-hotel-info-author-flag zenroomspagereviews-item-hotel-info-author-flag-ru"></span></div>
                    <p class="zenroomspagereviews-item-hotel-info-trip-type">отдых, пара</p>
                    <p class="zenroomspagereviews-item-hotel-info-date">апрель 2022</p>
                    <p class="zenroomspagereviews-item-hotel-info-room-type">Двухместный номер Standard (двуспальная кровать), 3 ночи</p>
                  </div>
                  <div class="zenroomspagereviews-item-hotel-content">
                    <div class="zenroomspagereviews-item-hotel-content-total">
                      <div class="zenroomspagereviews-item-hotel-content-total-rating">
                        <p class="zenroomspagereviews-item-hotel-content-total-rating-value zenroomspagereviews-item-hotel-content-total-rating-value-10">9,7</p>
                        <p class="zenroomspagereviews-item-hotel-content-total-rating-description">Супер</p>
                        <p class="zenroomspagereviews-item-hotel-content-total-rating-details-link link">Раскрыть детали</p>
                      </div>
                      <div class="zenroomspagereviews-item-hotel-content-total-info">
                        <div class="zenroomspagereviews-item-hotel-content-total-info-author"><span class="zenroomspagereviews-item-hotel-content-total-info-author-name">Alexandr</span><span class="zenroomspagereviews-item-hotel-content-total-info-author-flag zenroomspagereviews-item-hotel-content-total-info-author-flag-ru"></span></div>
                        <p class="zenroomspagereviews-item-hotel-content-total-info-date">апрель 2022</p>
                      </div>
                    </div>
                    <div class="zenroomspagereviews-item-hotel-content-inner">
                      <div class="zenroomspagehotelreviewcontent">
                        <div class="zenroomspagehotelreviewcontent-reviews">
                          <p class="zenroomspagehotelreviewcontent-plus-title">Что было хорошо</p>
                          <p class="zenroomspagehotelreviewcontent-plus-description">Завтраки очень вкусные</p>
                        </div>
                      </div>
                    </div>
                    <div class="zenroomspagereviews-item-hotel-content-spoiler"></div>
                  </div>
                </div>
              </li>
            </ul>
            <div class="zenroomspagereviews-buttons"><a class="zenroomspagereviews-button-expand button-view-light button-size-s" href="https://www.tripadvisor.com/Hotel_Review-g298507-d503408-Reviews-The_Brothers_Karamazov_Hotel-St_Petersburg_Northwestern_District.html?m=18579" target="_blank">Показать больше отзывов</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>