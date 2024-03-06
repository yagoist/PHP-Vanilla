<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/src/core.php';

if ($_SESSION['auth'] && $_COOKIE['email']) {
    setcookie('email', $_COOKIE['email'], time() + 3600 * 24 * 31, '/');
}

?>

<?php includeTemplate('header.php', ['title' => 'О нас'])?>

Мы красивые!

<?php includeTemplate('footer.php')?>
