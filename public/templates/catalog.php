<main class="main-contentProducts__wrapper">
  <div class="main-contentProducts__container">
    <div class="line__block">
      <div class="line__block__inner-block">
        <div class="line__block__container">
          <div class="container__inner-block">
            <div class="line-block">
              <div class="line__picture-block line__left"></div>
              <div class="block__line"></div>
              <div class="line__picture-block line__right"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container__header-block">
      <div class="header-block__inner-block">
        <h3 class="header-text">Каталог отелей</h3>
      </div>
    </div>
    <div class="container__products-block">
      <div class="products-block">
        <div class="products-block__inner-block">
          <div class="products-block__categories-list">
            <div class="store-switch__wrapper">
              <a href="index.php?page=catalog&city_category=all" class="store-switch__btn-link__item">
                Все города
              </a>
              <?php
              $query = 'Select * from cities';
              $result = mysqli_query($link, $query);
              for (; $row = mysqli_fetch_assoc($result);) {
                $cityId = $row['id_city'];
                $city = $row['name_city'];
              ?>
                <a href="index.php?page=catalog&city_category=<?php echo $cityId; ?>" class="store-switch__btn-link__item">
                  <?= $city ?>
                </a>
              <?php
              }
              ?>
            </div>
          </div>
          <div class="sort">
            <form action="">
              Сортировка
              <?php
              $cityId = $_GET['city_category'];
              ?>
              <select onchange="location=value">
                <option value="" selected="selected">Сортировать по популярности</option>
                <option <?php
                        if (!$_GET['sort_price']) {
                          if (!$cityId)
                            echo 'value="index.php?page=catalog&sort_rating=asc&city_category=all"';
                          else
                            echo 'value="index.php?page=catalog&sort_rating=asc&city_category=' . $cityId . '"';
                        } else {
                          if (!$cityId)
                            echo 'value="index.php?page=catalog&sort_rating=asc&city_category=all"';
                          else
                            echo 'value="index.php?page=catalog&sort_rating=asc&city_category=' . $cityId . '"';
                        }
                        ?>>от менее популярного</option>
                <option <?php
                        if (!$_GET['sort_price']) {
                          if (!$cityId)
                            echo 'value="index.php?page=catalog&sort_rating=desc&city_category=all"';
                          else
                            echo 'value="index.php?page=catalog&sort_rating=desc&city_category=' . $cityId . '"';
                        } else {
                          if (!$cityId)
                            echo 'value="index.php?page=catalog&sort_rating=desc&city_category=all"';
                          else
                            echo 'value="index.php?page=catalog&sort_rating=desc&city_category=' . $cityId . '"';
                        }
                        ?>>от более популярного</option>
              </select>
              <select onchange="location=value">
                <option value="" selected="selected">Сортировать по цене</option>
                <option <?php
                        if (!$_GET['sort_rating']) {
                          if (!$cityId)
                            echo 'value="index.php?page=catalog&sort_price=asc&city_category=all"';
                          else
                            echo 'value="index.php?page=catalog&sort_price=asc&city_category=' . $cityId . '"';
                        } else {
                          if (!$cityId)
                            echo 'value="index.php?page=catalog&sort_price=asc&city_category=all"';
                          else
                            echo 'value="index.php?page=catalog&sort_price=asc&city_category=' . $cityId . '"';
                        }
                        ?>>По возрастанию</option>
                <option <?php
                        if (!$_GET['sort_rating']) {
                          if (!$cityId)
                            echo 'value="index.php?page=catalog&sort_price=desc&city_category=all"';
                          else
                            echo 'value="index.php?page=catalog&sort_price=desc&city_category=' . $cityId . '"';
                        } else {
                          if (!$cityId)
                            echo 'value="index.php?page=catalog&sort_price=desc&city_category=all"';
                          else
                            echo 'value="index.php?page=catalog&sort_price=desc&city_category=' . $cityId . '"';
                        }
                        ?>>По убыванию</option>
              </select>
            </form>
          </div>
          <div class="products__flex-block">
            <?php
            if (!$_POST['search']) {
              if (!$_GET['sort_rating'] && !$_GET['sort_price']) {
                $query = 'select * from hotels';
                if ($_GET['city_category'] != 'all')
                  $query .= " where location_hotel = " . $_GET['city_category'];
              } else {
                if ($_GET['sort_rating'] && !$_GET['sort_price']) {
                  if ($_GET['city_category'] != 'all') {
                    $query = 'select * from hotels where location_hotel = ' . $_GET['city_category'] . ' order by rating_hotel ' . $_GET['sort_rating'] . ';';
                  } else
                    $query = 'select * from hotels order by rating_hotel ' . $_GET['sort_rating'] . ';';
                } elseif (!$_GET['sort_rating'] && $_GET['sort_price']) {
                  if ($_GET['city_category'] != 'all') {
                    $query = 'select * from hotels where location_hotel = ' . $_GET['city_category'] . ' order by priceFrom_hotel ' . $_GET['sort_price'] . ';';
                  } else
                    $query = 'select * from hotels order by priceFrom_hotel ' . $_GET['sort_price'] . ';';
                } else {
                  if ($_GET['city_category'] != 'all') {
                    $query = '(select * from hotels where location_hotel = ' . $_GET['city_category'] . ' order by rating_hotel ' . $_GET['sort_rating'] . ') order by priceFrom_hotel ' . $_GET['sort_price'] . ';';
                  } else
                    $query = '(select * from hotels order by rating_hotel ' . $_GET['sort_rating'] . ') order by priceFrom_hotel ' . $_GET['sort_price'] . ';';
                }
              }
            } else {
              $query = "select * from hotels where location_hotel = (select id_city from cities where name_city like '%" . $_POST['search'] . "%');";
              $result = mysqli_query($link, $query);
              $row = mysqli_fetch_assoc($result);
              if (empty($row))
                $query = "SELECT * FROM `hotels` WHERE `fullName_hotel` LIKE '%" . $_POST['search'] . "%';";
            }
            $result = mysqli_query($link, $query);
            for (; $row = mysqli_fetch_assoc($result);) {
              $idHotel = $row['id_hotel'];
              $fullNameHotel = $row['fullName_hotel'];
              $locationHotel = $row['location_hotel'];
              $addressHotel = $row['address_hotel'];
              $descriptionHotel = $row['description_hotel'];
              $imageHotel = $row['image_hotel'];
              $priceFromHotel = $row['priceFrom_hotel'];
              $ratingHotel = $row['rating_hotel'];
              $starsHotel = $row['stars_hotel'];
            ?>
              <div class="card card-card_discount card-card_border" style="border: none; margin: 5px 0 0 0;">
                <div class="card-inner">
                  <div class="card-discount">
                  </div>
                  <div class="card-info">
                    <span class="card-stars">
                      <?php
                      for ($i = 0; $i < $starsHotel; $i++) {
                        echo '<i class="fa-solid fa-star"></i>';
                      }
                      ?>
                    </span>
                    <div class="card-reviews">
                      <?php
                      if ($starsHotel == 3)
                        echo 'Неплохой отель';
                      elseif ($starsHotel == 4)
                        echo 'Хороший отель';
                      elseif ($starsHotel == 5)
                        echo 'Отличный отель'
                      ?>
                    </div>
                    <div class="card-location-wrap">
                      <span class="card-location">
                        <i class="fa-solid fa-location-dot card-location-icon icon-location" style="padding: 4px 0 0 0;"></i>
                        <span class="card-location-text">
                          <?= $addressHotel ?>
                        </span>
                      </span>
                    </div>
                  </div>
                  <div class="card-image-area">
                    <span class="card-rating card-rating_good">
                      <span class="card-rating-text">Рейтинг&nbsp;</span>
                      <span class="card-rating-value"><?= $ratingHotel ?></span>
                    </span>
                    <a href="#">
                      <span class="card-name"><?= $fullNameHotel ?></span>
                      <span class="card-image">
                        <?= '<img width="372" height="319" style="height: 100%" src="data:image/jpeg;base64,' . base64_encode($imageHotel) . '"/>' ?>
                      </span>
                    </a>
                    <span class="card-price card-price--discount">
                      <span class="card-price-text">
                        От&nbsp;
                        <b>
                          <span data-role="currency">
                            <?= $priceFromHotel ?> ₽
                          </span>
                        </b>
                      </span>
                    </span>
                  </div>
                  <div class="card-form-area">
                    <div class="card-form-field-wrap">
                      <div class="card-form-field card-form-field_submit">
                      <a href="index.php?page=hotel&hotelId=<?= $idHotel ?>">Узнать цены</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
</main>