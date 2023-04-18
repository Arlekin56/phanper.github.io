<?php
/*Включаем сессию, чтобы можно было использовать SESSION*/
session_start();
/*Подключение к БД*/
require_once 'Users/vendor/Connect.php';
?>
  <header class="header">
  <div class="header__logo">
    <a href="#"><img src="img/logo.jpg" alt="Логотип" style="width: 100px;"></a>
  </div>
  <nav class="header__nav">
    <ul>
      <li><a href="index.php">О нас</a></li>
      <li><a href="katalog.php">Каталог</a></li>
      <li><a href="where.php">Где нас найти?</a></li>
      <?php if (empty($_SESSION['user'])):?>
      <li><a href="Users/vxod.php">Вход/Регистрация</a></li>
      <?php endif;?>
       <?php if (isset($_SESSION['user'])):?>
        <li><a href="Users/vendor/profile.php">Логин:<?= $_SESSION['user']['Login']?></a></li>
        <li><a href="../Users/vendor/logout.php">Выход</a></li>
        <?php endif;?>
    </ul>
  </nav>
  <div class="header__contacts">
    <p class="header__phone">+7 (123) 456-78-90</p>
    <button class="header__button">Обратная связь</button>
  </div>
</header>
