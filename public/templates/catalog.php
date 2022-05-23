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
        <h3 class="header-text">Меню доставки еды</h3>
      </div>
    </div>
    <div class="container__products-block">
      <div class="products-block">
        <div class="products-block__inner-block">
          <div class="products-block__categories-list">
            <div class="store-switch__wrapper">
              <a href="index.php?page=shop&prod_category=all" class="store-switch__btn-link__item">
                Все
              </a>
              <?php
              $query = 'Select * from categories';
              $result = mysqli_query($link, $query);
              for (; $row = mysqli_fetch_assoc($result);) {
                $categoryName = $row['name_category'];
                $categoryId = $row['id_category'];
              ?>
                <a href="index.php?page=shop&prod_category=<?php echo $categoryId; ?>" class="store-switch__btn-link__item">
                  <?php echo $categoryName; ?>
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
                $categoryId = $_GET['prod_category'];
              ?>
              <select onchange="location=value">
                <option value="" selected="selected">Сортировка по имени</option>
                <option <?php
                        if (!$_GET['sort_price']) {
                          if (!$categoryId)
                            echo 'value="index.php?page=shop&sort_name=asc&prod_category=all"';
                          else
                            echo 'value="index.php?page=shop&sort_name=asc&prod_category='.$categoryId.'"';
                        } else {
                          if (!$categoryId)
                            echo 'value="index.php?page=shop&sort_name=asc&prod_category=all"';
                          else
                            echo 'value="index.php?page=shop&sort_name=asc&prod_category='.$categoryId.'"';
                        }
                        ?>>A-Z</option>     
                <option <?php
                        if (!$_GET['sort_price']) {
                          if (!$categoryId)
                            echo 'value="index.php?page=shop&sort_name=desc&prod_category=all"';
                          else
                            echo 'value="index.php?page=shop&sort_name=desc&prod_category='.$categoryId.'"';
                        } else {
                          if (!$categoryId)
                            echo 'value="index.php?page=shop&sort_name=desc&prod_category=all"';
                          else
                            echo 'value="index.php?page=shop&sort_name=desc&prod_category='.$categoryId.'"';
                        }
                        ?>>Z-A</option>
              </select>
              <select onchange="location=value">
                <option value="" selected="selected">Сортировка по цене</option>
                <option <?php
                        if (!$_GET['sort_name']) {
                          if (!$categoryId)
                            echo 'value="index.php?page=shop&sort_price=asc&prod_category=all"';
                          else
                            echo 'value="index.php?page=shop&sort_price=asc&prod_category='.$categoryId.'"';
                        } else {
                          if (!$categoryId)
                            echo 'value="index.php?page=shop&sort_price=asc&prod_category=all"';
                          else
                            echo 'value="index.php?page=shop&sort_price=asc&prod_category='.$categoryId.'"';
                        }
                        ?>>По возрастанию</option>
                <option <?php
                        if (!$_GET['sort_name']) {
                          if (!$categoryId)
                            echo 'value="index.php?page=shop&sort_price=desc&prod_category=all"';
                          else
                            echo 'value="index.php?page=shop&sort_price=desc&prod_category='.$categoryId.'"';
                        } else {
                          if (!$categoryId)
                            echo 'value="index.php?page=shop&sort_price=desc&prod_category=all"';
                          else
                            echo 'value="index.php?page=shop&sort_price=desc&prod_category='.$categoryId.'"';
                        }
                        ?>>По убыванию</option>
              </select>
            </form>
          </div>
          <div class="products__flex-block">
            <?php
            if (!$_GET['sort_name'] && !$_GET['sort_price']) {
              $query = 'select * from products';
              if ($_GET['prod_category'] != 'all')
                $query .= " where category_product = " . $_GET['prod_category'];
            } else {
              if ($_GET['sort_name'] && !$_GET['sort_price']) {
                if ($_GET['prod_category'] != 'all') {
                  $query = 'select * from products where category_product = '.$_GET['prod_category'].' order by name_product ' . $_GET['sort_name'] . ';';
                } else
                  $query = 'select * from products order by name_product ' . $_GET['sort_name'] . ';';
              } elseif (!$_GET['sort_name'] && $_GET['sort_price']) {
                if ($_GET['prod_category'] != 'all') {
                  $query = 'select * from products where category_product = '.$_GET['prod_category'].' order by price_product ' . $_GET['sort_price'] . ';';
                } else
                  $query = 'select * from products order by price_product ' . $_GET['sort_price'] . ';';
              } else {
                if ($_GET['prod_category'] != 'all') {
                  $query = '(select * from products where category_product = '.$_GET['prod_category'].' order by name_product ' . $_GET['sort_name'] . ') order by price_product ' . $_GET['sort_price'] . ';';
                } else
                $query = '(select * from products order by name_product ' . $_GET['sort_name'] . ') order by price_product ' . $_GET['sort_price'] . ';';
              }
            }
            $result = mysqli_query($link, $query);
            for (; $row = mysqli_fetch_assoc($result);) {
              $productId = $row['id_product'];
              $productName = $row['name_product'];
              $productCategory = $row['category_product'];
              $productDescription = $row['description_product'];
              $productPathImage = $row['image_path_product'];
              $productPrice = $row['price_product'];
              echo '<div class="product__container-block">';
              echo '<a href="index.php?page=openCard&productId=' . $productId . '">';
              echo '<div class="container-block__image">';
              echo '<div class="product__image" style="background-image: url(' . $productPathImage . ');"></div>';
              echo '</div>';
              echo '<div class="product__card-description">';
              echo '<div class="card__header-text">';
              echo $productName;
              echo '</div>';
              echo '<div class="card__description-text">';
              echo $productDescription;
              echo '</div>';
              echo '<div class="card__price-wrapper">';
              echo '<div class="card__price-text">';
              echo '<div class="product__price">';
              echo $productPrice;
              echo '</div>';
              echo '<div class="price__currency">р.</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</a>';
              echo '<div style="margin: 70px 0 0 0;">';
              echo '<div class="card__basket-wrapper">';
              echo '<a href="index.php?page=openCard&productId=' . $productId . '" class="basket__btn">';
              echo '<span class="card__btn-text">Подробнее</span>';
              echo '</a>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
</main>
