<?php
/** @var string $title */
/** @var ?string $headTitle */

$headTitle = $headTitle ?? $title;

$isAuthorized = isAuthorized();
$menu = arraySort(getMenu());
$user = currentUser();
?>

<!doctype html>
<html class="antialiased" lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/assets/css/form.min.css" rel="stylesheet">
    <link href="/assets/css/tailwind.css" rel="stylesheet">
    <link href="/assets/css/base.css" rel="stylesheet">

    <title>Рога и Сила - <?=htmlspecialchars($headTitle)?> </title>
    <link href="/assets/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">
<div class="wrapper flex flex-1 flex-col bg-gray-100">
<header class="bg-white">
    <div class="border-b">
        <div class="container mx-auto block overflow-hidden px-4 sm:px-6 sm:flex sm:justify-between sm:items-center py-4 space-y-4 sm:space-y-0">
            <div class="flex justify-center">
                <a href="/" class="inline-block sm:inline hover:opacity-75">
                    <img src="/assets/images/logo.png" width="222" height="30" alt="">
                </a>
            </div>
            <div>
                <ul class="flex justify-center sm:justify-end items-center space-x-8 text-sm">
                    <?php if (!$isAuthorized) {
                        includeTemplate('buttons/registration.php', ['message' => 'Регистрация']);
                        includeTemplate('buttons/authorization.php', ['message' => 'Авторизация']);

                    } else {
                        includeTemplate('buttons/authorized.php', ['email' => $user['email']]);
                        includeTemplate('buttons/exit.php', ['message' => 'Выход']);
                    }?>
                </ul>
            </div>
        </div>
    </div>
    <div class="border-b">
        <div class="container mx-auto overflow-hidden px-4 sm:px-6">
            <section class="bg-white py-4">
                <?php includeTemplate('menu.php', ['menu' => $menu, 'isAuthorized' => $isAuthorized]);?>
            </section>
        </div>
    </div>
</header>
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h1 class="text-black text-3xl font-bold mb-4"> <?=htmlspecialchars($title)?></h1>
