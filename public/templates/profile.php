<?php
if (!isset($_SESSION["email_user"]) && !isset($_SESSION["password_user"])) {
  header("HTTP/1.1 301 Moved Permanently from 3 line");
  header("Location: http://localhost/hotel_system/authorization/form_auth.php");
}
$email_user = $_SESSION["email_user"];
$query = "SELECT * FROM `users` WHERE email_user = '" . $email_user . "'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
if ($row['role_user'] == 2) {
  $queryUsers = 'Select * from users where role_user != 2';
  $resultUsers = mysqli_query($link, $queryUsers);
?>
  <table style="margin: 50px auto 0 auto;">
    <tbody>
      <tr>
        <td style="padding: 5px 10px; border: 1px solid black">
          ID пользователя
        </td>
        <td style="padding: 5px 10px; border: 1px solid black">
          Имя пользователя
        </td>
        <td style="padding: 5px 10px; border: 1px solid black">
          Логин пользователя
        </td>
        <td style="padding: 5px 10px; border: 1px solid black">
          Почта пользователя
        </td>
        <td style="padding: 5px 10px; border: 1px solid black">
          Номер отеля
        </td>
        <td style="padding: 5px 10px; border: 1px solid black">
          Номер забронированной комнаты
        </td>
        <td style="padding: 5px 10px; border: 1px solid black">

        </td>
      </tr>
      <?php
      for (; $rowUsers = mysqli_fetch_assoc($resultUsers);) {
        $idUser = $rowUsers['id_user'];
        $fullNameUser = $rowUsers['fullName_user'];
        $loginUser = $rowUsers['login_user'];
        $emailUser = $rowUsers['email_user'];
        $queryBooking = 'Select * from booking where id_user = ' . $idUser;
        $resultBooking = mysqli_query($link, $queryBooking);
        $rowBooking = mysqli_fetch_assoc($resultBooking);
        if (!empty($rowBooking)) {
          $queryHotel = 'Select id_hotel from rooms where id_room = ' . $rowBooking['id_room'];
          $resultHotel = mysqli_query($link, $queryHotel);
          $rowHotel = mysqli_fetch_assoc($resultHotel);
        }
      ?>
        <form action="./remove_user.php" method="post">
          <tr>
            <td style="padding: 5px 10px; border: 1px solid black">
              <?= $idUser ?>
              <input name="id_user" value="<?= $idUser ?>" style="display: none;">
            </td>
            <td style="padding: 5px 10px; border: 1px solid black">
              <?= $fullNameUser ?>
            </td>
            <td style="padding: 5px 10px; border: 1px solid black">
              <?= $loginUser ?>
            </td>
            <td style="padding: 5px 10px; border: 1px solid black">
              <?= $emailUser ?>
            </td>
            <td style="padding: 5px 10px; border: 1px solid black">
              <?= $rowHotel['id_hotel'] ? $rowHotel['id_hotel'] : '' ?>
            </td>
            <td style="padding: 5px 10px; border: 1px solid black">
              <?= $rowBooking['id_room'] ? $rowBooking['id_room'] : '' ?>
              <input name="id_room" value="<?= $rowBooking['id_room'] ?>" style="display: none;">
            </td>
            <td style="padding: 5px 10px; border: 1px solid black">
              <button id="drop_user" type="submit">Удалить пользователя из системы</button>
            </td>
          </tr>
        </form>
      <?php
      }
      ?>
    </tbody>
  </table>
<?php
} else {
  $queryBooking = 'Select * from booking where id_user = ' . $_SESSION['id_user'];
  $resultBooking = mysqli_query($link, $queryBooking);
  $rowBooking = mysqli_fetch_assoc($resultBooking);
?>
  <table style="margin: 50px auto 0 auto;">
    <tbody>
      <tr>
        <td style="padding: 5px 10px; border: 1px solid black">
          Название отеля
        </td>
        <td style="padding: 5px 10px; border: 1px solid black">
          Номер комнаты
        </td>
        <td style="padding: 5px 10px; border: 1px solid black">
          Дата заезда
        </td>
        <td style="padding: 5px 10px; border: 1px solid black">
          Дата выезда
        </td>
        <td style="padding: 5px 10px; border: 1px solid black">
          Цена за проживание
        </td>
        <td style="padding: 5px 10px; border: 1px solid black"></td>
      </tr>
      <?php
      if ($rowBooking) {
        $queryRoom = 'Select * from rooms where id_room = ' . $rowBooking['id_room'];
        $resultRoom = mysqli_query($link, $queryRoom);
        $rowRoom = mysqli_fetch_assoc($resultRoom);
        $queryHotel = 'Select fullName_hotel from hotels where id_hotel = ' . $rowRoom['id_hotel'];
        $resultHotel = mysqli_query($link, $queryHotel);
        $rowHotel = mysqli_fetch_assoc($resultHotel);
      }
      ?>
      <tr>
        <td style="padding: 5px 10px; border: 1px solid black">
          <?= $rowHotel['fullName_hotel'] ? $rowHotel['fullName_hotel'] : '' ?>
        </td>
        <td style="padding: 5px 10px; border: 1px solid black">
          <?= $rowBooking['id_room'] ? $rowBooking['id_room'] : '' ?>
        </td>
        <td style="padding: 5px 10px; border: 1px solid black">
          <?= $rowBooking['dateCheckIn_booking'] ? $rowBooking['dateCheckIn_booking'] : '' ?>
        </td>
        <td style="padding: 5px 10px; border: 1px solid black">
          <?= $rowBooking['dateCheckOut_booking'] ? $rowBooking['dateCheckOut_booking'] : '' ?>
        </td>
        <td style="padding: 5px 10px; border: 1px solid black">
          <?php
          if ($rowBooking['dateCheckOut_booking'] && $rowBooking['dateCheckIn_booking']) {
            $difference = strtotime($rowBooking['dateCheckOut_booking']) - strtotime($rowBooking['dateCheckIn_booking']);
            echo ceil($difference / 86400) * $rowRoom['price_room'];
            $_SESSION['id_room'] = $rowBooking['id_room'];
          }
          ?>
        </td>
        <td style="padding: 5px 10px; border: 1px solid black">
          <?= $rowBooking ? '<a href="./remove_booking.php">Отменить бронирование</a>' : '<a href="./remove_booking.php"></a>' ?>
        </td>
      </tr>
    </tbody>
  </table>
<?php
}
?>