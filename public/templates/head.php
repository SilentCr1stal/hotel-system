<?php
  $address = 'http://localhost/hotel_system/';
?>
<!DOCTYPE html>
<html lang="ru_RU" dir="ltr">

<head>
  <meta name="keywords" content="отели, гостиницы, бронирований отелей, бронирование гостиниц, проживание, скидки на отели, сравнение цен на отели" />
  <meta name="description" content="Все гостиницы России с ценами, бронирование отелей от недорогих до гостиниц премиум класса" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    GuestHouse - Все гостиницы России с ценами, бронирование отелей от
    недорогих до гостиниц премиум класса
  </title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Kurale&family=Macondo&family=Oleo+Script+Swash+Caps&family=Playfair+Display&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="<?= $address."public/favicon.png"?>" type="image/x-icon" />
  <link rel="stylesheet" href="<?= $address."src/css/normalize.css"?>"/>
  <?= $_GET['page'] !== 'hotel' ? '<link rel="stylesheet" href="'.$address.'src/css/global.css"/>' : '' ?>
  <?= $_GET['page'] == 'hotel' ? '<link rel="stylesheet" href="'.$address.'src/css/hotel.css"/>' : '' ?>
  <link rel="stylesheet" href="<?= $address."src/css/footer.css"?>"/>
  <link rel="stylesheet" href="<?= $address."src/css/header.css"?>"/>
  <?php
  if (stripos($_SERVER['REQUEST_URI'], 'authorization')) {
    echo '<link rel="stylesheet" href='.$address.'src/css/auth.css />';
  }
  ?>
  <script defer src=<?= $address."src/js/jquery.js" ?>></script>
  <script defer src=<?= $address."src/js/site.js" ?>></script>
  <script defer src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossOrigin="anonymous" referrerPolicy="no-referrer"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
