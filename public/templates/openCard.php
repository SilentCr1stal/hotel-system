<?php
$query = 'Select * from products where id_product = ' . $_GET['productId'];
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
$productName = $row['name_product'];
$productDescription = $row['description_product'];
$productImagePath = $row['image_path_product'];
$productPrice = $row['price_product'];
?>
<div class="container__product-block">
  <div class="product-block__container__image-block">
    <div class="image-block__inner-block" style="background: url(<?= $productImagePath ?>) top/cover no-repeat;"></div>
  </div>
  <div class="product-block__container__description-block">
    <div class="description-block__inner-block">
      <div class="product__card-description">
        <div class="card__header-text">
          <?= $productName ?>
        </div>
        <div class="card__description-text">
          <?= $productDescription ?>
        </div>
        <div class="card__price-wrapper">
          <div class="card__price-text">
            <div class="product__price"><?= $productPrice ?></div>
            <div class="price__currency">р.</div>
          </div>
        </div>
      </div>
      <div style="margin: 70px 0 0 0;">
        <div class="card__basket-wrapper">
          <form action="new_product.php" method="post" enctype="multipart/form-data">
            <div class="product__quantity">
              <div class="quantity__minus-wrapper">
                <input class="prod__quantity__minus" type="button" value="-" id="button_minus">
              </div>
              <input class="prod__quantity-input" id="num_count" type="number" name="quantity" min="1" max="10" step="1" value="1" size="4" maxlength="4" onchange="location=value" />
              <div class="prod__quantity__plus-wrapper">
                <input class="prod__quantity__plus" type="button" value="+" id="button_plus">
              </div>
            </div>
            <input type="hidden" name="product_id" value="<?= $_GET['productId'] ?>">
            <input class="prod__basket-btn" type="submit" value="В корзину" />
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  const numCount = document.getElementById('num_count');
  const plusBtn = document.getElementById('button_plus');
  const minusBtn = document.getElementById('button_minus');
  plusBtn.onclick = function() {
    let qty = parseInt(numCount.value);
    qty = qty + 1;
    numCount.value = qty;
  }
  minusBtn.onclick = function() {
    let qty = parseInt(numCount.value);
    if (qty > 1) {
      qty = qty - 1;
    }
    numCount.value = qty;
  }
</script>
