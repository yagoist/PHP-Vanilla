<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

session_start();

require_once __DIR__ . '/authorization.php';
require_once __DIR__ . '/includeTemplate.php';
require_once __DIR__ . '/cutString.php';
require_once __DIR__ . '/arraySort.php';
require_once __DIR__ . '/isCurrentUrl.php';
require_once __DIR__ . '/getCars.php';
require_once __DIR__ . '/getMenu.php';
require_once __DIR__ . '/formatPrice.php';

if (isset($_GET['logout']) && $_GET['logout'] === 'yes') {
    logout();
}
