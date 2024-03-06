<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/src/core.php';

if ($_SESSION['auth'] && $_COOKIE['email']) {
    setcookie('email', $_COOKIE['email'], time() + 3600 * 24 * 31, '/');
}

?>

<?php includeTemplate('header.php', ['title' => 'Личный кабинет'])?>

<div class="space-y-2">
    <div class="space-y-2 pb-4 border-b">
        <p class="text-xl">Мои профиль</p>

        <div class="flex max-w-xl">
            <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">ФИО</div>
            <div class="flex-1 border px-4 py-2">Иван Владимирович Пэхэпэхо</div>
        </div>
        <div class="flex max-w-xl">
            <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">Email</div>
            <div class="flex-1 border px-4 py-2">ivan.php@programmirujy.good</div>
        </div>
        <div class="flex max-w-xl">
            <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">Телефон</div>
            <div class="flex-1 border px-4 py-2">8-900-1001</div>
        </div>
        <div class="flex max-w-xl">
            <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">Активность</div>
            <div class="flex-1 border px-4 py-2">Да</div>
        </div>
        <div class="flex max-w-xl">
            <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">Подписан на рассылку</div>
            <div class="flex-1 border px-4 py-2">Нет</div>
        </div>
    </div>
</div>
<div class="space-y-2">
    <p class="text-xl">Мои группы</p>
    <ul class="list-inside list-disc">
        <li><span class="font-bold">Название группы</span> - описание группы</li>
        <li><span class="font-bold">Название группы</span> - описание группы</li>
        <li><span class="font-bold">Название группы</span> - описание группы</li>
    </ul>
</div>

<?php includeTemplate('footer.php')?>
