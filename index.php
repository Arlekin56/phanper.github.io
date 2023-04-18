<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style/index.css">
  <title>Copy Master</title>
</head>
<body>

<!-- Шапка сайта -->

 <?php include "include/header.php"?>

<!-- Баннер сайта -->

<?php
// Получаем текущий URL страницы
$pageUrl = $_SERVER['REQUEST_URI'];

// Получаем список посещенных страниц из куки (если есть)
$visitedPages = $_COOKIE['visited_pages'] ?? '';
$visitedPages = json_decode($visitedPages, true) ?? [];

// Добавляем текущую страницу в список посещенных
$visitedPages[] = $pageUrl;

// Сохраняем список посещенных страниц в куки
setcookie('visited_pages', json_encode($visitedPages), time() + 3600, '/');

// Выводим список посещенных страниц
echo '<h2>Список посещенных страниц:</h2>';
echo '<ul>';
foreach ($visitedPages as $page) {
  echo "<li>$page</li>";
}
echo '</ul>';
?>













<!-- Подвал сайта -->

 <?php include "include/footer.php"?>

</body>
</html>