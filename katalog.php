<?php
/*Включаем сессию, чтобы можно было использовать SESSION*/
session_start();
/*Подключение к БД*/
require_once 'Users/vendor/Connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <link rel="stylesheet" type="text/css" href="style/katalog.css">
	<title>Copy Master</title>
</head>
<body>

<!-- Шапка сайта -->

  <?php include "include/header.php"?>






<!-- Подвал сайта -->

 <?php include "include/footer.php"?>	
</body>
</html>