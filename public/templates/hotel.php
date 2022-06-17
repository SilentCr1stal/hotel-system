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
                <div class="zen-roomspage-title" style="text-align: left;">
                  <div class="zen-roomspage-title-stars-wrapper">
                    <div class="zen-roomspage-title-stars">
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
                <div class="zenroomspageperks-rating-button-wrapper">
                  <a href="#feedback" class="zenroomspageperks-rating-button button-view-light button-size-s">Читать все отзывы</a>
                </div>
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
      <form action="./booking.php" method="post" enctype="multipart/form-data">
        <div class="zenroomspage-searchresult">
          <div class="zensearchresult">
            <div class="zensearchresult-filters">
              <div class="zensearchresultfilters">
                <div class="zenfilterscontainer">
                  <div class="zenfilterscontainer-filters">
                    <ul class="zenformselectgroup" style="padding: 0;">
                      <li class="zenformselectgroup-item">
                        <div class="zenformselect zenformselect-size-m" tabindex="0">
                          <div class="zenformselect-inner">
                            <div class="zenformselect-title-wrapper" style="display: flex;justify-content: space-between;">
                              <p class="zenformselect-title">Дата заезда</p>
                              <input type="datetime-local" name="checkIn" id="checkIn-date" min="<?= date('Y-m-d\TH:i') ?>" max="2022-12-31T23:59" required>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="zenformselectgroup-item">
                        <div class="zenformselect zenformselect-size-m" tabindex="0">
                          <div class="zenformselect-inner">
                            <div class="zenformselect-title-wrapper" style="display: flex;justify-content: space-between;">
                              <p class="zenformselect-title">Дата выезда</p>
                              <?php
                              $date = date_create(date('Y-m-d H:i'));
                              date_modify($date, '2 hour');
                              $date_new = date_format($date, 'Y-m-d\TH:i');
                              ?>
                              <input type="datetime-local" name="checkOut" id="checkOut-date" min="<?= $date_new ?>" max="2022-12-31T23:59" required>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        $id_user = $_SESSION['id_user'];
        if ($id_user) {
          $bookingQuery = "Select * from booking where id_user = " . $id_user;
          $bookingResult = mysqli_query($link, $bookingQuery);
          $booking = mysqli_fetch_assoc($bookingResult);
        }
        ?>
        <div class="zen-roomspage-rooms zen-roomspage-rooms-new-rg-design">
          <div class="zen-roomspage-rooms-content">
            <div class="zenroomspage-rooms">
              <div class="zen-roomspagerooms-inner">
                <div class="zen-roomspagerooms-room">
                  <div class="zenroomspage-b2c-rates" id="price" style="text-align: left;">
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
                        <tr class="zenroomspage-b2c-rates-table-row" style="<?= !empty($booking) ? 'opacity: .2;' : '' ?>">
                          <td class="zenroomspage-b2c-rates-table-cell">
                            <div class="zenroomspage-b2c-rates-table-cell-content zenroomspage-b2c-rates-table-cell-content-bedding">
                              <div class="zenroomspage-b2c-rates-table-cell-content-bedding-icon zenroomspage-b2c-rates-table-cell-content-bedding-icon-twin"></div>
                            </div>
                          </td>
                          <td class="zenroomspage-b2c-rates-table-cell zenroomspage-b2c-rates-table-cell-valueadds">
                            <div class="zenroomspage-b2c-rates-table-cell-content zenroomspage-b2c-rates-table-cell-content-valueadds" style="width: 293px;">
                              <div class="valueadds-wrapper">
                                <ul class="valueadds" style="padding: 0;">
                                  <div class="zenroomspageroom-header-content-amenity zenroomspageroom-header-content-amenity-square"><span><?= $squareRoom ?>&nbsp;м<sup>2</sup></span></div>
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
                                <ul class="valueadds" style="padding: 0;">
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
                                  <?php
                                  if ($heatingRoom) {
                                  ?>
                                    <div class="zenroomspageroom-header-content-amenity-heating" style="margin: 4px 0 0 0;"><span style="padding: 0px 0 0 30px;">Отопление</span></div>
                                  <?php
                                  }
                                  ?>
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
                              <div class="zenroomspage-b2c-rates-price-nights-string">за сутки для 2 гостей</div>
                            </div>
                          </td>
                          <td class="zenroomspage-b2c-rates-table-cell zenroomspage-b2c-rates-table-cell-book">
                            <div class="zenroomspage-b2c-rates-table-cell-content zenroomspage-b2c-rates-table-cell-content-button">
                              <button type="submit" class="zenroomspage-b2c-rates-book button-view-primary button-size-s open-modal" <?= !empty($booking) ? 'disabled' : '' ?>>Забронировать</button>
                            </div>
                          </td>
                          <input name="id_room" type="text" value="<?= $idRoom ?>" style="display: none;">
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
      </form>
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
    <?php
    $queryFeedback = 'Select Count(*) as count from comments where id_hotel = ' . $idHotel;
    $resultFeedback = mysqli_query($link, $queryFeedback);
    $rowFeedback = mysqli_fetch_assoc($resultFeedback);
    ?>
    <div class="zenroomspagereviews-wrapper" id="feedback">
      <div class="zenroomspagereviews">
        <div class="zenroomspagereviews-content">
          <div class="zenroomspagereviews-content-inner">
            <p class="zenroomspagereviews-content-title">Отзывы</p>
            <div class="zenroomspagereviews-tabs">
              <ul class="zenroomspagereviews-tabs-list">
                <li class="zenroomspagereviews-tabs-item">
                  <label class="zenroomspagereviews-tabs-all zenroomspagereviews-tabs-all-active">
                    <span>Все отзывы</span> ∙ <?= $rowFeedback['count'] ?></label>
                </li>
              </ul>
            </div>
            <form action="./add_comment.php" method="post">
              <textarea name="textComment" rows="5" placeholder="Оставить отзыв" required style="width: 100%; resize: none;"></textarea>
              <button type="submit">Отправить</button>
            </form>
            <?php
            $queryComments = 'Select * from comments where id_hotel = ' . $idHotel;
            $resultComments = mysqli_query($link, $queryComments);
            ?>
            <ul class="zenroomspagereviews-list">
              <?php
              for (; $rowComments = mysqli_fetch_assoc($resultComments);) {
                $idComment = $rowComments['id_comment'];
                $idUser = $rowComments['id_user'];
                $queryUser = 'Select * from users where id_user = ' . $idUser;
                $resultUser = mysqli_query($link, $queryUser);
                $rowUser = mysqli_fetch_assoc($resultUser);
                $loginUser = $rowUser['login_user'];
                $textComment = $rowComments['text_comment'];
                $dateComment = $rowComments['date_comment'];
              ?>
                <li class="zenroomspagereviews-item">
                  <div class="zenroomspagereviews-item-tripadvisor">
                    <div class="zenroomspagereviews-item-tripadvisor-info">
                      <div class="zenroomspagereviews-item-tripadvisor-info-author">
                        <span class="zenroomspagereviews-item-tripadvisor-info-author-name"><?= $loginUser ?></span>
                      </div>
                      <p class="zenroomspagereviews-item-tripadvisor-info-date" style="padding: 0 0 0 15px;"><?= $dateComment ?></p>
                    </div>
                    <div class="zenroomspagereviews-item-tripadvisor-content">
                      <div class="zenroomspagereviews-item-tripadvisor-content-inner">
                        <div class="zenroomspagetacontent">
                          <p class="zenroomspagetacontent-text"><?= $textComment ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              <?php
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
