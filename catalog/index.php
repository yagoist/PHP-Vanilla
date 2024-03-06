<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/src/core.php';

if ($_SESSION['auth'] && $_COOKIE['email']) {
   setcookie('email', $_COOKIE['email'], time() + 3600 * 24 * 31, '/');
}

redirectIfNotAuthorized();

$cars = getCars();

includeTemplate('header.php', ['title' => 'Каталог']);
includeTemplate('cars_catalog.php', ['cars' => $cars]);
includeTemplate('footer.php');
